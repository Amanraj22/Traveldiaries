<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "travel";


$con = mysqli_connect($servername, $username, $password, $database);

if(!$con){
    die("Error".mysqli_connect_error());
}

function create_unique_id(){
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;

    for($i = 0; $i < 20; $i++){
       $n = mt_rand(0, $length);
       $rand[] = $str[$n];
    }
    return implode($rand);
 }
 
?>