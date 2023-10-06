<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "quanlythuvien";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("ket noi that bai" . $conn->connect_errror);

}
echo "ket noi thanh cong";
?>