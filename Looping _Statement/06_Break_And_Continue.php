<?php
    for($num = 1;$num <= 10;$num++){

        if($num % 2 == 0){
            echo "Number Is Even : ".$num ."<br><br>";
            continue;
        }
        echo "Number Is Odd : ".$num."<br><br>";
    }
    
    for($num = 1;$num <= 5;$num++){
        if($num == 4){
            echo "Stop The Printing!!!";
            break;
        }
        echo $num ." Hello India !!!<br>";
    }
?>