<?php
    session_start();
    include 'database.php';
    
    if(isset($_POST['submit'])){
        if($_POST['text'] == "" || !isset($_POST['text'])){
            echo  '<h3 class="error">' . '* Text must not be empty' . '</h3>'; 
            echo "<br>";
        }
        if($_POST['author'] == "" || !isset($_POST['author'])){
            echo  '<h3 class="error">' . '* Author must not be empty' . '</h3>'; 
            echo "<br>";
        }
        if($_POST['text'] != "" && isset($_POST['text']) && $_POST['author'] != "" && isset($_POST['author'])){
            $quote = $_POST['text'];
            $author = $_POST['author'];
            
            $dbConn = getDatabaseConnection(); 

            $sql = "INSERT INTO `q_quotes` (`quoteId`, `quote`, `author`, `num_likes`) VALUES (NULL, '$quote', '$author', 0);";
            $statement = $dbConn->prepare($sql); 
            $statement->execute(); 
        }
        
    }
    
    

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
  </head>
  <body>
    <h1>Create a new quote:</h1>
    <form method="post">
        Text: <input type="text" name="text"></input> <br/>
        Author: <input type="text" name="author"></input> <br/>
        <input type="submit" name="submit"></input>
    </form>
  </body>
</html>