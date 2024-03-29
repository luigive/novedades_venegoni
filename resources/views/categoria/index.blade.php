@extends('main.header');


@section('titulo')
	Categorias de Ventas
@endsection

@section('styles')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{asset('diseno/js/alerta.js')}}"></script>
@endsection


@section('contenido')
	<br>
	<br>
	<br>
<div class="container">
	@include('categoria.mensaje')
	<table class="table" id="tabla-data">
	  <thead class="thead-dark">
	    <tr>
	    <th scope="col"># </th>
	      <th scope="col">Categoria</th>
	      <th scope="col">
	      	<a href="{{route('categorias_add')}}" class="btn btn-success btn-md">
          	  <span class="glyphicon glyphicon-plus"></span>
      	    </a>
    	  </th>
	    </tr>

	  </thead>
	  <tbody>
	  	<!-- aqui va el contenido sde la tabla como tal -->

	  	@foreach($categorias as $categoria)
	  		<tr>
	  			<th scope="row"> {{$categoria->id}}</th>
	  			<td>{{$categoria->nombre}}</td>
	  			<td>
	  				<a href="{{route('editar_categoria',['id' => $categoria->id])}}">
          				<span class="glyphicon glyphicon-pencil"></span>
        			</a>
        		</td>
        			<td>
        			<form method="POST" action="{{route('eliminar_categoria', ['id' => $categoria->id])}}" name="form-eliminar" id="form-eliminar" name="form-eliminar" class="form-eliminar">
        				@csrf @method("delete")
        				<!-- esto hay que corregirlo el eventyo ya que no elimina correctamente onclick="preguntar($categoria->id)" -->
        				<button type="submit" onclick="preguntar($categoria->id)"><span class="glyphicon glyphicon-trash"></span></button>
        			</form>
        			</td>
        		
	  		</tr>

	  	@endforeach
	 	 

	  </tbody>
	</table>
</div>




@endsection