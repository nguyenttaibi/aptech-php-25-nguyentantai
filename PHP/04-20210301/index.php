<?php
// $myFile = fopen("text.txt", "rw") or die("Unable to open file!");
// while(!feof($myFile)) {
//   echo fgetc($myFile);
// }
$myFile1 = fopen("text-1.txt","x") or die("cant");
$add ="Ta1i";
fwrite($myFile1, $add);
fclose($myFile1);

?>