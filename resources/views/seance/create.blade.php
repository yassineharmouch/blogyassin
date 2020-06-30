@include('admin.barre')
@extends('layouts.main')

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
	<a href="{{ route('seance.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('seance.store') }}" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-md-4 text-right" >choisir module</label>
		<div class="col-md-8">
			<select name="nom_module"  class="form-control input-lg"  style="width:300px;">
			@foreach ($data as $row)
			
			 <option value="{{ $row->nom }}">{{ $row->nom }}</option>

			@endforeach 
            
         </select>
	</div>
	<br />
	<br />
	<br />
	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer la date</label>
		<div class="col-md-8">
			<input type="date" name="date" class="form-control input-lg"  style="width:300px;"/>
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer heure debut</label>
		<div class="col-md-8">
			<select name="date_debut" id="date_debut"   class="form-control input-lg"  style="width:300px;">
              <option value="08h30min">08h30min</option>
              <option value="10h30min">10h30min</option>
              <option value="12h30min">12h30min</option>
              <option value="14h30min">14h30min</option>
              <option value="16h30min">16h30min</option>
         </select>
		


	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer heure fin</label>
		<div class="col-md-8">
			<select name="date_fin" id="date_fin"   class="form-control input-lg"  style="width:300px;">
              <option value="10h15min">10h15min</option>
              <option value="12h15min">12h15min</option>
              <option value="14h15min">14h15min</option>
              <option value="16h15min">16h15min</option>
              <option value="18h15min">18h15min</option>
         </select>
		


	</div>
	<br />
	<br />
	<br />
	
	<div class="form-group">
		<label class="col-md-4 text-right">type sceance</label>
		<div class="col-md-8">
			<select name="type" id="date_debut"  class="form-control input-lg"  style="width:300px;">
              <option value="08h30min">Cour</option>
              <option value="10h30min">Td</option>
              <option value="12h30min">TP</option>
          
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



