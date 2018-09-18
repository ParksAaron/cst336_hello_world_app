<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }        
    </style>
</head>

<body>

    <h1> Rock, Paper, Scissors </h1>

    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    
    <?php
    $player1Talley=0;
    $player2Talley=0;
    
    for($i=0; $i < 3; $i++){
            $random = rand(1,3); 
            if($random == 1){
                echo "<div class='row' id='option1'>
                <div class='col'><img src='img/scissors.png' alt='scissors' width='150'></div>
                <div class='col, matchWinner'><img src='img/rock.png' alt='rock' width='150'></div>
                </div>";
                $player2Talley++;
            }
            elseif($random == 2){
           echo "<div class='row' id='option2'>
        <div class='col'><img src='img/rock.png' alt='rock' width='150'></div>
        <div class='col, matchWinner'><img src='img/paper.png' alt='paper' width='150'></div>
        </div>";
        $player2Talley++;
            }
            else{
        echo "<div class='row' id='option3'>
        <div class='col, matchWinner'><img src='img/paper.png' alt='paper' width='150'></div>
        <div class='col'><img src='img/rock.png' alt='rock' width='150'></div>
         </div>";
         $player1Talley++;
            }
        }
    
        whoWins($player1Talley,$player2Talley);
    
    function whoWins($player1,$player2){
        if($player1 > $player2){
        echo "<div id='finalWinner'>
        <h1>The winner is Player 1</h1>
        <--
    </div>";
        }
        else{
        echo "<div id='finalWinner'>

        <h1>The winner is Player 2</h1>
-->
    </div>";
    
    }
}
    ?>

    
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/
</body>

</html>
