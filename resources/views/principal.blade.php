<!DOCTYPE html5>
<html>
<head>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{asset('diseno/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('diseno/css/custom.css')}}" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
	<title></title>
</head>
<body>

<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img class="img-responsive img-circle center-block" src="{{asset('diseno/images/logo.jpg')}}" alt="">
                	<span class="glyphicon glyphicon-fire">Novedades Venegoni</span>
                	
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Inicio</a>
                    </li>
                     <li class="active">
                        <a href="#">Ropa</a>
                    </li>
                    <li class="active">
                        <a href="#">Zapatos</a>
                    </li>
                     <li class="active">
                        <a href="#">Carteras</a>
                    </li>
                     <li class="active">
                        <a href="#">Higiene Personal</a>
                    </li>
                     <li class="active">
                        <a href="#">Iluminacion</a>
                    </li>

					<!-- <li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a> -->
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Engage</a></li>
							<li><a href="#">Pontificate</a></li>
							<li><a href="#">Synergize</a></li>
						</ul>
					</li>
                    <li class="active">
                        <a href="#">Contacto</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

	
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <!--<h1>NOVEDADES VENEGONI</h1>
                <p>Estilos unicos para todos los gustos</p>-->
                <!--<a href="#" class="btn btn-primary btn-lg">Boton</a>-->
            </div>
        </div>
    </header>

	<!-- Intro Section -->
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





        <!--<div class="row promo">
        	<a href="#">
				<div class="col-md-4 promo-item item-1">
					<h3>
						Unleash
					</h3>
				</div>
            </a>
            <a href="#">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Synergize
					</h3>
				</div>
            </a>
			
			<a href="#">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Procrastinate
					</h3>
				</div>
            </a>
        </div> -->
   <!-- </div><!-- /.container-fluid -->

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



  



<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contacto</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>


                          <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="lname" name="name" type="text" placeholder="Pais" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

  



    <script src="js/jquery-1.11.3.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    
    <script src="js/custom.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- NOTA DEL CHINO BELLOOO, RECORDA QUE EN EL TUTORIAL 15 ESTA PARA TRADUCIR LAS VALIDACIONE DE LARAVEL EN ESPAÑOL DEBO BAJAR UN ARCHIVO DE GIF Y PONERLO EN LAN Y LUEGO MODIFICAR EL APP.PHP  y SE L AROIEDAD SE LLAMA LOCALE  -->
</body>
</html>