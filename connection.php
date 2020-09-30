<?php

$host = webmasha1.database.windows.net;
$username= 'Masha123';
$password = 'Hidden23';
$db_name = 'webmasha1';
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);


$sql = "SELECT grades from webmasha1"
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
  echo "This grade is { $row["grade"]}! <br>";
}

mysqli_close($conn);
?>