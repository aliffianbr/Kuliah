<?php
$connect = mysqli_connect("localhost", "root", "", "json");
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);
$json_array = array();
while ($row = mysqli_fetch_assoc($result)) {
  $json_array[] = $row;
}
echo json_encode($json_array);

/* 
   Nama : Aliffian Akbar Hariyanto
   NIM  : G.211.22.0122
*/
?>