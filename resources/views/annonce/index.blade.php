
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
		<li><i class="fa fa-home"></i><a href="/etudiant/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
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

<section id="annonces" class="services">
<div class="container">
      <div class="row">
          <div class="col-md-12">

                @can('create' , 'App\Annonce')
              <a href="{{ url('annonces/create') }}" class="btn btn-success">Nouveau offre </a>
                 @endcan
                  
                <br />
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                  <p>{{ $message }}</p>
                </div>
                @endif
                  <div class="row" >

      
                
              <div class="row" >
                  @foreach($annonces as $annonce)
                      <div class="col-sm-6 col-md-4" >
                          <div class="thumbnail"  >
                
                        <img src="{{ asset('storage/'.$annonce->photo) }}" alt="Bootstrap" class="img-thumbnail">
                        <div class="caption">
                                <h3>{{ $annonce->titre }}</h3>
                                <p>...</p>
                                <p>
                                <form action=  "{{ url('annonces',['id' => $annonce->id]) }}" method="post">
                                        
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                      <a href="{{ url('annonces/'.$annonce->id) }}" class="btn btn-primary" role="button">show</a>
                                      @can('update' , $annonce)
                                      <a href="{{ url('annonces/'.$annonce->id.'/edit') }}" class="btn btn-warning" role="button">editer</a>
                                      @endcan
                                      @can('delete' , $annonce)
                                      <button type="submit" class="btn btn-danger" role="button">supprimer</button>
                                      @endcan
                                     </form>
                                </p>
                        </div>
                        </div>
                        </div>
                
                  @endforeach
              </div>
            
      </div>
    </div>
</div>  



@endsection
