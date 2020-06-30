@extends('voyager::master')
@section('content')

<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i>Enseignant</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
  <div class="container">  
     <div align="right">
      <button type="button" name="create_enseignant" id="create_enseignant" class="btn btn-success btn-sm">Create Record</button>
     </div>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped" id="user_table">
           <thead>
            <tr>
               <th width="10%">Image</th>
               <th width="13%">Nom</th>
               <th width="13%">Prenom</th>
               <th width="13%">matricule</th>
               <th width="13%">module</th>
                <th width="30%">Action</th>
            </tr>
           </thead>
       </table>
   </div>
   <br />
   <br />
  </div>
</div>


<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter un enseignant</h4>
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="col-sm-2 control-label">Nom:</label>
                <div class="col-sm-8">
                    <input type="text" name="nom" id="nom" class="form-control input-lg" />
                </div>
            </div>
           
            <div class="form-group">
                <label  class="col-sm-2 control-label">Prenom:</label>
                <div class="col-md-8">
                    <input type="text" name="prenom" id="prenom" class="form-control input-lg" />
                </div>
            </div>
        
            <div class="form-group">
                <label  class="col-sm-2 control-label">Matricule:</label>
                <div class="col-md-8">
                    <input type="text" name="matricule" id="matricule" class="form-control input-lg" />
                </div>
            </div>
            
            <div class="form-group">
                <label  class="col-sm-2 control-label">Module:</label>
                <div class="col-md-8">
                    <input type="text" name="module" id="module" class="form-control input-lg" />
                </div>
            </div>

           <div class="form-group">
            <label class="control-label col-md-4">Select Profile Image : </label>
            <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div>
           <br />
           <div class="form-group" align="center">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
           </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@stop
@section('javascript')
<script>
    $(document).ready(function(){
    
     $('#user_table').DataTable({
      processing: true,
      serverSide: true,
      ajax:{
       url: "{{ route('enseignant.index') }}",
      },
      columns:[
       {
        data: 'image',
        name: 'image',
        render: function(data, type, full, meta){
         return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
        },
        orderable: false
       },
       {
        data: 'nom',
        name: 'nom'
       },
       {
        data: 'prenom',
        name: 'prenom'
       },
       {
        data: 'matricule',
        name: 'matricule'
       },
       {
        data: 'module',
        name: 'module'
       },
       {
        data: 'action',
        name: 'action',
        orderable: false
       }
      ]
     });
    
     $('#create_enseignant').click(function(){
      $('.modal-title').text("Add New Record");
         $('#action_button').val("Add");
         $('#action').val("Add");
         $('#formModal').modal('show');
     });
    
     $('#sample_form').on('submit', function(event){
      event.preventDefault();
      if($('#action').val() == 'Add')
      {
       $.ajax({
        url:"{{ route('enseignant.store') }}",
        method:"POST",
        data: new FormData(this),
        contentType: false,
        cache:false,
        processData: false,
        dataType:"json",
        success:function(data)
        {
         var html = '';
         if(data.errors)
         {
          html = '<div class="alert alert-danger">';
          for(var count = 0; count < data.errors.length; count++)
          {
           html += '<p>' + data.errors[count] + '</p>';
          }
          html += '</div>';
         }
         if(data.success)
         {
          html = '<div class="alert alert-success">' + data.success + '</div>';
          $('#sample_form')[0].reset();
          $('#user_table').DataTable().ajax.reload();
         }
         $('#form_result').html(html);
        }
       })
      }
    
      if($('#action').val() == "Edit")
      {
       $.ajax({
        url:"{{ route('enseignant.update') }}",
        method:"POST",
        data:new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType:"json",
        success:function(data)
        {
         var html = '';
         if(data.errors)
         {
          html = '<div class="alert alert-danger">';
          for(var count = 0; count < data.errors.length; count++)
          {
           html += '<p>' + data.errors[count] + '</p>';
          }
          html += '</div>';
         }
         if(data.success)
         {
          html = '<div class="alert alert-success">' + data.success + '</div>';
          $('#sample_form')[0].reset();
          $('#store_image').html('');
          $('#user_table').DataTable().ajax.reload();
         }
         $('#form_result').html(html);
        }
       });
      }
     });
    
     $(document).on('click', '.edit', function(){
      var id = $(this).attr('id');
      $('#form_result').html('');
      $.ajax({
       url:"/enseignant/"+id+"/edit",
       dataType:"json",
       success:function(html){
        $('#nom').val(html.data.nom);
        $('#prenom').val(html.data.prenom);
        $('#matricule').val(html.data.matricule);
        $('#module').val(html.data.module);
        $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
        $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
        $('#hidden_id').val(html.data.id);
        $('.modal-title').text("Edit New Record");
        $('#action_button').val("Edit");
        $('#action').val("Edit");
        $('#formModal').modal('show');
       }
      })
     });
    
     var user_id;
    
     $(document).on('click', '.delete', function(){
      user_id = $(this).attr('id');
      $('#confirmModal').modal('show');
     });
    
     $('#ok_button').click(function(){
      $.ajax({
       url:"enseignant/destroy/"+user_id,
       beforeSend:function(){
        $('#ok_button').text('Deleting...');
       },
       success:function(data)
       {
        setTimeout(function(){
         $('#confirmModal').modal('hide');
         $('#user_table').DataTable().ajax.reload();
        }, 2000);
       }
      })
     });
    
    });
    </script>
    @stop