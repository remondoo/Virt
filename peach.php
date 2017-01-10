<?php
session_start();


if (isset($_SESSION["login"]) && $_SESSION["login"] == true){

    // Klant maakt Vm aan met opgegeven opslag,image,geheugen,opties via cURL
    // http://php.net/manual/en/book.curl.php
    // http://php.net/manual/en/curl.examples.php
    
        // klant & vm gegevens worden opslaan in db


    // Klant verwijderd Vm
        // klant & vm gegevens worden bijgewerkt in de db
}else{


    echo '<h1>You are not an authorised user</h1>';
    echo '<h2>Please sign in on the <a href="index.php">Homepage</a></h2>';

}

?>
