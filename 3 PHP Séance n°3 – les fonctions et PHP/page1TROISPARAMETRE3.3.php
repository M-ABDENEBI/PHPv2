<?php
function ajouteMAJ( $ch1, $ch2, $ch3){
    $maj1 = strtoupper($ch1);
    $maj2 = strtoupper($ch2);
    $maj3 = strtoupper($ch3);
    echo "$maj1 $maj2 $maj3 ";
}
$r=ajouteMAJ("bonjour","a","tous");
echo $r;

?>