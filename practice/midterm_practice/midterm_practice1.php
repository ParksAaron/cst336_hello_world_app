<?php
    session_start();
    
    if(isset($_POST['submit'])){
        if($_POST['month'] == "select"){
            echo "YOU NEED A MONTH YOU BIG DUMMY";
            echo "<br>";
        }
        if(!isset($_POST['number'])){
            echo "YOU NEED A NUMBER OF COUNTRIES YOU BIG DUMMY";
            echo "<br>";
        }
        if($_POST['month'] != "select" && isset($_POST['number'])){
            $month = $_POST['month'];
            $number = $_POST['number'];
            $country = $_POST['country'];
            if($month == "November"){
                $days = 30;
            }
            elseif($month == "December" || $month=="January"){
                $days = 31;
            }
            else{
                $days = 28;
            }
            $counter = 1;
            echo "<table>";
            for($i = 0; $i < 5; $i++){
                echo "<tr>";
                for($j = 0; $j < 7; $j++){
                    if($counter < $days){
                        echo "<th>$counter</th>";
                        $counter++;
                    }
                    
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<h2>Monthly Itinerary</h2>";
            echo "<br>";
            echo "Month: $month, visiting $number places in $country";
        }
    }
    
    

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Midterm Practice 1 </title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Winter Vacation Planner!</h1>
        
        <form method='post'>
            
            Select Month:
            <select name = "month">
                <option value="select">Select</option>
                <option value="November">November</option>
                <option value="December">December</option>
                <option value="January">January</option>
                <option value="February">February</option>
            </select>
            
            <br>
            
            Number of locations:
            <input id ="three" type="radio" name="number" value="three"/>
            <label for="three">Three</label>
            <input id ="four" type="radio" name="number" value="four"/>
            <label for="four">Four</label>
            <input id ="five" type="radio" name="number" value="five"/>
            <label for="five">Five</label>
            
            <br>
            
            Select Country:
            <select name="country">
                <option value="USA">USA</option>
                <option value="Mexico">Mexico</option>
                <option value="France">France</option>
            </select>
            
            <br>
            
            Visit locations in alphabetical order:
            <select>
                <option value="normal">A-Z</option>
                <option value="reverse">Z-A</option>
            </select>
            
            <br>
            
            <input type="submit" name="submit" value="Create Itinerary"/>
        </form>
        
    </body>
</html>