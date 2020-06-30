@extends('layouts.enseignant')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('sceance.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<h3>Nom : {{ $data->justifie }} </h3>
	<h3>Prenom : {{ $data->date }}</h3>
	<h3>CNE : {{ $data->date_debut }} </h3>
	<h3>Grp: {{ $data->date_fin}}</h3>
	<h3>Note: {{ $data->type}}</h3>
</div>
@endsection
