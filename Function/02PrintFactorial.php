<?php
    $no = 4;

    Fact($no);

    function Fact($n){
        $R = 1;
        
        while($n > 1){
            $R = $R * $n;
            $n--;
        }

        echo $R;
    }
?>