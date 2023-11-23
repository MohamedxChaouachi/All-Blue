<?php


$user = 'root' ; 
$password = '' ;
$db = 'gestiondecroisière' ; 
$conn = new mysqli('localhost',$user,$password,$db) or die("Connection failed!"); 

if (!$conn) {
	die("Connection failed!");
}