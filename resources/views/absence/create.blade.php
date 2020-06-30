@extends('layouts.enseignant')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('absence.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('absence.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">entrer un commentaire</label>
		<div class="col-md-8">
			<input type="text" name="commentaire" class="form-control input-lg"  style="width:300px;"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">l'absence justie</label>
		<div class="col-md-8">	
			<select name="justifie" id="justifie"   class="form-control input-lg"  style="width:300px;">
			<option value="1">oui</option>
			<option value="0">non</option>
		
	   </select>
		</div>
	</div>
	<br />
	<br />
	<br />
	
<div class="form-group">
	<label class="col-md-4 text-right" >id sceance</label>
	<div class="col-md-8">
		<select name="seance_id"   id="seance_id" class="form-control input-lg"  style="width:300px;">
		@foreach ($seance as $row)
		
		 <option value="{{ $row->id }}">{{ $row->date}}</option>

		@endforeach 
		
	 </select>
</div>
<br />
<br />
<br />
<div class="form-group">
	<label class="col-md-4 text-right" >idl'etudiante</label>
	<div class="col-md-8">
		<select name="etudiant_id"  class="form-control input-lg"  style="width:300px;">
		@foreach ($data as $row)
		
		 <option value="{{ $row->id }}">{{ $row->nom }}</option>

		@endforeach 
		
	 </select>
</div>
<br />
<br />
<br />

	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>
@endsection



