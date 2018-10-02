<?php


if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    prettyEcho('It is a postback!');
}
else {
    prettyEcho("It is NOT a postback!");
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML Forms Experimentation</title>
    </head>
    <body>
        
        <form action="save.php?isItCool=sure" method="POST">
            <div>
                <!--'for' attribute is tied to 'id' of input, not 'name'-->
                <label for="name">Name:</label> 
                <input type="text" id="name" />
            </div>
            <div>
                <label for="issues">Issues:</label>
                <div id="issues">
                    <div><input type="checkbox" name="issues" value="1" /> Lagging</div>
                    <div><input type="checkbox" name="issues" value="2" /> Not connecting</div>
                    <div><input type="checkbox" name="issues" value="3" /> Can't login</div>
                    <div><input type="checkbox" name="issues" value="0" /> Other</div>
                </div>
            </div>
            <div>
                <label for="name">Comments:</label> 
                <div>
                    <textarea name="comments" rows="3"></textarea>
                </div>
            </div>
            <div>
                <input type="submit" value="Save" />
            </div>
        </form>
        
    </body>
</html>

<?php

require('log.inc.php');

function prettyEcho($label, $object = null) {
    echo('<p>' . $label); //($label ?? 'Data:'));
    if (isset($object)) {
        echo '<pre>';
        var_dump($object);
        echo '</pre>';
    }
    echo "</p>";
}

?>
