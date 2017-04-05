@include('layouts.menu')

    <div class="container-fluid main_header">
    	<div class="container well">
	    	<div class="row">
	    		<div class="col-xs-12 col-sm-6">
	    			<img src="http://fullhouseprefabricados.com/recursos/img/logo.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12 col-sm-6">
	    			
	    			<h1>Gracias <strong>{{ $datos->nombre}}.</strong></h1>
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

@include('layouts.pie')