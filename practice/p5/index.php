<?php
    session_start();
    if(isset($_POST['submit'])){
        if($_POST['number'] > 8){
            echo "Error you idiot read";
        }
        else{
            if(isset($_POST['digits'])){
                $set = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789');
                }
                else{
                 $set = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
                }
            for($j = 0; $j < $_POST['number']; $j++){
                $digits = 0;
                $password = array();
                for($i = 0; $i < $_POST['length']; $i++){
                    $rand_keys = array_rand($set, 1);
                    if(is_numeric($set[$rand_keys]) && $digits < 3 && $i != 0){
                        array_push($password, $set[$rand_keys]);
                        $digits++;
                    }
                    elseif(is_numeric($set[$rand_keys]) && ($digits == 3 || $i == 0)){
                        do{
                            $rand_keys = array_rand($set, 1);
                        } while(is_numeric($set[$rand_keys]));
                        array_push($password, $set[$rand_keys]);
                    }
                    else{
                        array_push($password, $set[$rand_keys]);
                    }
                    
                }
                echo "Password: ";
                for($i = 0; $i < $_POST['length']; $i++){
                    echo $password[$i];
                }
                echo "<br>";
                
            }
        }
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Practice 5</title>
        <style type="text/css">
            body{
                text-align: center;
                width: 800px;
                border-radius: 20px;
                margin: 0 auto;
                background-color: pink;
            }
        </style>
    </head>
    <body>
        <h1>Custom Password Generator</h1>
        <form method="POST">
            How many passwords?
            <input type="text" name="number"/> (No more than 8)
            <br><br>
            <h2>Password Length</h2>
            <input type="radio" name="length" value="6"/> 6 characters
            <input type="radio" name="length" value="8"/> 8 characters
            <input type="radio" name="length" value="10"/> 10 characters
            <br>
            <input type="checkbox" name="digits" value="Include"/> Include digits (up to 3 digits will be part of the password)
            <br>
            <input type = "submit" value = "submit" name = "submit" />
            <br><br>
            <input type="submit" name="history" value = "Display Password History"/>
        </form>
        
        

    </body>
</html>