<?php
    $Name = "Amey Wagh";                                //String
    $Roll_No = 12;                                      //Integer
    $Percentege = 89.98;                                //Float
    $Pass = true;                                       //Boolean
    $Subject = array("Math","Phy","Chem");              //Array
    $Donation = null;                                   //Null

    echo $Roll_No ." : ";
    var_dump($Roll_No);
    echo "<br>";

    echo $Name ." : ";
    var_dump($Name);
    echo "<br>";

    echo $Subject[0]." : ";
    var_dump($Subject);
    echo "<br>";

    echo $Percentege." : ";
    var_dump($Percentege);
    echo "<br>";

    echo $Pass." : ";
    var_dump($Pass);
    echo "<br>";

    echo $Donation . " : ";
    var_dump($Donation);
    echo "<br>";
?>