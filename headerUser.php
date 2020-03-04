<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
    <div class="fixed-top">
        <!------------------------------------------------------>
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
                    <li class="nav-item">
                        <a class="nav-link" href="?myProfile">My profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?myPets">My pets</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Requests
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Requests">
                            <a class="dropdown-item" href="?helpRequestsAll">All requests</a>
                            <a class="dropdown-item" href="?myHelpRequests">My request</a>
                            <a class="dropdown-item" href="?helpRequestAdd">Add a new request</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Info">
                            <a class="dropdown-item" href="?aboutus">About Us</a>
                            <a class="dropdown-item" href="?curious">Curious</a>
                            <a class="dropdown-item" href="?policy">Policy</a>
                            <a class="dropdown-item" href="?help">Help</a>
                            <a class="dropdown-item" href="?terms">Terms</a>
                        </div>
                    </li>
                    <?php
                    require_once "classes/dbClass.php";
                    require_once "classes/User.php";
                    $db = new dbClass();
                    $signedInUser = $db->getObjectsGeneral("users", "WHERE `userID`='".$_SESSION['user']."'", "User")[0];
                    if ($signedInUser->getUserStatus()=="admin")
                        echo "<li class='nav-item'><a class='nav-link' href='?admin'>Admin page</a></li>";
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?contactUs">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?signOut">Sign out</a>
                    </li>
                </ul>
                <span class="navbar-text">
                  <?php
                  if (isset($_SESSION['user']))
                      echo "Signed in as ".$signedInUser->getUserFName()." ".$signedInUser->getUserLName();
                  else
                      echo "Not signed in";
                  ?>
                </span>
            </div>
        </nav>
    </div>
</header>