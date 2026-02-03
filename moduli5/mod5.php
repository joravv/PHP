<?php

$players = array(

    array("raphina", "28" ,"brazil"),
    array("marcbernal", "19" ,"spain"),
    array("ferminlopez", "22" ,"spain"),
    
    
);

echo $players [0][0] . "age". $players[0][1] . "country".$players [0][2] ."<hr>";
echo $players [1][0] . "age". $players[1][1] . "country". $players[1][2] ."<hr>";
echo $players [2][0] . "age". $players[2][1] . "country". $players[2][2] ."<hr>";

for($x=0; $x<3; $x++){
    echo "<ul>";
    for($y = 0; $y<3; $y++){
        echo "<li>".$players[$x][$y]. "</li>";
    }
    echo "</ul>";
}



?>

<!DOCTYPE html>
<table>
    <tr>
        <th>phone<th>
            <th>in stock<th>
                <th>sold<th>
</tr>
</table>

<style>
    table{
        width : 500px;

    }
    th,td{
        padding:10px;
        text-align:center;
        border: 1px solid black;
    }

    th{
        background-color:red;
        font-weight: bold;
    }
    </style>
</html>