<?php
    $no = 4;

    Fact($no);

    function Fact($n){
        for($i = 1;$i <= $n;$i++){
            $Res = $n * $i;
        }

        echo $Res;
    }
?>