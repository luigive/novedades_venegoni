@extends('main.header');


@section('titulo')
	Agregar Categorias de Ventas
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
                        <div class="panel-title">Agregar Categoria</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form class="form-horizontal" role="form" action="{{route('categorias_guardar')}}" method="POST"  id="form-general" >
                        	@csrf
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input id="producto" type="text" class="form-control" name="nombre" value="" placeholder="nombre del producto">                                        
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