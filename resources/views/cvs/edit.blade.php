@extends('layouts.main')
    @section( 'barre')
        @include('etudiant.barre')
    @endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Etudiant</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/etudiant/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
<div align="right">
	<a href="{{ route('cvs.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('cvs.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">changer le nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" value="{{ $data->nom }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">changer le prenom</label>
		<div class="col-md-8">
			<input type="text" name="prenom" value="{{ $data->prenom}}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">changer l'address</label>
		<div class="col-md-8">
			<input type="text" name="address" value="{{ $data->address }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">changer filiere</label>
		<div class="col-md-8">
			<input type="text" name="filiere" value="{{ $data->filiere }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">changer niveau scolaire</label>
		<div class="col-md-8">
			<input type="text" name="niveau" value="{{ $data->niveau }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer description</label>
		<div class="col-md-8">
			<input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">choisir le n fichier</label>
		<div class="col-md-8">
			<input type="file" name="file" />
			<input type="hidden" name="hidden_file" value="{{ $data->file }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



