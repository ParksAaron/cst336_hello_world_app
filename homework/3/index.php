<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_POST['genre']) && isset($_POST['name']) && isset($_POST['mood']) && $_POST['name'] != ""){
            $notes = str_split('ABCDEFG');
            $rand_index = array_rand($notes, 1);
            $rand_note = $notes[$rand_index];
            $name = $_POST['name'];
            $genre = $_POST['genre'];
            $mood = $_POST['mood'];
            if(isset($_POST['obscure'])){
                $obscure = true;
            }
            else{
                $obscure = false;
            }
            if($genre == "jazz"){
                if($mood == 'major'){
                    if($obscure){
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Augmented";
                    }
                    else{
                    $final = "A good scale for " . $name . " would be " . $rand_note . " Major Bebop";
                    }
                }
                else{
                    if($obscure){
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Symmetrical Diminished";
                    }
                    else{
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Dorian";
                    }
                }
            
            }
            elseif($genre == "metal"){
                if($mood == 'major'){
                    if($obscure){
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Prometheus";
                    }
                    else{
                    $final = "A good scale for " . $name . " would be " . $rand_note . " Lydian";
                    }
                }
                else{
                    if($obscure){
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Phrygian Dominant";
                    }
                    else{
                        $final = "A good scale for " . $name . " would be " . $rand_note . " Minor Pentatonic";
                    }
                }
            
            }
            else{
                if($obscure){
                    $final = '<img src="think.png" alt="think" title="Think" width="70" /> <br>' . " Find me an obscure pop song and I'll find you an obscure scale for pop.";
                }
                elseif($mood == 'major'){
                    $final = "A good scale for " . $name . " would be " . $rand_note . " Major";
                }
                else{
                    $final = "A good scale for " . $name . " would be " . $rand_note . " Minor";
                }
            
            }
            
        }
        else{
            $final = "All songs need a name, genre, and mood!";
        }

    }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Scale Generator</title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        </style>
    </head>
    <body>
        <div id="main">
            <h1 id="heading">What Scale Should I Use?</h1>
            <form method="POST">
                <label for="name">Song name: </label>
                <input id= "name" type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/>
                <br>
                Genre: 
                <input id ="jazz" type="radio" name="genre" value="jazz" <?php if(isset($_POST['genre']) && $_POST['genre'] == 'jazz') echo ' checked="checked"' ?>/>
                <label for="jazz">Jazz</label>
                <input id= "metal" type="radio" name="genre" value="metal" <?php if(isset($_POST['genre']) && $_POST['genre'] == 'metal') echo ' checked="checked"' ?>/>
                <label for="metal">Metal</label>
                <input id= "pop" type="radio" name="genre" value="pop" <?php if(isset($_POST['genre']) && $_POST['genre'] == 'pop') echo ' checked="checked"' ?>/>
                <label for="pop">Pop</label>
                <br>
                Mood: 
                <input id = "happy" type="radio" name="mood" value="major" <?php if(isset($_POST['mood']) && $_POST['mood'] == 'major') echo ' checked="checked"' ?>/>
                <label for="happy">Happy</label>
                <input id= "sad" type = "radio" name = "mood" value = "minor" <?php if(isset($_POST['mood']) && $_POST['mood'] == 'minor') echo ' checked="checked"' ?> />
                <label for="sad">Sad</label>
                <br>
                <input id="obscure" type="checkbox" name="obscure" <?php if(isset($_POST['obscure'])) echo ' checked="checked"' ?>/>
                <label for="obscure">Want it to sound obscure?</label>
                <br><br>
                <input type = "submit" value = "submit" name = "submit" />
                <br><br>
            </form>
        </div>
        <?php echo $final; ?>
        
    </body>
</html>