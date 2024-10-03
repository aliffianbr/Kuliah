<?php

$json_string = '{
    "nama": "Aliffian Akbar Hariyanto",
    "NIM": "G.211.22.0122",
    "usia": 18,
    "pekerjaan": "Mahasiswa"
}';

$data_object = json_decode($json_string);

$data_array = json_decode($json_string, true);

echo "Nama (Object): " . $data_object->nama . "<br>";
echo "NIM (Object): " . $data_object->NIM . "<br>";
echo "Usia (Object): " . $data_object->usia . "<br>";
echo "Pekerjaan (Object): " . $data_object->pekerjaan . "<br>";

echo "<br>";

echo "Nama (Array): " . $data_array['nama'] . "<br>";
echo "NIM (Array): " . $data_array['NIM'] . "<br>";
echo "Usia (Array): " . $data_array['usia'] . "<br>";
echo "Pekerjaan (Array): " . $data_array['pekerjaan'] . "<br>";

?>
