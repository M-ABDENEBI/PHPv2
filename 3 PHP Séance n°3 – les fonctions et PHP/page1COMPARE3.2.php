<?php
function compare2nb($nb1, $nb2) {
    if((int)$nb1 == (int)$nb2){
        echo "$nb1 est identique à $nb2";
    };
    if((int)$nb1>(int)$nb2){
        echo "$nb1 est plus grand que $nb2";
    };
    if((int)$nb1<(int)$nb2){
        echo "$nb1 est plus petit que $nb2";
    };
}
compare2nb(2,1);

?>
