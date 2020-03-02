<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "classes/dbClass.php";
require_once "classes/Pet.php";
require_once "classes/dbClassPetsFunctions.php";
$db = new dbClass();
//----------------------------------------------form handling (actual deletion):
reset($_POST);
$first_key = key($_POST);
//echo $first_key."<br>";
if (substr($first_key, 0, 7) === "deleteP")       //if verify deletion pressed
{
    $dbp = new dbClassPetsFunctions();
    $petID = substr($first_key, 7);
    echo "pet to delete: ".$first_key;
    echo "deletion verified.<br>";
    //delete pet's image if exists:
    $dbp->deletePetImageByID($petID);
    //delete pet from db:
    $db->deleteObjectsGeneral("pets", "WHERE `petID`='".$petID."'");
    unset($_SESSION['delete_request_id_arr']);
    unset($_SESSION['delete_pet_from_request_id_arr']);
    unset($_SESSION['petToDelete']);
    $_SESSION['userMessage']="Pet deleted successfully.";
    $_SESSION['nextPage']="myPets.php";
    header("Location: main.php");
    die();
}
echo "<br><form action='petDelete.php' method=post><button type='submit' class='btn btn-primary' name='"."deleteP".$tempPet->getPetID()."'>Verify Deletion</button></form><br>";