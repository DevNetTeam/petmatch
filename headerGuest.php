<?php
?>
<header>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-brand" href="#">PetMatchMaking</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="main.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Help Requests">
                            <a class="dropdown-item" href="?aboutus">About Us</a>
                            <a class="dropdown-item" href="?curious">Curious</a>
                            <a class="dropdown-item" href="?policy">Policy</a>
                            <a class="dropdown-item" href="?help">Help</a>
                            <a class="dropdown-item" href="?terms">Terms</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?contactUs">Contact us</a>
                    </li>
                </ul>
                <span class="navbar-text">
                  <?php
                  if (isset($_SESSION['user']))
                      echo "signed in as ".$_SESSION['user'];
                  else
                      echo "Not signed in";
                  ?>
                </span>
            </div>
        </nav>
    </div>
</header>