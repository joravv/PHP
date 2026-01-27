<?php

function fully_divisible($n){
if(($n%2)==0){
    return "$n is fully divisible by 2";
}else{
    return "$n is not fully divisible by 2";
}




}
print_r(fully_divisible(4)."<hr>");





$x=4;
function print_variables() {
    $y=10;
    echo $y;
}

print_variables();
echo $x;

$sports = array("football", "basketball", "voleyball");
$clubs = ["fcb","milan","arsenal","albacete",];
$numbers = [1,2,3,4,5,6,7];

echo $sports[0]."<br>";
echo $clubs[3]."<br>";
echo $numbers[6]."<br>";

for($i=0;$i<3; $i++){
    echo $sports[$i];
}
   array_pop($clubs);
   var_dump($clubs);

   array_unshift($clubs, 'dortmund');
   var_dump($clubs);

   array_shift($sports);
   for($i=0;$i<2; $i++){
    echo $sports[$i];
   }


   var_dump(array_sum($numbers));

   $numberss= [5, 4, 7, 87]

   var_dump(array_sum($numberss/4));
?>