<?php  
for ($i = 0; $i < 2; $i++) {
    $j=1;
    while ( $j <= 100) {
        if($j < 99){
            echo " $j -";
        } else {
            echo" $j ";
        };
     $j= $j + 2;
    }
    echo "<hr>";
}
?>  
