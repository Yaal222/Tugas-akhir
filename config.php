<?php
$server      ="localhost";
$user="root";
$password="";
$namadatabase="sekolah";

$db=mysqli_connect($server,$user,$password,$namadatabase);

if(!$db){
    die("gagal terhubung database: " . mysqli_connect_error());
}
