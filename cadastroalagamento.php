<?php
session_start();

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
</head>

<body class="text-center" id="fundo">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.html">INFOPOA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        </nav>
    </header>
    <form class="form-signin" action="cadastra.php"method="POST">
        <!--<img class="mb-4" src="" href="" alt="" width="72" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal" id="blacktext">Insira o endereço:</h1>
        <label for="input" class="sr-only"></label>
        <input type="text" id="autocomplete" onFocus="geolocate()" name="enderecoalagamento" class="form-control" placeholder="Rua./AV. João das Neves" required >
        <div class="checkbox mb-3">
            <label>
         
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" onclick="alert('Enviado')"  type="submit">Enviar</button>
        <p class="mt-5 mb-3 text-muted"></p>
    </form>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script lang="javascript">
    </script>
    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.
  
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
  
        var placeSearch, autocomplete;
        var componentForm = {
          street_number: 'short_name',
          route: 'long_name',
          locality: 'long_name',
          administrative_area_level_1: 'short_name',
          country: 'long_name',
          postal_code: 'short_name'
        };
  
        function initAutocomplete() {
          // Create the autocomplete object, restricting the search to geographical
          // location types.
          autocomplete = new google.maps.places.Autocomplete(
              /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
              {types: ['geocode']});
  
          // When the user selects an address from the dropdown, populate the address
          // fields in the form.
          autocomplete.addListener('place_changed', fillInAddress);
        }
  
        function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();
  
          for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
          }
  
          // Get each component of the address from the place details
          // and fill the corresponding field on the form.
          for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
              var val = place.address_components[i][componentForm[addressType]];
              document.getElementById(addressType).value = val;
            }
          }
        }
  
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              autocomplete.setBounds(circle.getBounds());
            });
          }
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzQtIPWREnUKUlHfmIOO6PVwocSV0YFPA&libraries=places&callback=initAutocomplete"
          async defer></script>
</body>

</html>

