@extends('layouts.main')
@section( 'barre')
@if(Auth::user()->role_id == 3)

	@include('etudiant.barre')

@else

	@include('enseignant.barre')
	
@endif
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Notes</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
	  </ol>
	</div>
  </div>

<div class="container">
      <div class="row">
          <div class="col-md-12">

          
          @if(session()->has('success'))
                  <div class="alert alert-success">
                 {{ session()->get('success') }}

                  </div>
                 @endif
 
          <h1> Les Notes </h1>
          
          <div class="pull-right">
          @foreach($notes as $note)
          @can('create' , $note)
          <a href="{{ url('notes/create') }}" class="btn btn-success">Ajouter une note  </a>
          @endcan
          @endforeach
          </div>

            <table class="table">
             <head>
              <tr>
                  <th>Nom Et Prénom   </th>
                  <th>Matiére</th>
                  <th>cc1</th>
                  <th>cc2</th>
                  <th>Note</th>
                  
                  <th>Action</th>

              </tr>
            </head>
              <body>
              @foreach($notes as $note)
              <tr>
                  <td>{{ $note->nom_et_prenom }}  </td>
                  <td>{{ $note->matiere }}</td>
                  <td>{{ $note->cc1 }}</td>
                  <td>{{ $note->cc2 }}</td>
                  <td>{{ $note->note_finale }}</td>
                  
                  
                  <td>
                  <form action=  "{{ url('notes/'.$note->id) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                


                         
                  @can('update' , $note)
                  <a href="{{ url('notes/'.$note->id.'/edit') }}" class ="btn btn-default">Editer</a>
                  @endcan

                   @can('delete' , $note)
                  <button  type='submit' class ="btn btn-danger">Supprimer</button>
                  @endcan
                </form>
                  
                  </td>
              </tr>
                @endforeach
              </body>
          </table>
        </div>
    </div>
</div>          
@endsection