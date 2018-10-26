<?php
  include 'database.php';
  $dbConn = getDatabaseConnection();
  $sql = "SELECT * from mp_town WHERE population BETWEEN 50000 AND 80000";
  $statement = $dbConn->prepare($sql); 
  $statement->execute(); 
  $records = $statement->fetchAll(); 
  foreach($records as $record){
      echo $record['town_name'] . " - " . $record['population'] ;
      echo "<br>";
  }
  echo "<br><br>";
  $sql = "SELECT * from mp_town WHERE 1 ORDER BY population DESC";
  $statement = $dbConn->prepare($sql); 
  $statement->execute(); 
  $records = $statement->fetchAll(); 
  foreach($records as $record){
      echo $record['town_name'] . "     " . $record['population'];
      echo "<br>";
  }
  echo "<br><br>";
  $sql = "SELECT * from mp_town WHERE 1 ORDER BY population ASC";
  $statement = $dbConn->prepare($sql); 
  $statement->execute(); 
  $records = $statement->fetchAll(); 
  for($i=0; $i < 3; $i++){
      echo $records[$i]['town_name'] . "     " . $records[$i]['population'];
      echo "<br>";
  }
  echo "<br><br>";
  $sql = "SELECT * from mp_county WHERE county_name LIKE 'S%'";
  $statement = $dbConn->prepare($sql); 
  $statement->execute(); 
  $records = $statement->fetchAll(); 
  foreach($records as $record){
      echo $record['county_name'];
      echo "<br>";
  }
  echo "<br><br>";
  
  /*
  CREATE TABLE mp_state (
state_id int(5) NOT NULL,
state_name varchar(50),
PRIMARY KEY (state_id)
);
CREATE TABLE mp_town (
town_id int(5) NOT NULL,
town_name varchar(50),
county_id int(5) NOT NULL,
population int(7),
PRIMARY KEY (town_id)
);
INSERT INTO mp_state VALUES
(100, 'California'),
(200, 'Texas');
INSERT INTO mp_town VALUES
(1, 'Biola', 101, 1004614),
(2, 'Easton', 101, 186239),
(3, 'Chualar', 102, 86998),
(4, 'Soledad', 102, 66163),
(5, 'Pajaro', 102, 46736),
(6, 'Hanford', 103, 32505),
(7, 'Kern City', 104, 31020),
(8, 'Burlington', 201, 30951),
(9, 'Knox', 201, 27175),
(10, 'Clay', 202, 22051),
(11, 'Norwood', 203, 21987),
(12, 'Pecos', 203, 20735);
CREATE TABLE mp_county (
county_id int(5) NOT NULL,
state_id int(5) NOT NULL,
county_name varchar(50),
PRIMARY KEY (county_id)
);
INSERT INTO mp_county VALUES
(101, 100, 'Fresno'),
(102, 100, 'Monterey'),
(103, 100, 'Kings'),
(104, 100, 'Kern'),
(105, 100, 'Santa Cruz'),
(106, 100, 'San Benito'),
(201, 200, 'Knox'),
(202, 200, 'Clay'),
(203, 200, 'Pecos');
  */
  
?>