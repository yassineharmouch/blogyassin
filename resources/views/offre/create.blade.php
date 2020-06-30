
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
        <li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
        </ol>
      </div>
      </div>


  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('offres') }}" method="Post" enctype="multipart/form-data">

          {{ csrf_field() }}

              <div class="form-group  @if($errors->get('titre')) has-error @endif" >
                  <label class="col-sm-2 control-label"> Titre </label>
                  <div  class="col-sm-8">
                      <input type="text"  name=' titre' class="form-control" placeholder="Entrer un titre de votre offre" value="{{ old ('titre') }}" >
                    
                      @if($errors->get('titre'))
                            @foreach($errors->get('titre') as $message)
                            <li class="alert alert-danger">{{ $message }}</li>
                            @endforeach
                      @endif  
                  </div>
              </div>
              <br><br><br>



			  <div class="form-group  @if($errors->get('description')) has-error @endif" >
              <label class="col-sm-2 control-label"> description </label>
              <div  class="col-sm-8">
                  <input type="text"  name=' description' class="form-control" value="{{ old ('description') }}" placeholder="entrer les informations de votre offre" >
                
                  @if($errors->get('description'))
                        @foreach($errors->get('description') as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                  @endif 
               </div>   
        </div>
          <br><br>
              <div class="form-group">
              <label  class="col-sm-2 control-label">choisir l'image</label>
              <div  class="col-sm-8"> 
                <input  class="form-control" type="file"  name="photo">
               </div>
               </div> 
               <div class="form-group text-center">
                <div class="col-sm-10" >
                  <br><br>
                <input type="submit"  class="btn btn-primary " value="Enregistrer">
               </div>
               </div>                   
                              
             
             
             
          </form>
          </div>
      </div>
  </div>



@endsection