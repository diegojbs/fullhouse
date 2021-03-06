<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='Classification' content='Business'>
    <meta name='url' content='http://www.fullhouseprefabricados.com'>
    <meta name="description" content="Contruimos casas prefabricadas, economicas, de rapida construcción con los más altos estándares de calidad.
    ">
    <meta name="keywords" content="comprar casa, casas prefabricadas, casas economicas, casas para fincas, casas en cauca, casas en el valle, casas en nariño, prefabricados, full house, ofertas de casas prefabricadas, viviendas prefabricadas precios, cuanto puede costar una casa prefabricada, casas prefabricadas en hormigón, venta casas modulares, vivienda prefabricada, casas prefabricadas empresas">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Full House Prefabricados</title>

    <!-- Bootstrap -->
    <link href="https://fullhouseprefabricados.com/recursos/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://fullhouseprefabricados.com/recursos/css/bootstrap-social.css">
    <link  href="https://fullhouseprefabricados.com/recursos/fancybox/fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://fullhouseprefabricados.com/recursos/css/main.css"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ffee898d61.js"></script>
    <script src="https://fullhouseprefabricados.com/recursos/fancybox/fancybox.js"></script>
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
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modelos de casas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/')}}#mod_casas">Todas las casas</a></li>
                <li role="separator" class="divider"></li>
                @foreach($menu_categorias as $cate_menu)
                  <li><a href="{{url('/categoria-casas/'.$cate_menu->id)}}">{{$cate_menu->nombre}}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="{{url('/galerias')}}#fotos">Fotos de proyectos</a></li>
            <li><a href="{{url('/videos')}}#fotos">Videos</a></li>
            <li><a href="{{url('/productos-prefabricados')}}#contenedor-productos">Productos prefabricados</a></li>
            <li><a href="{{ asset('/ficha_tecnica') }}">Ficha ténica</a></li>
            <li><a href="{{ asset('/tipos') }}">Tipos de entrega</a></li>
            <li><a href="{{ asset('/oficinas') }}">Oficinas y contactos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <!-- fin barra de navegacion -->