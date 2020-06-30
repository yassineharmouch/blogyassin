@include('admin.barre')
@extends('layouts.main')

@section('content')

<div align="right">
	<a href="{{ route('seance.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Module</th>
		<th width="13%">date sceance</th>
		<th width="13%">heure debut</th>
		<th width="13%">heure fin</th>
		<th width="13%">type</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>{{ $row->nom_module}}</td>
			<td>{{ $row->date }}</td>
			<td>{{ $row->date_debut }}</td>
			<td>{{ $row->date_fin }}</td>
			<td>{{ $row->type }}</td>
			<td>
				
				<form action="{{ route('seance.destroy', $row->id) }}" method="post">
					<a href="{{ route('seance.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('seance.edit', $row->id) }}" class="btn btn-warning">Edit</a>
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