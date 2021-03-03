<?php
$chu = 'mot cai gi do' ;
$chuKhac = 'day ne';
$chuKhacNua = 'ket thuc thoi';
$so =  1215 ;
$soKhac = 123.21;
$soTy = 349000000000000 ;
$tuChon = rand(1,99);
$so1 = 50 ;
$so2 = 6 ;
var_dump($so);
echo '<br>';
var_dump($chu);
echo '<br>';
var_dump($soKhac);
echo '<br>';
var_dump($soTy);
echo "<br>";
$in = (ceil($soKhac))+(floor($soKhac));
$in2 = join("-",[$so*2,$so/2]);
var_dump($in);
echo "<br>";
var_dump($in2);
echo "<br>";
printf("Hello World");
echo "<br>";
echo (ceil($soKhac));
echo "<br>";
echo (floor($soKhac));
echo "<br>";
echo "$in";
print '<br>';
print "$in";
print '<hr>';

echo "$tuChon";
if($tuChon<50){
    echo "<br>so nho hon 50";
}elseif($tuChon==50){
    echo "<br>Ban Da Trung Thuong";
}else{
    echo "<br>So lon hon 50";
}
echo "<hr>";
$dayChu = array("$chu","$chuKhac","$chuKhacNua");
var_dump($dayChu);
echo"<hr>";

echo($so1<=>$so2);
echo"<hr>";
$x = 4;
echo $x++;
