<?php

    $backgroundImage = "img/sea.jpg";
    
    if(isset($_GET['category']) && ($_GET['category'] != "")){
        include 'api/pixabayAPI.php';
        $keyword = $_GET['category'];
        $layout = $_GET['layout'];
        $imageURLs = getImageURLs($keyword, $layout);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
    elseif(isset($_GET['keyword']) && ($_GET['keyword'] != "")){
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $layout = $_GET['layout'];
        $imageURLs = getImageURLs($keyword, $layout);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <style>
           @import url("css/styles.css"); 
           body{
               background-image: url(<?=$backgroundImage?>);
           }
        </style>
    </head>
    <body>
        <br>
        <?php
            if(!isset($imageURLs)){
                echo "<h2> Type a keyword to display a slideshow with random images from Pixabay.com </h2>";
            } else{
                //print_r($imageURLs);
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!--Indicators -->
            <ol class = "carousel-indicators">
                <?php
                    for($i = 0; $i < 7; $i++){
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0) ? "class='active'" : "";
                        echo "></li>";
                    }
                ?>
            </ol>
            
            <div class = "carousel-inner" role = "listbox">
                <?php
                   for($i=0; $i < 7; $i++){
                    do{
                        $randomIndex = rand(0, count($imageURLs));
                    } while(!isset($imageURLs[$randomIndex]));
                    
                    echo '<div class="item ';
                    echo ($i == 0) ? "active" : "";
                    echo '">';
                    echo '<img src="' . $imageURLs[$randomIndex] .  '">';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
                    } 
                ?>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php
            }
        ?>
        <br>
        
        <form>
            <input type="text" name="keyword" placeholder="keyword" value="<?=$_GET['keyword']?>"/>
            <input type="radio" id="lhorizontal" name="layout" value="horizontal">
            <label for="Horizontal"></label><label for="lhorizontal"> Horizontal </label>
            <input type="radio" id="lvertical" name="layout" value="vertical">
            <label for="Vertical"></label><label for="lvertical"> Vertical </label>
            <select name = "category" style="background-color: blue">
                <option value ="">Select One</option>
                <option value = "ocean">Sea</option>
                <option>Forest</option>
                <option>Mountain</option>
                <option>Snow</option>
            </select>
            <input type="submit" value="Search"/>
        </form>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>