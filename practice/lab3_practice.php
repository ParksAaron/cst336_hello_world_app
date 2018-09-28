<?php
    $suits = array('C', 'S', 'H', 'D');
    $face = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
    $deck = array("numCards"=>52, "cards"=>array());
    
    $card_count = 0;
    for($x = 0; $x < 4; $x++){
        for($y = 0; $y < 13; $y++){
            $deck["cards"][$card_count]["suit"] = $suits[$x];
            $deck["cards"][$card_count]["face"] = $face[$y];
            $card_count = $card_count + 1;
        }
    }
    
    $players = array('numplayers' => 4, 'player' => array());
    shuffle($deck["cards"]);
    for($i = 0; $i < 4; $i++){
        $players = array('numplayers'=>4, 'player' =>array());
    
    for($i =0;$i<4;$i++){
        $players['player'][$i]['name'] = $i;
        $players['player'][$i]['value'] = 0;
        $x = 0;
        do{
            $players['player'][$i]['hand'][$x] = array_pop($deck['cards']);
            $players['player'][$i]['value'] = $players['player'][$i]['value'] + $players['player'][$i]['hand'][$x]['face'];
            $x = $x + 1;
        } while($players['player'][$i]['value'] < 37);
        
    }
}
    for($i = 0; $i < 4; $i++){
        echo count($players['player'][$i]["hand"]);
    }
?>