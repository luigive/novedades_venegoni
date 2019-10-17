 <!-- cuiando uno imprime mensajes estos llegan por una variable de session -->
 @if (session("mensaje"))
	<div class="alert alert-success alert-dismissible">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <h5>
		  	<i class="icon fas fa-check"></i> Guardado!
		  </h5>
		  <ul>
	          <li> {{session("mensaje")}} </li>
		  </ul>
	  		<!-- aqui va el texto-->
	</div>
@endif


