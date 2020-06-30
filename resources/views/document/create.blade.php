@extends('layouts.main')
@section( 'barre')
@include('enseignant.barre')
@endsection
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
	<a href="{{ route('cours.index') }}" class="btn btn-default">Back</a>
</div>

<form method="POST"  action="{{ route('cours.store') }}" enctype="multipart/form-data">
	
	@csrf
	{{ csrf_field() }}
	<div class="form-group">
		<label class="col-sm-2 control-label">Entrer groupe</label>
		<div class="col-md-8">
			<input type="text" name="grp" class="form-control input-lg"  placeholder="groupe"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">Enseignant</label>
		<div class="col-md-8">
			<input type="text" name="prof" class="form-control input-lg"  placeholder="le nom du prof" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">Entrer module</label>
		<div class="col-md-8">
			<input type="text" name="module" class="form-control input-lg"  placeholder="module"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">Enter chapitre</label>
		<div class="col-md-8">
			<input type="text" name="chapitre" class="form-control input-lg"  placeholder="chapitre"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">Enter titre</label>
		<div class="col-md-8">
			<input type="text" name="titre" class="form-control input-lg"  placeholder="titre"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">Enter description</label>
		<div class="col-md-8">
			<input type="text" name="description" class="form-control input-lg"  placeholder="description"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-sm-2 control-label">choisir le fichier</label>
		<div class="col-md-8">
			<input type="file" name="file" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="ajouter" class="btn btn-primary input-lg" value="Ajouter" />
	</div>

</form>

@endsection



