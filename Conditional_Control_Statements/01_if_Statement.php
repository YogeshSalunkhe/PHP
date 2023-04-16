<?php
    $num1 = 10;
    $num2 = 11;
    if($num1 < $num2){
        echo $num2 ." Is Maximum Number <br>";
    }
    --$num2;
    if($num1 === $num2):
        echo $num1 . " And " . $num2 . " Are Equal !!!";
    endif;
?>