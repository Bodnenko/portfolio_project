<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli ("localhost", "root", "", "myfirstdatabase");
$mysqli->query ("SET NAMES 'UTF8'");

$success = $mysqli->query ("INSERT INTO 'myfirstdatabase' ('login', 'password', 'reg_date') VALUES ('123', '".md5("123")."', '".time ()."')");
echo $success;
$mysqli->close ();

echo 122334;

$mysqli = new mysqli ("localhost", "root", "", "myfirstdatabase");
$mysqli->query ("SET NAMES 'UTF8'");

$pass=md5('123');
$time=time();

$success = $mysqli->query ("INSERT INTO 'myfirstdatabase' ('login', 'password', 'reg_date') VALUES ('123', '$pass','$time')");
echo $success;
$mysqli->close ();
// Create connection

echo '<h1> MYSQL TEST </h1';

$conn = new mysqli('localhost', 'root', '','myfirstdatabase');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pass=md5('123');
$time=time();

$sql = "INSERT INTO myfirstdatabase(login, password, reg_date) VALUES ('Koxa', '$pass', '$time')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
