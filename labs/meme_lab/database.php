<?php
// connect to our mysql database server

function getDatabaseConnection() {
    
    if ($_SERVER['SERVER_NAME'] == "aaron-cst336-parksaaron.c9users.io"){
        $host = "localhost";
        $username = "aaron";
        $password = "cst336";
        $dbname = "meme_lab"; 
    }
    
    else{
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "b1d03bff8b1206";
        $password = "3d62f01c";
        $dbname = "heroku_bef497be6d6a068"; 
    }
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}




?>

