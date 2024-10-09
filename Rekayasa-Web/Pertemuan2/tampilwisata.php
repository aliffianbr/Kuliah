<?php
function curl($curl) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $curl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

$send = curl('http://localhost/prak_rekayasaWeb/Praktikum2/getwisata.php');

$data = json_decode($send, true);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID WISATA</th>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["id_wisata"]."</td>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";

/* 
   Nama : Aliffian Akbar Hariyanto
   NIM  : G.211.22.0122
*/
?>
