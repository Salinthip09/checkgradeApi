<?php 
$dbuser = "root";
$dbpass = "";
$dbname = "schooldb2";

$conn = new PDO("mysql:host=localhost; dbname=".$dbname,$dbuser,$dbpass);
$conn-> query('SEt NAMES UTF8');

date_default_timezone_set('Asia/Bangkok');
?>