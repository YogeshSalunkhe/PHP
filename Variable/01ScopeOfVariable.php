<?php

    $x = 12;

    function Scope(){
        global $x;
        echo "Inside the Function : $x";
    }

    echo "Outside the Function : $x";
?>