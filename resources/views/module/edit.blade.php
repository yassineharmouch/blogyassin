@include('admin.barre')
@extends('layouts.main')

@section('content')
<div align="right">
	<a href="{{ route('module.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('module.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Editer le nom du module</label>
		<div class="col-md-8">
			<input type="text" name="nom" value="{{ $data->nom }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Editer le code du module</label>
		<div class="col-md-8">
			<input type="text" name="code" value="{{ $data->code }}" class="form-control input-lg" />
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



