<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Policy declaration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
  <body>
   <div class="container mt-3">
    <h2>Policy declarion</h2>
    <p>Place the media object to the top, middle or at the bottom with the flex utilities, align-self-* classes:</p><br>
    <!-- Media top -->
    <div class="media">
    <img src="Images/BigHead.jpg" class="align-self-center mr-3" style="width:60px">
        <div class="media-body">
        <h4>Brah</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!-- Media middle -->
    <div class="media mt-3">
    <img src="Images/BigHead.jpg" class="align-self-center mr-3" style="width:60px">
        <div class="media-body">
        <h4>Smiah</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <!-- Media bottom -->
    <div class="media mt-3">
    <img src="Images/BigHead.jpg" class="align-self-center mr-3" style="width:60px">
        <div class="media-body">
        <h4>Mah</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
   </div>
  </body>
</html>