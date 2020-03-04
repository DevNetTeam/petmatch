<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PetMatchmaking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
  <body>
  <div class="container mt-3">
  <h2>Filter Anything</h2>
  <p>Type something in the input field to search for a specific text inside the div element with id="myDIV":</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <div id="myDIV" class="mt-3">
    <p>I am a paragraph.</p>
    <p>Drun drun drun drun</p>
    <div>I am a div element inside div.</div>
    <br>
    <p>Another paragraph.</p>
    <p>Blah blah blah blah</p>
  </div>
 </div>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
 </script>
  </body>
</html>