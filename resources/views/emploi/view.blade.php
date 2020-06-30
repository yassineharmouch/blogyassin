@include('enseignant.barre')
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Emploi du temps</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('cours.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<h3>groupe : {{ $data->grp }} </h3>
	<h3>prof : {{ $data->prof }}</h3>
	<h3>module : {{ $data->module }} </h3>
	<h3>chapitre: {{ $data->chapitre}}</h3>
	<h3>titre: {{ $data->titre}}</h3>
	<h3>description: {{ $data->description}}</h3>
	<p>
        <iframe src="{{ url('storage/'.$data->file) }}" style="width: 600px; height: 500px; " frameborder="0"></iframe>
    </p>
</div>
@endsection
