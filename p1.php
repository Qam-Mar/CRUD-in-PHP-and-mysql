<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "tryfirst");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$r_number = $mysqli->real_escape_string($_REQUEST['r_number']);
$color = $mysqli->real_escape_string($_REQUEST['color']);
// Attempt insert query execution
$sql = "INSERT INTO cars (name, r_number, color) VALUES ('$name', '$r_number', '$color')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
   
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
