<?php
    
    $Num = 11;

    Table($Num);

    function Table($No){
       for($i = 1;$i <= 10;$i++){
        echo $No*$i ."<br>";
       }
    }
?>