<?php 
// return by value
// &$ = ref
    function divition(&$x,$y,$z = 10){
        return array($x,$y) ;
    }

    $a = 10 ;
    $b = 5 ;

    $sum = division($a+$b);
    print($sum[0]) + $sum[1] + $sum[2] ;
?>
