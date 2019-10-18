<!DOCTYPE html5>
<html>
<head>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('diseno/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('diseno/css/custom.css')}}" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      @yield('styles')
    
	<title>@yield('titulo')</title>
</head>
<body>

<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
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
                        <a href="{{route('categorias')}}">Categorias</a>
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
                        <a href="{{route('contacto')}}">Contacto</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    @yield('contenido')


    @include('main.footer')