@extends('main.header');


@section('titulo')
	Productos
@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/b-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css"/>
 
@endsection


@section('scripts')
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/b-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
	<script type="text/javascript" src="{{asset('diseno/js/datatable.js')}}"></script>
	
@endsection


@section('contenido')
<br>
<br>
<br>
<br>
	<div class="container">

		<table id="productos" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>cantidad</th>
                <th>Categoria</th>
                <th>foto</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
			@foreach($productos as $producto)
				<tr>
					<td> {{$producto->nombre}}</td>
					<td> {{$producto->precio}}</td>
					<td> {{$producto->cantidad}}</td>
					<td> {{$producto->id_categoria}}</td>
					<td> {{$producto->foto}}</td>
					<td> opciones </td>
				</tr>
			@endforeach

         </tbody>
     </table>
		
	</div>
@endsection