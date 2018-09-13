<!DOCTYPE html>
<html>
    <?php
        $randomNumbers = array();
        $sum = 0;
        for($i=0; $i < 9; $i++){
            $randomNumbers[$i] = rand(1,20);
        }
        for($i=0; $i < 9; $i++){
            $sum = $sum + $randomNumbers[$i];
            echo $randomNumbers[$i];
            if($randomNumbers[$i] % 2 == 0){
                echo " Even" . "<br>";
            }
            else{
                echo " Odd" . "<br>";
            }
        }
        $average = $sum / 2;
        echo "Sum: " . $sum . " Average: " . $average;
        <table style="width:100%">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th> 
            <th>Age</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td> 
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td> 
            <td>94</td>
        </tr>
    </table>
    ?>
    
</html>