<?php

//echo readfile("pre.txt");

//$myFile=fopen("pree.txt","x+") or die("Unable to open file");
//r,r+,w,w+,x,x+,a,a+
//echo $myFile;
// $txt="Hello from code\n";
// fwrite($myFile,$txt);
// $cnt=fread($myFile,filesize("pre.txt"));
// echo $cnt;


//ftruncate($myFile,0);
//$myFile1="pree.txt";
//unlink($myFile1);
//fclose($myFile);

$fptr= fopen("m.txt","r");
while($a=fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}

?>