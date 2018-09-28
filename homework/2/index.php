<!DOCTYPE html>

<html>
    <head>
        <title> Album Generator </title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Metal+Mania" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crafty+Girls" rel="stylesheet">
        <style>
        </style>
    </head>
    <body>
        <h1 id="heading">
            Album Suggestions
        </h1>
        <div id="main">
            <?php
                include 'functions.php';
                generate();
            ?>
        </div>
        
    </body>
</html>