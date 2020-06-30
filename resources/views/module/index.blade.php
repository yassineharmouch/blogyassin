@if(Auth::user()->role_id == 3)

	@include('etudiant.barre')

@else

	@include('entreprise.barre')
	
@endif

<div align="right">
	<a href="{{ route('module.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Id</th>
		<th width="13%">Code</th>
		<th width="13%">Nom</th>
		<th width="13%">operation</th>
	</tr>
	@foreach($data as $row)
		<tr>
			
			<td>{{ $row->id }}</td>
			<td>{{ $row->code }}</td>
			<td>{{ $row->nom }}</td>
			
			
			<td>
				
				<form action="{{ route('module.destroy', $row->id) }}" method="post">
					<a href="{{ route('module.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('module.edit', $row->id) }}" class="btn btn-warning">Edit</a>
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