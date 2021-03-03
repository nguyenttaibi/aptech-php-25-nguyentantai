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

$checkEmail = '/^\S*[a-zA-Z0-9-_]+@[a-z]{5}\.[a-z]{2}\S*$/i';
if (preg_match($checkEmail, $_POST['email'])){
    echo "ok";
}else{
    echo "exit";
}

$checkpw = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
if (preg_match($checkpw, $_POST['password'])){
    echo "ok";
}else{
    echo "exit";
}

$checkcpw = '^[a-z,-]+[a-z,-]+$';
if (preg_match($checkcpw, $_POST['cfpassword'])){
    echo "ok";
}else{
    echo "exit";
}