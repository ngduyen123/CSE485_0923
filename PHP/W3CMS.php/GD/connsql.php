<?php
$conn = mysqli_connect(hostname 'localhost', username 'root', password '123', djncdj);
if(!$conn){
    die('can not connect');
}

$sql = "SELECT * FROM users ORDER BY created_at DESC LTMT 10";
$result = mysqli_query($conn,$sql);

$users = mysqli_fetch_all($result);
?> 
<?php

?>