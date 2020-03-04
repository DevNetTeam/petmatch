<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
header("location:main.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PetMatchmaking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
  <body>
  </body>
</html>