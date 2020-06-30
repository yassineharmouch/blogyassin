@extends('voyager::master')

@section('content')
<div class="row">
	<div class="col-lg-12">
	  <h3 class="page-header"><i class="fa fa fa-bars"></i> Emploi du temps</h3>
	  <ol class="breadcrumb">
		<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
		<li><i class="fa fa-bars"></i>{{ ucfirst(request()->segment(1)) }}</li>
		<li><i class="fa fa-square-o"></i>{{ ucfirst(request()->segment(2)) }}</li>
	  </ol>
	</div>
  </div>

  <div class="container">
      <div class="row">
          <div class="col-md-12">

          <form action="{{ url('emplois') }}" method="Post" >

          {{ csrf_field() }}

          

                <label for="jour">jour:</label>

                 <select name="jour" id="jour">
                   <option value="lundi">lundi</option>
                   <option value="mardi">mardi</option>
                   <option value="mercredi">Mercredi</option>
                   <option value="jeudi">jeudi</option>
                   <option value="vendredi">vendredi</option>
                   <option value="samedi">samdei</option>
                 </select>
            
                <br />
                <br />
                <br />
                <div class="form-group  @if($errors->get('premiere_sceance')) has-error @endif" >
              <label class="col-md-2 text-right">8h30->10h15( module : salle) </label>
                  <div class="col-md-8">
                  <select name='premiere_sceance'  class="form-control input-lg"  style="width:300px;">
                    @foreach ($module as $row)
                    
                    <option value="{{ $row->nom }}">{{ $row->nom }}</option>
              
                    @endforeach 
                          
                      </select>
                  @if($errors->get('premiere_sceance'))
                        @foreach($errors->get('premiere_sceance') as $message)
                        <li>{{ $message }}</li>
                  
                  
                        @endforeach
                    @endif    
                  </div>

                </div>


                <div class="form-group  @if($errors->get('deux_sceance')) has-error @endif" >
              <label for="">10h30->12h15( module : salle) </label>
              <input type="text"  name='deux_sceance' class="form-control" value="{{ old ('deux_sceance') }}" >
              @if($errors->get('deux_sceance'))
                    @foreach($errors->get('deux_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>




                <div class="form-group  @if($errors->get('troi_sceance')) has-error @endif" >
              <label for="">14h30->16h15( module : salle) </label>
              <input type="text"  name='troi_sceance' class="form-control" value="{{ old ('troi_sceance') }}" >
              @if($errors->get('troi_sceance'))
                    @foreach($errors->get('troi_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>
                       

                <div class="form-group  @if($errors->get('quatre_sceance')) has-error @endif" >
              <label for="">16h30->18h15( module : salle) </label>
              <input type="text"  name='quatre_sceance' class="form-control" value="{{ old ('quatre_sceance') }}" >
              @if($errors->get('quatre_sceance'))
                    @foreach($errors->get('quatre_sceance') as $message)
                    <li>{{ $message }}</li>
              
              
                    @endforeach
                @endif    
             

                </div>
                       

              <div class="form-group">
             
              <input type="submit"  class="form-control btn btn-primary " value="Enregistrer">
              </div>
          </form>
          </div>
      </div>
  </div>



@endsection