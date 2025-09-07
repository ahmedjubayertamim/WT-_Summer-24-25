<?php
$host= "localhost";
$user= "root";
$pass= "";
$dbname= "demo1";

$conn =new mysqli($host,$user,$pass,$dbname);


if ($conn ->connect_error){
    die("Connention faild:".$conn->connect_error);
}
?>