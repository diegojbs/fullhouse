
@include('layouts.menu')

    <div class="container-fluid main_header img-back">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img src="https://fullhouseprefabricados.com/recursos/img/logo.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h3>Casas en construcción liviana</h3>
                    <i>Cotizaciones e inquietudes</i>
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
                <div class="col-xs-12 col-sm-6 text-left content-tele text-center">
                    {{-- <i class="fa fa-phone fa-2x social" aria-hidden="true"></i> 
                    <i class="fa fa-whatsapp fa-2x social" aria-hidden="true"></i> --}}
                    <span class="h3 text-center warning">{{env('TEL_LINE1')}}</span> 
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <span class="h3 text-center">Redes sociales </span> 
                    <a href="https://twitter.com/FHPrefabricados" target="_blank"><i class="fa fa-twitter fa-2x social" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/fullhouseconstruccionliviana/" target="_blank"><i class="fa fa-facebook fa-2x social" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/fullhouseconstruccionliviana/" target="_blank"><i class="fa fa-instagram fa-2x social" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCU21ZwYXQ-jmUkty77O5suA" target="_blank"><i class="fa fa-youtube fa-2x social" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>


    @yield('content')
    
@include('layouts.pie')