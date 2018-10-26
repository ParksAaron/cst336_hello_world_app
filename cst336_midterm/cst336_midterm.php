<?php
    include 'database.php';
    $dbConn = getDatabaseConnection();
    $sql = "SELECT * from q_quotes WHERE 1";
    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $index = array_rand($records, 1);
    
    echo $records[$index]['quote'] . "<br>" . $records[$index]['author'];


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
     <link rel="stylesheet" href="styles.css" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
  </head>
  <body>
    <form method="post" action="create.php">
        <input type="submit" value="Create"></input>
    </form>
  </body>
</html>