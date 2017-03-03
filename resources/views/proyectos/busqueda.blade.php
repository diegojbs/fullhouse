<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{$proyecto->titulo}}</title>

    <!-- Bootstrap -->
    <link href="http://fullhouseprefabricados.com/recursos/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="http://fullhouseprefabricados.com/recursos/css/bootstrap-social.css">
    <link  href="http://fullhouseprefabricados.com/recursos/fancybox/fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ffee898d61.js"></script>
    <script src="http://fullhouseprefabricados.com/recursos/fancybox/fancybox.js"></script>
  </head>
  <body>
    
    <!-- barra de navegacion -->
	<nav class="navbar">
	  <div class="container-fluid naranja">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">FullHouse</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul> -->
	      <!-- <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a data-fancybox="gallery" href="{{ asset('pdf/ficha_tecnica_full_house.pdf') }}" target="_blank">Ficha ténica</a></li>
	        <li><a href="#mod_casas">Ver casas</a></li>
	        <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
    <!-- fin barra de navegacion -->

    <div class="container-fluid main_header img-back">
    	<div class="container">
	    	<div class="row  img-back">
	    		<div class="col-xs-12 col-sm-6">
	    			<img src="http://fullhouseprefabricados.com/recursos/img/logo.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12 col-sm-6">
	    			<h1>Casas prefabricadas</h1>
	    			<div>
	    				{!! Form::open(['url' => '/gracias', 'method' => 'POST']) !!}
	    					<div class="form-group">
							    
							    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="true">
							  </div>
							  <div class="form-group">
							    
							    <input type="email" class="form-control" name="email" placeholder="Email" required="true">
							  </div>
							  <div class="form-group">
							    <input class="form-control" type="text" name="telefonos" placeholder="Telefonos" required="true">
							    <!-- <input type="text" class="form-control" name="telefonos" placeholder="Teléfonos" required="true"> -->
							  </div>
							  <div class="form-group">
							    <input class="form-control" type="text" name="ciudad" placeholder="Ciudad" required="true">
							    
							  </div>
							  <div class="form-group">
							    <textarea class="form-control" rows="3" name="mensaje" placeholder="Escriba su solicitud aquí" required="true"></textarea>
							  </div>
							  <div class="checkbox">
							    <label>
							      <input type="checkbox" checked="true" required="true" name="t_datos"> Acepta nuestra política de tratamiento de datos
							    </label>
							  </div>
							  <input type="submit" name="" class="btn btn-default naranja" value="Enviar">
						{!! Form::close()  !!}
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row row-social">
	    		<div class="col-xs-12 col-sm-6 text-left content-tele">
	    			<i class="fa fa-phone fa-2x social" aria-hidden="true"></i> 
	    			<i class="fa fa-whatsapp fa-2x social" aria-hidden="true"></i>
	    			<span class="h3 text-center">3173314579 - (2) 3850808 - 3183516803</span> 
	    		</div>
	    		<div class="col-xs-12 col-sm-6 text-right">
	    			<span class="h3 text-center">Redes sociales </span> 
	    			<a href="https://twitter.com/FHPrefabricados" target="_blank"><i class="fa fa-twitter fa-2x social" aria-hidden="true"></i></a>
					<a href="https://www.facebook.com/fullhouseprefabricados/" target="_blank"><i class="fa fa-facebook fa-2x social" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/fullhouseprefabricados/" target="_blank"><i class="fa fa-instagram fa-2x social" aria-hidden="true"></i></a>
	    			
	    		</div>
	    	</div>
	    </div>
    </div>

    <div class="encabezado" id="mod_casas"><h2>MODELOS DE CASAS</h2></div>

	<!-- lista de modelos -->
	<div class="container proyectos">
		
		
		<div class="row">
			
			<div class="col-xs-12 col-sm-6">
				<div class="ficha_tecnica">
					<h3>{{$proyecto->titulo}}</h3>
						<p>
							{{$proyecto->contenido}}
						</p>
						<h4>Detalles de este proyecto.</h4>
						<p>
							@foreach($detalles as $detalle)
								@if($detalle->proyecto_id == $proyecto->id)
									<i class="fa fa-check fa-2x ico-ok" aria-hidden="true"></i>{{$detalle->descripcion}}<br>
								@endif
							@endforeach
						</p>
						<p>
							<span class="h3">Compartir:</span>
							<a href="whatsapp://send?text={{url('/search')}}/{{$proyecto->id}}" data-action="share/whatsapp/share">
								<i class="fa fa-whatsapp fa-2x ico-whatsapp" aria-hidden="true"></i>
							</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u={{url('/search')}}/{{$proyecto->id}}&img[0]={{$proyecto->enlace_archivo}}" target="_blank">
						       <i class="fa fa-facebook-official fa-2x ico-facebook"></i>
						    </a>
						</p>
						<p>
							<span class="h4"><a href="{{url('/')}}">Ver más modelos</a></span>
						</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<a data-fancybox="gallery" href="{{$proyecto->enlace_archivo}}"><img src="{{$proyecto->enlace_archivo}}" class="img img-responsive imagen-custom"></a>
				<!-- <img src="{{$proyecto->imagen}}" class="img-responsive imagen-custom"> -->
			</div>
		</div>
		<hr>
		
		
		
		

	<!-- fin lista de modelos -->

	<!-- pie de pagina -->
	<div class="container-fluid well">
		<div class="col xs-12 col-sm-4 text-right">
			<h2>Síguenos en las redes sociales</h2>
		</div>
		<div class="col xs-12 col-sm-4 text-center">
			<a href="https://twitter.com/FHPrefabricados" target="_blank"><i class="fa fa-twitter fa-4x social" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/fullhouseprefabricados/" target="_blank"><i class="fa fa-facebook fa-4x social" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/fullhouseprefabricados/" target="_blank"><i class="fa fa-instagram fa-4x social" aria-hidden="true"></i></a>
		</div>
		<div class="col xs-12 col-sm-4 text-center">
			<b>Visita nuestras oficinas</b> <br>
			Calle 12N # 6-101 Frente al niño Jesús de Praga <br>
			Popayán
		</div>
	</div>
	<!-- fin pie de pagina -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://fullhouseprefabricados.com/recursos/js/bootstrap.min.js"></script>
  </body>
</html>