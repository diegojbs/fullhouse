<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Full House Prefabricados</title>

    <!-- Bootstrap -->
    <link href="http://fullhouseprefabricados.com/recursos/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="http://fullhouseprefabricados.com/recursos/css/bootstrap-social.css">
    <link  href="http://fullhouseprefabricados.com/recursos/fancybox/fancybox.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	        <li><a data-fancybox="gallery" href="{{ asset('pdf/TIPOS-DE-ENETREGA.pdf') }}" target="_blank">Tipos de entrega</a></li>
	        <li><a href="{{url('/')}}#mod_casas">Ver casas</a></li>
	        <li><a href="{{url('/galerias')}}#fotos">Fotos</a></li>
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

    <div class="container-fluid main_header">
    	<div class="container well">
	    	<div class="row">
	    		<div class="col-xs-12 col-sm-6">
	    			<img src="http://fullhouseprefabricados.com/recursos/img/logo.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12 col-sm-6">
	    			
	    			<h1>Gracias <strong>{{$datos->nombre}}.</strong></h1>
	    			<div>
	    				<h2>Hemos recibido sus datos, le contactaremos a su correo electrónico o a su teléfono registrado.</h2>

	    				<p>
	    					<span class="h4">Le invitamos a seguirnos en las redes sociales. También le atendemos vía whatsapp.</span>
	    				</p>

	    				<p>
	    					<span class="h4"><a href="{{url('/inicio')}}">Regresar a la pagina principal</a></span>
	    				</p>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row row-social">
	    		<div class="col-xs-12 col-sm-6 text-left content-tele">
	    			<i class="fa fa-phone fa-2x social" aria-hidden="true"></i> 
	    			<i class="fa fa-whatsapp fa-2x social" aria-hidden="true"></i>
	    			<span class="h3 text-center">3173314579 - (2) 8350808 - 3183516803</span> 
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://fullhouseprefabricados.com/recursos/js/bootstrap.min.js"></script>
  </body>
</html>