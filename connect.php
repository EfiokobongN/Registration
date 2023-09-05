<?php
$hostName = 'localhost';
$userName = 'root';
$passWord = '';
$dataBase = 'phplearning';
$conn = mysqli_connect($hostName, $userName, $passWord, $dataBase);

//if not connected. !=> stand for not
if(!$conn){
    die(mysqli_error($conn));
}
?>