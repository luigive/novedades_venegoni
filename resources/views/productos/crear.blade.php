@extends('main.header');


@section('titulo')
	Agregar Producto
@endsection


@section('contenido')

<br>
<br>
 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

        	@include('advertencia')
        	@include('categoria.mensaje')
            <div class="panel panel-success" >
                    <div class="panel-heading">
                        <div class="panel-title">  
                             @if ( @isset($resultado->nombre))
                                Modificar Prodcuto
                                {{$algo = $resultado->nombre}}
                             @else
                                Agregar Producto
                                {{$algo = ''}}
                             @endif
                        
                             <a href="{{route('categorias')}}" class="btn btn-primary btn-md">
                                 <span class="glyphicon glyphicon-repeat"></span>
                            </a>
                        
                        </div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            @if ( @isset($resultado->nombre))
                                <form class="form-horizontal" role="form" action="{{route('categorias_actualizar',['id' => $resultado->id])}}" method="POST"  id="form-general" >
                            @else
                                <form class="form-horizontal" role="form" action="{{route('guardar_productos')}}" method="POST"  id="form-general" enctype="multipart/form-data">
                                  <!-- esta parter del enctype="multipart/form-data" puede que sea pára lo de las imagenes -->
                            @endif


                             @if ( @isset($resultado->nombre))
                                 @csrf @method('put')
                             @else
                                  @csrf
                             @endif
                        	
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input id="producto" type="text" class="form-control" name="nombre" value="{{$algo}}" placeholder="nombre del producto">                                        
                            </div>
                            <!-- precio -->
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input id="precio" type="number" class="form-control" name="precio" min="0" placeholder="Precio del producto">
                                      
                            </div>
                            <!-- cantidad -->
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                <input id="cantidad" type="number" class="form-control" name="cantidad" min="0" placeholder="Cantidad inicial del producto">
                                         
                            </div>

                             <!-- categoria -->
                            <div style="margin-bottom: 25px" class="input-group">
                              <div class="container">
                                <div class="col-md-2">
                                  <label for="categorias_s">Categorias</label>
                                  <select class="form-control" id="categorias_s" name="id_categoria">
                                    @foreach($categorias as $categoria)
                                      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="col-md-2">
                                  <label for="foto">Foto del producto</label>
                                  <input type="file" class="form-control-file" id="foto" name="foto"> 
                                </div> <!-- final del lg --> 
                              </div>     <!-- final del container -->                                    
                            </div>

     
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-primary">Agregar</button>
                                      <button type="cancel" class="btn btn-danger">Cancelar</button>
                                </div>  
                            </form>     



                        </div>                     
                    </div>  
        </div>



    
@endsection