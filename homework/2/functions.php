<?php
    function generate(){
        $genres = array("Rap", "Rock", "Metal", "Pop");
        $albums = array("Supreme Blientele", "KIDS SEE GHOSTS", "Don't Get Scared Now", "No Mountains in Manhattan", "Walking Disease", "Rage Against the Machine", "Californication", "Walk Among Us", "The Anomalies of Artificial Origin", "Black Sabbath", "Kill 'Em All", "Iowa", "Blonde", "Lemonade", "GIRL", "ANTI" );
        $artists = array("Westside Gunn", "KIDS SEE GHOSTS", "GxFR", "Wiki", "Trash Talk", "Rage Against the Machine", "Red Hot Chili Peppers", "The Misfits", "Abominable Putridity", "Black Sabbath", "Metallica", "Slipknot", "Frank Ocean", "Beyonce", "Pharrell", "Rihanna"  );
        $recommendations = array("numGenres" => 4, "albums"=>array());
        $albumCount = 0;
        for($i = 0; $i < count($genres); $i++){
            for($x = 0; $x < 4; $x++){
                $recommendations["albums"][$albumCount]["genre"] = $genres[$i];
                $recommendations["albums"][$albumCount]["album"] = $albums[$albumCount];
                $recommendations["albums"][$albumCount]["artist"] = $artists[$albumCount];
                $albumCount++;
            }
            
            
        }
        $albumRecc = array();
        echo "<div id='parent'>";
        
        for($x = 0; $x < count($genres); $x++){
            switch($x){
                case 0:
                   $albumRecc[$x] = rand(0, 3);
                   break;
                
                case 1:
                    $albumRecc[$x] = rand(4, 7);
                    break;
                    
                case 2:
                    $albumRecc[$x] = rand(8, 11);
                    break;
                
                case 3:
                    $albumRecc[$x] = rand(12, 15);
            }
            
            $genre = $recommendations['albums'][$albumRecc[$x]]['genre'];
            $album = $recommendations["albums"][$albumRecc[$x]]["album"];
            $artist = $recommendations["albums"][$albumRecc[$x]]["artist"];
            if($x == 0){
                echo "<div id='reccomendations' class ='rap'>";
            }
            elseif($x == 1 ){
                echo "<div id='reccomendations' class ='rock'>";
            }
            elseif($x == 2){
                echo "<div id='reccomendations' class ='metal'>";
            }
            else{
                echo "<div id='reccomendations' class ='pop'>";
            }
            echo "<br><br>";
            echo "<h2>$genre</h2>";
            echo "<img id='albumArt' src='img/$albumRecc[$x].jpg' alt='albumArt$y' title = 'Album Art $y' width='250' >";
            echo "<h3>Album: $album</h2>";
            echo "<h3>Artist: $artist</h2>";
            echo "</div>";
    }
    
    echo "</div>";
}


?>