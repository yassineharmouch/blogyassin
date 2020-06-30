@include('admin.barre')
@extends('layouts.main')

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
	<a href="{{ route('module.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('module.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">ajouter un module</label>
		<div class="col-md-8">
			<input type="text" name="nom" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">ajouter le code</label>
		<div class="col-md-8">
			<input type="text" name="code" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection



