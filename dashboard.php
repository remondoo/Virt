<?php
session_start();


if (isset($_SESSION["login"]) && $_SESSION["login"] == true){

include('head.php');
include('nav-bar.php');    
    
    
$gebruiker = $_SESSION['naam'];
echo "Welkom $gebruiker in het Dashboard.";

    
    
}else{
    
    
    echo '<h1>You are not an authorised user</h1>';
    echo '<h2>Please sign in on the <a href="index.php">Homepage</a></h2>';
    
}

?>