<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>JS Bin</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js" integrity="sha256-O17BxFKtTt1tzzlkcYwgONw4K59H+r1iI8mSQXvSf5k=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <!-- AJAX -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY-U&libraries=places&callback=initAutocomplete" async defer></script>  <!-- google maps -->
</head>
<body>
<script>
    //---------------------------------------------------google form:
    var placeSearch, autocomplete, geocoder;
    function initAutocomplete() {
        geocoder = new google.maps.Geocoder();
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete'))/*,
      {types: ['(cities)']}*/);
        autocomplete.addListener('place_changed', fillInAddress);
    }
    function codeAddress(address) {
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                alert(results[0].geometry.location);
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
    function fillInAddress() {
        var place = autocomplete.getPlace();
        //alert(place.place_id);
        //alert(place.geometry.location);
        sendLocation(place.geometry.location);
    }
    //sending lat and lng to field inside form:
    function sendLocation(loc){
        //alert('(sendLocation function) loc var = ' + loc);
        $("#div1").text(loc);                       //updating di1 outside of form
        //$("#helpForm input[name=gps]").val(loc);    //updating form field named "gps"
        $("#newHelpForm input[name=gps]").val(loc);    //updating form field named "gps"
    }
    //----------------------------------------------------------------
</script>
<div id="div1">gps out of form</div><br><br>
<h3>Add Request:</h3>
<!--
<form action="" method=post id="helpForm">
    <input type="text" class="form-control" placeholder="gps field in form" name="gps"><br>
    <button type="submit" class="btn btn-primary" name="sent">Register New Pet</button>
</form>
-->
<div class="form-row" id="locationField">
    <input id="autocomplete" placeholder="Address" type="text" />
</div>
<form action="" method=post id="newHelpForm">
    <div class="form-group">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="GPS appears here" name="gps">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <input type="date" class="form-control" placeholder="Start date" name="startdate">
                <input type="time" class="form-control" placeholder="Start time" name="starttime">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <input type="date" class="form-control" placeholder="End date" name="enddate">
                <input type="time" class="form-control" placeholder="End time" name="endtime">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Food Habbits" name="pfood">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Temper and general behaviour" name="ptemper">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="About and General information" name="pabout">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="sent">Register New Pet</button>
</form>
</body>
</html>