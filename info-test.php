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
<!-------------------------------------------------------------------------->
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>PetMatchmaking</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!--sevices-->
<div class="services" id="services">
    <div class="container">
        <h3 class="tittle two">What are we doing</h3>
        <div class="col-md-4 ab-head1">
            <div class="item item-type-move">
                <div class="item-hover">
                    <div class="item-info">
                        <div class="headline">Looking for a mate
                            <div class="line"></div>
                        </div>
                        <div class="date-month">Service 1</div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="item-img">
                    <img src="images/s1.jpg" alt=" " class="img-responsive"/>
                </div>
            </div>
            <div class="clearfix"> </div>
            <p class="para-w3-agileits two"></p>
        </div>                 
        <div class="col-md-4 ab-head1">
            <div class="item item-type-move">
                <div class="item-hover">
                    <div class="item-info">
                        <div class="headline">
                            Buy a pet
                            <div class="line"></div>
                        </div>
                        <div class="date-month">your free ads here</div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="item-img"> 
                    <img src="images/s2.jpg" alt=" " class="img-responsive"/>
                </div>
            </div>
            <div class="clearfix"> </div>
            <p class="para-w3-agileits two">&nbsp;</p> 
        </div>
        <div class="col-md-4 ab-head1">
            <div class="item item-type-move">
                <div class="item-hover">
                    <div class="item-info">
                        <div class="headline">Adopt a pet
                            <div class="line"></div>
                        </div>
                        <div class="date-month">your free ads here</div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="item-img"> 
                    <img src="images/s3.jpg" alt=" " class="img-responsive"/>
                </div>
            </div>
            <div class="clearfix"> </div>
            <p class="para-w3-agileits two">&nbsp;</p>
        </div>
    </div>
</div>
<!--//sevices-->
<!--adopt -->
<div class="adopt" id="adopt">
    <div class="container">
        <h3 class="tittle">Adoption</h3>
        <div class="adopt-top">
            <div class="col-md-4  adopt-img-agileits-w3layouts">
</div>
            <div class="col-md-8 adopt-text-agileits-w3layouts">
                <h6 class="subheading-w3ls">Looking to adopt a pet</h6>
                <p>The dynamic world we live in surprises us with each passing day. A nice example is the PetMatchmaking app, which connects pet owners.</p>
                <p>The main purpose for the user is to easily and quickly select by different criteria other dogs to meet your pet.</p>
                <p>PetMatchmaking builds a community of people who share a passion for quadrupeds and helps them create more and more fun shared moments. The intuitive design enables the user to become well acquainted with the other person and his or her pet, and the application logic is to contact only people who have shown mutual interest.</p>
                <p>In addition to connecting pet owners, PetMatchmaking&apos;s mission is to assist them in raising their pet with helpful tips, recommendations for establishments and other dog-friendly places, as well as active work on various social causes.</p>
                <p class="para-w3-agileits"><br></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="adopt-bottom">
            <div class="col-md-6 faq-left">
                <h6 class="subheading-w3ls">Frequent Questions</h6>
                <ul class="faq"> 
                    <li class="item1 wow fadeInDown animated" data-wow-delay=".5s">
                        <a href="#"><span class="glyphicon glyphicon-chevron-down"></span> How do I Apply</a>
                        <ul>
                            <li class="subitem1">
                                <p>blah blah blah blah blah</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item2 wow fadeInDown animated" data-wow-delay=".5s">
                        <a href="#"><span class="glyphicon glyphicon-chevron-down"></span> What documents do I need to Adopt?</a>
                        <ul>
                            <li class="subitem1">
                                <p>blah blah blah blah blah</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item3 wow fadeInDown animated" data-wow-delay=".5s">
                        <a href="#"><span class="glyphicon glyphicon-chevron-down"></span> How to choose an Pet?</a>
                        <ul> 
                            <li class="subitem1">
                                <p>blah blah blah blah blah</p>
                            </li>
                        </ul>
                    </li>
                    <li class="item4 wow fadeInDown animated" data-wow-delay=".5s">
                        <a href="#"><span class="glyphicon glyphicon-chevron-down"></span> Are the animals neutered?</a>
                        <ul> 
                            <li class="subitem1">
                                <p>blah blah blah blah blah</p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="faq-bottom">
</div>
            </div>
            <div class="col-md-6 about-img-w3-agileits">
                <!--responsive-tabs-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>
                            <img src="images/a1.jpg" alt="image"/>
                        </li>
                        <li>
                            <img src="images/a2.jpg" alt="image"/>
                        </li>
                        <li>
                            <img src="images/a3.jpg" alt="image"/>
                        </li>
                        <li>
                            <img src="images/a4.jpg" alt="image"/>
                        </li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab1">
                            <img src="images/a11.jpg" alt="image"/>
                            <div class="pet-info">
                                <ul>
                                    <li>
                                        <span>Antu</span>
                                    </li>
                                    <li>
                                        <span>Gender : </span>Male
                                    </li>
                                    <li>
                                        <span>Age : </span>10 years
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="tab2">
                            <img src="images/a22.jpg" alt="image"/> 
                            <div class="pet-info">
                                <ul>
                                    <li>
                                        <span>Antu</span>
                                    </li>
                                    <li>
                                        <span>Gender : </span>Male
                                    </li>
                                    <li>
                                        <span>Age : </span>3 Months
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab3"> 
                            <img src="images/a33.jpg" alt="image"/> 
                            <div class="pet-info"> 
                                <ul>
                                    <li>
                                        <span>Antu</span>
                                    </li>
                                    <li>
                                        <span>Gender : </span>Male
                                    </li>
                                    <li>
                                        <span>Age : </span>2 years
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab4">
                            <img src="images/a44.jpg" alt="image"/>
                            <div class="pet-info">
                                <ul>
                                    <li>
                                        <span>Antu</span>
                                    </li>
                                    <li>
                                        <span>Gender : </span>Female
                                    </li>
                                    <li>
                                        <span>Age : </span>6 Months
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //adopt -->