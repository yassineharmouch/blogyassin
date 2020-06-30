
@include('enseignant.barre')
@extends('layouts.main')

@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Enseignant</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/enseignant/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
  </div>
  
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('notes/'.$note->id) }}" method="post" >
          <input type="hidden" name="_method" value="PUT">
         
            

            
         
          {{ csrf_field() }}

              <div class="form-group">
              <label for="">Nom Et Prenom </label>
              <input type="text"  name='nom_et_prenom' class="form-control" value="{{ $note->nom_et_prenom }}">
              </div>

              <div class="form-group">
              <label > Matiére</label>
              <input  name='matiere ' class="form-control" value="{{ $note->matiere }}" >
              </div>

              <div class="form-group">
              <label for=""> cc1 </label>
              <input type="text"  name='semestre' class="form-control" value="{{ $note->cc1 }}">
              </div>

              
              <div class="form-group">
              <label for=""> cc2 </label>
              <input type="text"  name='semestre' class="form-control" value="{{ $note->cc2 }}">
              </div>

              <div class="form-group">
              <label for=""> Note Final</label>
              <input type="text"  name='note_finale' class="form-control" value="{{ $note->note_finale }}">
              </div>




                <div class="form-group">
              <input type="submit"  class="form-control btn btn-danger " value="Modifier">
              </div>
          </form>
          </div>
      </div>
    </div>


@endsection