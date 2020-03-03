<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//-------------------------------------------------TOP OF PAGE
include_once "headerTop.php";
//  ---------------------------------------------SIGNED IN USER
if (isset($_SESSION) && isset($_SESSION['user']))
{
    //-------------------------------header loading:
    include_once "headerUser.php";
    //------------------------------message loading:
    if (isset($_SESSION['userMessage'])){
        if (isset($_SESSION['userMessageStatus']) && $_SESSION['userMessageStatus']==0)
            echo "<div class='userMessageRed'>".$_SESSION['userMessage']."</div>";
        else
            echo "<div class='userMessage'>".$_SESSION['userMessage']."</div>";
        unset($_SESSION['userMessage']);
        unset($_SESSION['userMessageStatus']);
    }
    //------------------------------page loading:
    if (isset($_GET['myProfile'])){
        $_SESSION['UserProfileToShow']=$_SESSION['user'];
        include_once "ProfileUser.php";
    }
    else if (isset($_GET['myPets'])){
        include_once "myPets.php";
    }
    else if (isset($_GET['helpRequestsAll'])){
        include_once "HelpRequestsAll.php";
    }
    else if (isset($_GET['myHelpRequests'])){
        include_once "myHelpRequests.php";
    }
    else if (isset($_GET['helpRequestAdd'])){
        include_once "helpRequestAdd.php";
    }
    else if (isset($_GET['admin'])){
        include_once "admin.php";
    }
    else if (isset($_GET['contactUs'])){
        include_once "contactus.php";
    }
    else if (isset($_GET['signOut'])){
        include_once "signout.php";
    }
    else if (isset($_SESSION['nextPage']) && $_SESSION['nextPage']!=""){
        include_once $_SESSION['nextPage'];
    }
}
else
{
    //  ----------------------------------------------NOT SIGNED IN
    //------------------------------header loading:
    include_once "headerGuest.php";
    //------------------------------message loading:
    if (isset($_SESSION['userMessage'])){
        if (isset($_SESSION['userMessageStatus']) && $_SESSION['userMessageStatus']==0)
            echo "<div class='userMessageRed'>".$_SESSION['userMessage']."</div>";
        else
            echo "<div class='userMessage'>".$_SESSION['userMessage']."</div>";
        unset($_SESSION['userMessage']);
        unset($_SESSION['userMessageStatus']);
    }
    //------------------------------page loading:
    if (isset($_GET['signUp'])){
        include_once "signup.php";
    }
    else if (isset($_GET['contactUs'])){
        include_once "contactus.php";
    }
    else {
        include_once "signin.php";
    }
}
$_SESSION['nextPage']="";
include_once "footer.php";
?>
<!----------------------------------------------------------------------TEST>
-->
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>PetMatchmaking</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- about = Terms of use -->         
<div class="about" id="about"> 
    <div class="container"> 
        <div class="col-md-6 agileits_works-grid1"> 
</div>                 
<!-- Terms of use -->
<div class="terms main-grid-border">
    <div class="container">
        <h2 class="w3-head">Terms of Use</h2>
            <div class="panel-group" id="accordion">
            <!-- First Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                             <span>1.</span> Acceptance
                         </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                
                <!-- Second Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse"  data-target="#collapseTwo">
                            <span>2.</span> Description of service and content policy
                         </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">								
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                
                <!-- Third Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                            <span>3.</span> featured ads
                         </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Fourth Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour">
                            <span>4.</span> conduct
                         </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Fifth Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
                            <span>5.</span> paid postings
                         </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Sixth Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix">
                            <span>6.</span> posting agents
                         </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Seventh Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSeven">
                            <span>7.</span> no spam policy
                         </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Eight Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseEight">
                            <span>8.</span> limitations of liability
                         </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Ninth Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseNine">
                            <span>9.</span> violation of terms and liquidation damages
                         </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Tenth Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTen">
                            <span>10.</span> ability to accept terms of service 
                         </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum
                            drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Eleventh Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseEleven">
                            <span>11.</span> Lorem Ipsum
                         </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Twelve Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwelve">
                            <span>12.</span> general information
                         </h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Thirteen Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThirteen">
                            <span>13.</span> assignment
                         </h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
                <!-- Fourteen Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFourteen">
                            <span>14.</span> user submissions
                         </h4>
                    </div>
                    <div id="collapseFourteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>drun brum drun brum</p>
                            <p>drun brum drun brum</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>	
</div>
<!-- // Terms of use -->