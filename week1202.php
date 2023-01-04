<?php 
function day_name(){
        $day1 = "Monday" ;
        $day2 = "Tuesday" ;
        $day3 = "Wednesday" ;

       // return [$day1,$day2,$day3] ;
       return array($day1,$day2,$day3) ;
}
$day = day_name();
list ($day1,$day2,$day3) =day_name() ;
print($day[0].','.$day[1].','.$day[2]) ;
// print($day1[0].','.$day2[1].','.$day3[2]) ;
// print($day_3[0].','.$day_2[1].','.$day_1[2]) ;
?>