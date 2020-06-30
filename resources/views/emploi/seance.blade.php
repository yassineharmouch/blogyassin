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
  @can('create' , 'App\Emploi')
						<a href="{{ url('emplois/create') }}" class="btn btn-success">Nouveau seance</a>
						 @endcan
						 <br>
		<div class="container">
			  <div class="row">
				  <div class="col-md-12">
		
				  
				  @if(session()->has('success'))
						  <div class="alert alert-success">
						 {{ session()->get('success') }}
		
						  </div>
						 @endif
		
				  
				  <h1> Emploi </h1>
				  
					<table class="table">
					 <head>
					  <tr>
						  <th>Jour</th>
						  <th>8h30-->10h15</th>
						  <th>10h30-->12h15</th>
						  <th>14h30-->16h15</th>
						  <th>16h30-->18h15</th>
						  <th>Action</th>
		
					  </tr>
					</head>
					  <body>
					  @foreach($emplois as $emploi)
					  <tr>
					 
						  <td>{{ $emploi->jour }}</td>
						 
					  <td>{{ $emploi->premiere_sceance }} </td>
					  <td>{{ $emploi->deux_sceance }} </td>
					  <td>{{ $emploi->troi_sceance }} </td>
					  <td>{{ $emploi->quatre_sceance }} </td>
					  
						  <td>
						  <form action=  "{{ url('emplois/'.$emploi->id) }}" method="post">
						
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						
						  <a href="{{ url('emplois/'.$emploi->id.'/edit') }}" class ="btn btn-default">Editer</a>
		 
						  <button  type='submit' class ="btn btn-danger">Supprimer</button>
		
						  
						  
						</form>
						  
						  </td>
						  @endforeach
					  </tr>
					   
					  </body>
				  </table>
				</div>
			</div>
		</div>  