<?php
    //generate random number and store in session
    //form for guess
    //form validation logic to determine whether guess is too high or low
    //store the history in the session
    //clear the session
    //
    
    session_start();
    
    if(isset($_POST['destroy'])){
        session_destroy();
        session_start();
    }
    
    if(!isset($_SESSION['randomVal'])){
        $_SESSION['randomVal'] = rand(1, 100);
        $_SESSION['guesses'] = array();
    }
    
    if(isset($_POST['submit'])){
        if(isset($_POST['guess'])){
            if($_POST['guess'] == $_SESSION['randomVal']){
                echo "Correct!";
                session_destroy();
                session_start();
            }
            elseif($_POST['guess'] < $_SESSION['randomVal']){
                echo "Too low";
                array_push($_SESSION['guesses'], $_POST['guess']);
            }
            else{
                echo "Too high";
                array_push($_SESSION['guesses'], $_POST['guess']);
            }
            echo " Guesses: ";
            for($i = 0; $i < sizeof($_SESSION['guesses']); $i++){
                echo $_SESSION['guesses'][$i] . ", ";
            }
        }
    }
    
    

?>

<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    <body>
        Random Number: 
        
        <form method='post'>
            <input type="text" name="guess"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        
        <form method='post'>
            <input type="submit" name='destroy' value="Start Over"/>
        </form>
        
    </body>
</html>