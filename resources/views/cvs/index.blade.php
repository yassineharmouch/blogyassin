
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

		<h3 class="page-header"><i class="fa fa fa-bars"></i> Etudiant</h3>

@else

       <h3 class="page-header"><i class="fa fa fa-bars"></i> Entreprise</h3>
	
@endif
	  
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/etudiant/home">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>
<br />


@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="">No</th>
		<th width="">nom</th>
		<th width="">prenom</th>
		<th width="">address</th>
		<th width="">filiere</th>
		<th width="">niveau scl.</th>
		<th >description</th>
		<th width="">actions</th>
	</tr>
	@foreach($data as $key=>$data)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $data->nom}}</td>
			<td>{{ $data->prenom}}</td>
			<td>{{ $data->address}}</td>
			<td>{{ $data->filiere }}</td>
			<td>{{ $data->niveau}}</td>
			<td>{{ $data->description }}</td>
			<td>
				
				<form action="{{ route('cvs.destroy', $data->id) }}" method="post">
				
					<a href="{{ route('cvs.show', $data->id) }}" class="btn btn-primary">Show</a>

					@can('update' , $data)
					<a href="{{ route('cvs.edit', $data->id) }}" class="btn btn-warning">Edit</a>
					@endcan
					
					<a href="/cvs/download/{{ $data->file }}">Download</a>
					@csrf
					@method('DELETE')

					@can('delete' , $data)
					<button type="submit" class="btn btn-danger">Delete</button>
					@endcan
				</form>
			</td>
		</tr>
	@endforeach
</table>

@endsection