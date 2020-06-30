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
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Cours</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="/etudiant">Home</a></li>
		<li><i class="fa fa-bars"></i>les cours</li>
	  </ol>
	</div>
  </div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

		@can('create' , 'App\Cour')
		<a href="{{ route('cours.create') }}" class="btn btn-success btn-sm">Nouveau Coure</a>
		@endcan

<table class="table table-bordered table-striped">
	<tr>
		<th width="">Id</th>
		<th width="">groupe</th>
		<th width=""><i class="icon_profile"></i>professeur</th>
		<th width="">module</th>
		<th width="">chapitre</th>
		<th width="">titre</th>
		<th width="">description</th>
		<th><i class="icon_cogs"></i>operations</th>
	</tr>
	@foreach($data as $key=>$data)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $data->grp}}</td>
			<td>{{ $data->prof}}</td>
			<td>{{ $data->module}}</td>
			<td>{{ $data->chapitre }}</td>
			<td>{{ $data->titre}}</td>
			<td>{{ $data->description }}</td>
			<td>
				
				<form action="{{ route('cours.destroy', $data->id) }}" method="post">
				
					<a class="btn btn-primary" href="{{ route('cours.show', $data->id) }}" ><i class="icon_plus_alt2"></i></a>
					@can('update' , $data)
					<a href="{{ route('cours.edit', $data->id) }}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
					@endcan
					@csrf
					@method('DELETE')
					@can('delete' , $data)
					<button type="submit" class="btn btn-danger"><i class="icon_close_alt2"></i></button>
					@endcan

					<a href="/cours/download/{{ $data->file }}" class="btn btn-default"  title="Bootstrap 3 themes generator">
						<span class="icon_cloud-upload_alt"></span> Download</a>
				</form>
			</td>
		</tr>
	@endforeach
</table>

@endsection