@extends('layouts.main')
@section( 'barre')
@if(Auth::user()->role_id == 3)

	@include('etudiant.barre')

@else

	@include('entreprise.barre')
	
@endif
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
    @if(Auth::user()->role_id == 3)
      <h3 class="page-header"><i class="fa fa fa-bars"></i>Etudiant</h3>
    @else
    <h3 class="page-header"><i class="fa fa fa-bars"></i>Entreprise</h3>
    @endif
	  <ol class="breadcrumb">
      @if(Auth::user()->role_id == 3)
      <li><i class="fa fa-home"></i><a href="/etudiant/home">Home</a></li>
    @else
    <li><i class="fa fa-home"></i><a href="/entreprise/home">Home</a></li>
    @endif
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>offre {{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ url('offres') }} " class="btn btn-default">Back</a>
	</div>
	<br />
   
  
    <div class="thumbnail"  >
    <li>
      <li col-sm-2 ><h3>{{ $offre->titre }} </h3></li>
      <ol>
        <img src="{{ asset('storage/'.$offre->photo) }}"  class="img-thumbnail">
       </ol> 
       <div class="caption">
        
        
    
        </div>
      <div->
        <p>
          les informations néssicaire sur l'offre:<br>
          {{ $offre->description }}

        </p>
      </div->
  </li>
  </div>
 
</div>
@endsection
