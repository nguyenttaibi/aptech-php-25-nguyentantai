<?php   
echo "Name:".$_POST['name']."<br>";
echo "Email:".$_POST['email']."<br>";
echo "Password:".$_POST['password']."<br>";
echo "Confirm Password:".$_POST['cfpassword']."<br>";
echo "Date:".$_POST['DateOfBirth']."<br>";
//check name
$checkName = '^[a-z,-]+[a-z,-]+$';
if (preg_match($checkName, $_POST['name'])){
    echo "ok";
}else{
    echo "exit";
}

$checkName = '^[a-z,-]+[a-z,-]+$';
if (preg_match($checkName, $_POST['name'])){
    echo "ok";
}else{
    echo "exit";
}

$checkName = '^[a-z,-]+[a-z,-]+$';
if (preg_match($checkName, $_POST['name'])){
    echo "ok";
}else{
    echo "exit";
}

$checkName = '^[a-z,-]+[a-z,-]+$';
if (preg_match($checkName, $_POST['name'])){
    echo "ok";
}else{
    echo "exit";
}