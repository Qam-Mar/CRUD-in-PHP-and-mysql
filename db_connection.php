<?php


$mysqli = new mysqli("localhost", "root", "", "project1");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


?>