<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "foodie_zone";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	
	die("Failed to Connect!");
}	



