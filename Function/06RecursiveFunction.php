<?php
    $no = 4;

    function Fact($n){

        if($n <= 1){
            return 1;
        }
        else{
           return $n * Fact($n - 1);
        }
    }

    $Res = Fact($no);

    echo $Res;

?>