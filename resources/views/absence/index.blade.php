@extends('layouts.enseignant')

@section('content')

<div align="right">
	<p>creer un sceance</p>
	<a href="{{ route('seance.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<div>
<li>date de sceance :{{ $seance->date }}</li>
<li>heure debut:{{ $seance->date_debut }}</li>
<li>heure fin :{{ $seance->date_fin }}</li>
<li>type sceance :{{ $seance->type }}</li>
<li>module de sceance :{{ $seance->nom_module }}</li>

<a href="{{ route('seance.edit', $seance->id) }}" class="btn btn-success btn-sm">Modifier</a>
</div>

<table class="table table-bordered table-striped">
	<tr>
		<th width="13%">image</th>
		<th width="10%">CNE</th>
		<th width="13%">nom</th>
		<th width="13%">prenom</th>
		
		<th width="13%">affecter abs</th>
		<th width="13%">etat</th>
	</tr>
	
	@foreach( $data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->cne }}</td>
			<td>{{ $row->nom }}</td>
			<td>{{ $row->prenom }}</td>
			
			<td>
				
				<div align="right">
					<a href="{{ route('absence.create', $row->cne) }}" class="btn btn-success btn-sm">affecter</a>
				</div>
			</td>
				<td>{{ $absence->justifie}}</td>
		</tr>
	
	@endforeach
</table>

@endsection