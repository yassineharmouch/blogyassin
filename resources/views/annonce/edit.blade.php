@extends('layouts.main')
@section( 'barre')
@include('entreprise.barre')
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i>Entreprise</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/entreprise/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>annonce {{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('annonces/'.$offre->id) }}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">     

            
         
          {{ csrf_field() }}

              <div class="form-group">
              <label class="col-sm-2 control-label"> Titre </label>
                <div  class="col-sm-8">
                <input type="text"  name='titre' class="form-control" value="{{$annonce->titre }}">

                      @if($errors->get('titre'))
                        @foreach($errors->get('titre') as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                      @endif 
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label class="col-sm-2 control-label"> Description</label>
                    <div  class="col-sm-8">
                        <input type="text"  name='description' class="form-control" value="{{$annonce->description }}">
                          
                        @if($errors->get('description'))
                              @foreach($errors->get('description') as $message)
                              <li class="alert alert-danger">{{ $message }}</li>
                              @endforeach
                          @endif
                        </div>  
              </div>
              <br><br>
                    <div class="form-group">
                      <label class="col-md-2  control-label">choisir l'image</label>
                      <div class="col-md-8">
                          <input  class="form-control" type="file"  name="photo">
                          <input type="hidden" name="hidden_file" value="{{$annonce->photo }}" />
                      </div>
                  </div>
                  <br><br>
                    <div class="form-group text-center">
                      <div class="col-md-8">
                     <input type="submit"  class="btn btn-primary  " value="Modifier">
                      </div>
                    </div>
                </form>
                </div>
      </div>
    </div>


@endsection