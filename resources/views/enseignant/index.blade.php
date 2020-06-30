@extends('layouts.enseignant')

@section('content')

<div align="right">
	<a href="{{ route('enseignant.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Image</th>
		<th width="13%">Nom</th>
		<th width="13%">Prenom</th>
		<th width="13%">Matricule</th>
		<th width="13%">module</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->nom }}</td>
			<td>{{ $row->prenom }}</td>
			<td>{{ $row->matricule }}</td>
			<td>{{ $row->module }}</td>
			<td>
				
				<form action="{{ route('enseignant.destroy', $row->id) }}" method="post">
					<a href="{{ route('enseignant.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('enseignant.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection