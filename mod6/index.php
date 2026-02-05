<?php
$my_file = fopen("buna.txt" , "w");
$nn = fopen("m.txt" , "r");

fclose($nn);

$file= ("testi.txt");
$readonly = fopen($file, "r");
$size = filesize($file);
$filedata = fread($readonly, $size);
echo $filedata;

$read = fopen("buna.txt" , "r");
while(!feof($read)){
    echo fgets($read);
}
fclose($read);

$write = fopen("buna.txt" , "w");
$text = "ne sod";
fwrite($write, $text);

 $hii=file_put_contents('test.txt', "gfjuygfiyutjhjg");
echo $hii;
?>