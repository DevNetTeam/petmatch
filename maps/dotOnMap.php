<!DOCTYPE html>
<html>
<head>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 50%;  /* The width is the width of the web page */
        }
    </style>
</head>
<body>
<h3>Google Maps Test</h3>
<!--The div element for the map -->
<div id="map"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location 
        var home = {lat: 42.6497175, lng: 23.4034165};
        // The map centered 
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 13, center: home});
        // The marker positioned
        var marker = new google.maps.Marker({position: home, map: map});
    }
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZppJHPHXdY3_nK8EWiXtBdrjO8poDxcs-U&callback=initMap">
</script>
</body>
</html>