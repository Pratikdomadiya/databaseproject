 <?php
//include("DBConnection.php"); // include the connection object from the DBConnection.php
$servername = "localhost";
$username = "pratil";
$password = "9512731294";
$dbname = "dummy";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

 ?>
