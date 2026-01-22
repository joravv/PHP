<?php
$nr = 4;
if($nr ==0){
    echo "numri eshte 0";
}else if($nr>0){
    echo "numri eshte me i madh se 0";
}



$day = "wednasday";
switch($day){
    case "Monday" ;
    echo "yay i hate school";
break;
case "Monday" ;
    echo "yay i hate school";
break;

case "Tuesday" ;
    echo "idk bro ";
break;

case "Wednesday" ;
    echo "skip school";
break;

case "Thursday" ;
    echo "skip school again";
break;

case "Friday" ;
    echo "wait one more day";
break;

case "saturday" ;
    echo "out with friends";
break;
case "Sunday" ;
    echo "school tomorrow";
break;

deffault:
echo "error";
break;

}

$numri = 0;

while($numri <=5){
echo "the number is $numri <hr>";
$numri++;

}


$numrii=0;
do{

    echo "the number is $numrii";
$numrii++;
}while($numrii <=5);

    for($x=0; $x<=10; $x++){
echo "the number is $x";
    }




$cars = array("audi", "ferrari", "lambo", "range rover");
foreach ($cars as $value){
    echo $value;
}


    $age = array("buna"=>"13", "jora"=>"14", "lumi"=>"3" );
foreach ($age as $x=>$mosha){
    echo "$x = $mosha <hr>";
}
?>