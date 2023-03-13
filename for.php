<?php
//The for loop is used when you know in advance how many times the script should run

$n = 5;
for($i=0;$i<=$n;$i++){
    for($j=0;$j<= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>