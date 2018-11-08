<?php
// connect to our mysql database server
function getDatabaseConnection() {
    if (strpos($_SERVER['SERVER_NAME'], "c9users") !== false) {
        // running on cloud9
        $host = "localhost";
        $username = "aaron";
        $password = "cst336"; // best practice: define this in a separte file
        $dbname = "memes_v2"; 
    } else {
        // running on Heroku
        $host = "us-cdbr-iron-east-01.cleardb.ne";
        $username = "b1d03bff8b1206";
        $password = "3d62f01c"; 
        $dbname = "heroku_bef497be6d6a068"; 
    }
    
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConn; 
}
// temporary test code
//$dbConn = getDatabaseConnection(); 
?>