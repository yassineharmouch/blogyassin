@extends('layouts.enseignant')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('enseignant.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('enseignant.store') }}" enctype="multipart/form-data">

	@csrf

	<div class="form-group">
		<label class="col-md-4 text-right">Entrer Nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer Prenom</label>
		<div class="col-md-8">
			<input type="text" name="prenom" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le matricule</label>
		<div class="col-md-8">
			<input type="text" name="matricule" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter module enseingnie</label>
		<div class="col-md-8">
			<input type="text" name="module" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label class="col-md-4 text-right">choisir l'image de profel</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



