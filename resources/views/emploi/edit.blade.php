@extends('voyager::master')

@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Emploi du temps</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
  
  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('emplois/'.$emploi->id) }}" method="post" >
          <input type="hidden" name="_method" value="PUT">
         
            

            
         
          {{ csrf_field() }}

              <div class="form-group">
              <label for="">jour </label>
              <input type="text"  name='jour' class="form-control" value="{{ $emploi->jour }}">
              </div>




              <div class="form-group">
              <label for="">>8h30->10h15( module : salle)</label>
              <input type="text"  name='premiere_sceance' class="form-control" value="{{ $emploi->premiere_sceance }}">
              </div>
                


               <div class="form-group">
              <label for="">>10h30->12h15( module : salle)</label>
              <input type="text"  name='deux_sceance' class="form-control" value="{{ $emploi->deux_sceance }}">
              </div>



              <div class="form-group">
              <label for="">>14h30->16h15( module : salle)</label>
              <input type="text"  name='troi_sceance' class="form-control" value="{{ $emploi->troi_sceance }}">
              </div>



              <div class="form-group">
              <label for="">>16h30->18h15( module : salle)</label>
              <input type="text"  name='quatre_sceance' class="form-control" value="{{ $emploi->quatre_sceance }}">
              </div>







                <div class="form-group">
              <input type="submit"  class="form-control btn btn-danger " value="Modifier">
              </div>
          </form>
          </div>
      </div>
    </div>


@endsection