<?php
include "connect.php";

$nisn = $_POST["NISN"];
$password = $_POST["PASSWORD"];

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $table where NISN=$nisn AND password=$password";
$result = $conn->query($sql);

var_dump($result[0]['NISN']);


if ($result->nums_rows > 0) {
    var_dump("bisa login");
} else {
    var_dump("ada yang salah");
}

$conn->close();

?>