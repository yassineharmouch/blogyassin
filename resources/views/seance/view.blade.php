@include('admin.barre')
@extends('layouts.main')

@section('content')
<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('seance.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<h3>Nom : {{ $data->module }} </h3>
	<h3>Prenom : {{ $data->date }}</h3>
	<h3>CNE : {{ $data->date_debut }} </h3>
	<h3>Grp: {{ $data->date_fin}}</h3>
	<h3>Note: {{ $data->type}}</h3>
</div>
@endsection
