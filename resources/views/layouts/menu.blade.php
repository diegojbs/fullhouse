<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://fullhouseprefabricados.com/recursos/css/main.css"> -->
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
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
            
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">FULLHOUSE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}#mod_casas">Ver casas</a></li>
            <li><a href="{{url('/galerias')}}#fotos">Fotos</a></li>
            <li><a href="{{ asset('/ficha_tecnica') }}">Ficha ténica</a></li>
            <li><a href="{{ asset('/tipos') }}">Tipos de entrega</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- fin barra de navegacion -->

