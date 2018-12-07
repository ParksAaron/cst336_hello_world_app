<?php
  include 'api/getPetInfo.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	      <script>
	        $(function(){
          $("#header").load("inc/header.php"); 
          });
	      </script>
        
        <style>
            body {
                text-align: center;
            }
        </style>
   
    </head>
    <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="pets.php">Adoptions</a>
        <a class="nav-item nav-link" href="#">About Us</a>
      </div>
    </div>
  </nav>
  <div id="header"></div>
        
	<!--Add main menu here -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 400px; height: 400px; margin: 0 auto">
    <div class="carousel-inner">
      
      <?php
        $records = getallpets();
        for($i = 0; $i < count($records); $i++){
          if($i==0){
            echo '<div class="carousel-item active">';
          }
          else{
            echo '<div class="carousel-item">';
          }
          echo '<img class="d-block w-100" src="img/' . $records[$i]["pictureURL"] .  '"alt="' . $records[$i]["name"] . '">';
          echo '</div>';
        }
        echo '</div>';
      ?>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
          
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <br>
  
  <a href="pets.php" class="btn btn-info" role="button">Adopt Now!</a>