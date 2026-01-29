<?php




$emri = "buna";
$mbiemri= "berisha";
echo  "pershendetje $emri $mbiemri <hr>";


$pi=3.14;
$r=4;
echo $pi*$r^2.;


$string7= "FCb";
echo strrev($string7);

$age=14;
if($age==18){
    echo "personi mund te votoj";
}else if($age<18){
    echo "personi nuk mund te votoj";
}



$nr = "5";
switch($nr){
    case "1" ;
    echo "Monday";
break;
case" 2";
    echo "Tuesday";
break;

case "3" ;
    echo "Wednesday";
break;

case "4" ;
    echo "Thursday";
break;

case "5" ;
    echo "friday";
break;

case "6" ;
    echo "saturday";
break;

case "7" ;
    echo "sundday";
break;


default:
echo "lnvalid";
break;
}


 $nr= array(25,6,8,3);
 $nrdf=array_sum(array: $nr)/3;
 echo $nr;
?>