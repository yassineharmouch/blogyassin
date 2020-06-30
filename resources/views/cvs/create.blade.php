@extends('layouts.main')
    @section( 'barre')
        @include('etudiant.barre')
    @endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Etudiant</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/etudiant/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>

<div align="right">
	<a href="{{ route('cvs.index') }}" class="btn btn-default">Back</a>
</div>

<form method="POST"  action="{{ route('cvs.store') }}" enctype="multipart/form-data">
	
	@csrf
	{{ csrf_field() }}
	
	<div class="form-group">
		<label  class="col-sm-2 control-label">Entrer le Nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" class="form-control input-lg"  placeholder="votre nom" />
			@if($errors->get('nom'))
                        @foreach($errors->get('nom') as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />

	<div class="form-group">
		<label  class="col-sm-2 control-label">Entrer le prenom</label>
		<div class="col-md-8">
			<input type="text" name="prenom" class="form-control input-lg"  placeholder="votre prenom" />
			@if($errors->get('prenom'))
                        @foreach($errors->get('prenom') as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label  class="col-sm-2 control-label">Entrer l'address</label>
		<div class="col-md-8">
			<input type="text" name="address" class="form-control input-lg"  placeholder="votre addrsse"/>
			@if($errors->get('address'))
			@foreach($errors->get('address') as $message)
			<li class="alert alert-danger">{{ $message }}</li>
			@endforeach
	  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label  class="col-sm-2 control-label">Enter la filiere</label>
		<div class="col-md-8">
			<input type="text" name="filiere" class="form-control input-lg"  placeholder="votre filiere"/>
			@if($errors->get('filiere'))
			@foreach($errors->get('filiere') as $message)
			<li class="alert alert-danger">{{ $message }}</li>
			@endforeach
	  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label  class="col-sm-2 control-label">votre niveau scolaire</label>
		<div class="col-md-8">
			<input type="text" name="niveau" class="form-control input-lg"  placeholder="otre niveau scolaire"/>
			@if($errors->get('niveau'))
			@foreach($errors->get('niveau') as $message)
			<li class="alert alert-danger">{{ $message }}</li>
			@endforeach
	  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label  class="col-sm-2 control-label">Enter description</label>
		<div class="col-md-8">
			<input type="text" name="description" class="form-control input-lg"  placeholder="description"/>
			@if($errors->get('description'))
			@foreach($errors->get('description') as $message)
			<li class="alert alert-danger">{{ $message }}</li>
			@endforeach
	  @endif 
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label  class="col-sm-2 control-label">choisir le fichier</label>
		<div class="col-md-8">
			<input type="file" name="file" />
			@if($errors->get('file'))
			@foreach($errors->get('file') as $message)
			<li class="alert alert-danger">{{ $message }}</li>
			@endforeach
	  @endif 
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="ajouter" class="btn btn-primary input-lg" value="Ajouter" />
	</div>

</form>

@endsection



