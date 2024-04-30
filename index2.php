<?php
    echo "Ex. 01: <br>";
    $var = array(1,2,4,5);
    echo "$var[0] <br>";
    echo "$var[1] <br>";
    echo "$var[2] <br>";
    echo "$var[3] <br>";

    echo "<br> Ex. 02: <br>";
    $var1 = array("fabio" => 30, "eber" => 40, "wq" => 60);
    echo "$var1[fabio] <br>";
    echo "$var1[eber] <br>";
    echo "$var1[wq] <br>";

    echo "<br> Ex. 03: <br>";
    $var2 = array("0" => 5, "6" => 8, "9" => 15);
    echo "$var2[0] <br>";
    echo "$var2[6] <br>";
    echo "$var2[9] <br>";

    $var2[1] = 20;
    echo "$var2[1] <br>";
    
    $var2[2] = 200;
    echo "$var2[2] <br>";

    $var2[0] = 4;
    echo "$var2[0] <br>";
?>