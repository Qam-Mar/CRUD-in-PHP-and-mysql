<html lang="en">

<head>
	<title>Simple PHP Document</title>
</head>

<body>

<?php
// Assign value to variable//////////variables
$color = "blue";
$Color = "blue";
$COLOR = "blue";
$coLor = "blue";

 
// Try to print variable value
echo "The color of the sky is " . $color . "<br>";
echo "The color of the sky is " . $Color . "<br>";
echo "The color of the sky is " . $COLOR . "<br>";
echo "the color of the sky is " . $coLor . "<br>";

?>

<?php 
$name = "qammar";
$number = "822";

echo "name of std is " .$name ."<br>";
echo "number of std in intern is " .$number ."<br>";

///////////////constant///////
define("SITE_URL", "https://www.tutorialrepublic.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;

//////////////applying html and css in php//////////////
echo "<h4>This is a simple heading.</h4>";
echo "<h4 style='color: red;'>This is heading with style.</h4>";


//////////arary in php///////
$text = " this is text";
$number = " 43572035";
$colors = array("red","green", "yellow");

echo "text = " .$text. "<br>";
echo "number is =" .$number. "<br>";
echo "array will show here = " .$colors[1]. "<br>";
//echo "data type of number is " .var_dump($number);
/////////////////////////////////////////////
// $colors = array("Red", "Green", "Blue");
// var_dump($colors);
// echo "<br>";
 
// $color_codes = array(
//     "Red" => "#ff0000",
//     "Green" => "#00ff00",
//     "Blue" => "#0000ff"
// );
// var_dump($color_codes);
                     ///////////////classes in php///////////////
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
// ///////////////////////handler or resourses in
// $handle = fopen("note.txt", "r");
// var_dump($handle);
// echo "<br>";
 
// // Connect to MySQL database server with default setting
// $link = mysqli_connect("localhost", "root", "");
// var_dump($link);


/////////////to find the lenght of string/////////
$my_str = 'Welcome to Tutorial Republic';
 
// Outputs: 28
echo "lenght of string is " . strlen($my_str) ."<br>";

///////////to find the word lenght of string////////
$my_str = 'The quick brown fox jumps over the lazy dog.';
 
// Outputs: 9
echo "string word count is " . str_word_count($my_str)."<br>";

//////////////replace string //////////

$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str)."<br>";

////////////////////switch statement /////////

$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
///////////////array////////////
$cities = array("London", "Paris", "New York");
 
// Display the cities array
print_r($cities);
var_dump($cities);



///////////////loops/////////////
// do{
//     $i++;
//     echo "The number is " . $i . "<br>";
// }
// while($i <= 3);


function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
echo abs(5);  



echo "<h1>starting database from here</h1>";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$mysqli = new mysqli("localhost", "root", "", "tryfirst");
 
// Check connection
//if($mysqli === false){
  //  die("ERROR: Could not connect. " . $mysqli->connect_error);
//}
 
// Print host information
//echo "Connect Successfully. Host info: " . $mysqli->host_info;


/////////////data inserting in data base//////////////

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */



                        ///////////////data inserting in database/////////////


$mysqli = new mysqli("localhost", "root", "", "tryfirst");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt insert query execution
$sql = "INSERT INTO cars (name, r_number, color) VALUES ('suzuki', 'dfn3523542', 'red')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

//////////////////////receiving data from the web page//////////////////////
$link = mysqli_connect("localhost", "root", "", "tryfirst");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO cars (name, r_number, color) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $name, $r_number, $color);
    
    // Set parameters
    $name = $_REQUEST['name'];
    $r_number = $_REQUEST['r_number'];
    $color = $_REQUEST['color'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);



if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
// $sql = "SELECT * FROM cars";
// if($result = $mysqli->query($sql)){
//     if($result->num_rows > 0){
//         echo "<table>";
//             echo "<tr>";
//                 echo "<th>name</th>";
//                 echo "<th>r_number</th>";
//                 echo "<th>color</th>";
//             echo "</tr>";
//         while($row = $result->fetch_array()){
//             echo "<tr>";
//                 echo "<td>" . $row['name'] . "</td>";
//                 echo "<td>" . $row['r_number'] . "</td>";
//                 echo "<td>" . $row['color'] . "</td>";
//             echo "</tr>";
//         }
//         echo "</table>";
//         // Free result set
//         $result->free();
//     } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }
 
// // Close connection
// $mysqli->close();








?>

</body>

</html>