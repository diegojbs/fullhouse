    <!-- pie de pagina -->
    <h3 class="text-center">¿Cómo llegar?</h3>
    <hr>
    <div id="map"></div>
    <div class="container-fluid well">
        <div class="col xs-12 col-sm-4 text-right">
            <h2>Síguenos en las redes sociales</h2>
        </div>
        <div class="col xs-12 col-sm-4 text-center">
            <a href="https://twitter.com/FHPrefabricados" target="_blank"><i class="fa fa-twitter fa-4x social" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/fullhouseconstruccionliviana/" target="_blank"><i class="fa fa-facebook fa-4x social" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/fullhouseconstruccionliviana/" target="_blank"><i class="fa fa-instagram fa-4x social" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCU21ZwYXQ-jmUkty77O5suA" target="_blank"><i class="fa fa-youtube fa-4x social" aria-hidden="true"></i></a>
        </div>
        <div class="col xs-12 col-sm-4 text-center">
            <b>Oficina principal</b> <br>
            Calle 12N # 6-101 Barrio Belalcazar <br>
            Popayán - Cauca - Colombia
        </div>
    </div>
    <!-- fin pie de pagina -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://fullhouseprefabricados.com/recursos/js/bootstrap.min.js"></script>

    <script>
    // Initialize and add the map
    function initMap() {
        // The location of fullHousePrefabricados
        var fullHousePrefabricados = {lat: 2.451456, lng: -76.600789};
        // The map, centered at fullHousePrefabricados
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 16, center: fullHousePrefabricados});
        // The marker, positioned at fullHousePrefabricados
        var marker = new google.maps.Marker({position: fullHousePrefabricados, map: map, title: 'Full House Prefabricados'});
    }
        </script>
        <!--Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{env("MAP_KEY")}}&callback=initMap">
        </script>
    
</body>
</html>
