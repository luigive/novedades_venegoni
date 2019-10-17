 @if ($errors->any())
	<div class="alert alert-warning alert-dismissible">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <h5>
		  	<i class="icon fas fa-exclamation-triangle"></i> Error!
		  </h5>
		  <ul>
		  	@foreach($errors->all() as $error )
	          <li> {{ $error }} </li>
	        @endforeach
		  </ul>
	  		<!-- aqui va el texto-->
	</div>
@endif