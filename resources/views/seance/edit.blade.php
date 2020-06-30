@include('admin.barre')
@extends('layouts.main')

@section('content')
<div align="right">
	<a href="{{ route('seance.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('seance.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer la date</label>
		<div class="col-md-8">
			<input type="text" name="date" value="{{ $data->date }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer heure bedut</label>
		<div class="col-md-8">
			<input type="text" name="date_debut" value="{{ $data->date_debut }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer heure fin</label>
		<div class="col-md-8">
			<input type="text" name="date_fin" value="{{ $data->date_fin }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer type</label>
		<div class="col-md-8">
			<input type="text" name="type" value="{{ $data->type }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le module</label>
		<div class="col-md-8">
			<input type="text" name="nom_module" value="{{ $data->nom_module }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



