@extends('main.header');


@section('titulo')
	Novedades Venegoni
@endsection


@section('contenido')
 <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<!--<span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>-->
                    <h2 class="section-heading" >CONTAMOS CON ROPA PARA HOMBRES MUJERES Y NIÑOS</h2>
                    <p class="text-light">Novedades Venegoni le ofrece a su clientela una variedad de estilos para todos los gustos, tambien contamos con diversos productos que facilitaran su dia a dia. </p>
                </div>
            </div>
        </div>
    </section>

	<!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">

            	<!--tamaño del circulo de la foto-->
                <div class="col-sm-4">
                        
       
                    <img class="img-responsive img-circle center-block " src="{{asset('diseno/images/hombre.jpg')}}" alt=""  style="border-style:solid;border-width:1px;" >
                </div>

                <div class="col-sm-6">
                	<h2 class="section-header" align="center" >REALZA TU ESTILO</h2>
                	<p class="section-header" class="text-center" align="justify">Contamos con diversos metodos de pago para hacerle la vida mas facil, tenemos el pago en Bolivares tanto en efectivo como por transferencia, pago en dolares, pago a traves de Wester Union, pago en peso chileno por tranasferencia bancaria.<br>
                	Despues de realizar el pago del producto de su preferencia debe enviar el comprobante de pago a nuestro correo electronico o via Whatsapp y posteriormente se realizar la entrega o envio del producto segun sea el caso.<br>


                	</p>
                	<!--<a href="#" class="btn btn-primary btn-lg">Classify It</a>-->
                </div>                
                
            </div>
        </div>
    </section>

	<!-- Content 2 -->
     <section class="content content-2">
        <div class="container">
            <div class="row">

            	<!--tamaño del circulo de la foto-->
                <div class="col-sm-6">
                	<h2 class="section-header" align="center">LOS MEJORES ESTILOS PARA ELLOS</h2><br>
                	<p class="section-header" align="justify">Tenemos una gran variedad de prendas de vestir para los pequeños de la casa, estilos unicos para diversos gustos.
                		
                	</p>
                	<!--<a href="#" class="btn btn-default btn-lg">Test It</a>-->
                </div> 

                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="{{'diseno/images/nino2.jpg'}}" alt="">
                </div>            
                
            </div>
        </div>
    </section>    

    <!-- Promos  -->
	<!--<div class="container-fluid">-->

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
     
      

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{'diseno/images/prueba2.png'}}" alt="Los Angeles" >
      </div>

      <div class="item">
        <img src="{{'diseno/images/prueba3.png'}}" alt="" >
      </div>
      <!-- style="width:100%;"  style="width:100%;" -->
    
      <div class="item">
        <img src="{{'diseno/images/cartera2.png'}}" alt="" >
      </div>

      <div class="item">
        <img src="{{'diseno/images/chica2.jpg'}}" alt="" >
      </div>
       
       <div class="item">
        <img src="{{'diseno/images/chica8.jpg'}}" alt="" >
      </div>

      <div class="item">
        <img src="{{'diseno/images/chica7.jpg'}}" alt="" >
      </div>

   </div>

   


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

	<!-- Content 3 -->
     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"> <!--<span class="glyphicon glyphicon-pushpin text-primary"></span>--><br> ENVIOS Y CAMBIOS</h2>
			<p class="" align="justify">Realizamos envios en toda Venezuela solo debe indicar al momento de su compra si la entrega es personal o a traves de una empresa de envio. Los gastos de envio del producto corren por cuenta del cliente. Los envios por concepto de cambio del producto tambien corren por cuenta del cliente.<br>
			Los cambios del producto se realizan si el producto esta en el mismo estado en el cual fue entregado o enviado. Novedades Venegoni no se hace responsable por las empresas de envios dentro de Venezuela, si su producto llega en mal estado o sufre algun daño debe comunicarse con la empresa que realizo dicho envio.<br>
			Los cambios se realizan por concepto de talla, es decir, antes de realizar el pago del producto el cliente debe estar seguro de su compra. Novedades Venegoni no hace devoluciones.
            
			 </p> 
                    <!--<a href="#" class="btn btn-primary btn-lg">Check Now</a> -->              
            </div>
        </div>
    </section>
    

    <footer class="page-footer">
    
    	
        <div class="contact">
        	<div class="container">
				<h2 class="section-heading">Contacto</h2>
				<p><span class="glyphicon glyphicon-earphone"></span><br> +(56) 946.277.917 <br>   +(58) 0424.442.93.34</p>
				<p><span class="glyphicon glyphicon-envelope"></span><br> novedades.venegoni@gmail.com</p>
        	</div>
        </div>
        	
       
        <div class="small-print">
        	<div class="container">
        		<p>2019</p>
        	</div>
        </div>
        
    </footer>


@endsection