<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>Help</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
  <body>
    <div class="container p-3 my-3 bg-primary text-white">
    <h1>Help</h1>
        <p>This container has a blue background color and a white text, and some extra padding and margins.</p>
    </div>
  </body>
</html>