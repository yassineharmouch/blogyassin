@include('admin.barre')
@extends('layouts.main')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('module.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<h3>Nom : {{ $data->nom }} </h3>
	<h3>code: {{ $data->code }}</h3>
	<p>le laguage c++ est un longuage orionter objet ,li est efficace pour la progrmation des jeux des systeme d'exploitation</p>

</div>
@endsection
