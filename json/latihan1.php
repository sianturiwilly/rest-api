<?php

// $mahasiswa = [
//     [
//         "nama" => "Willi Sianturi",
//         "nim" => "92316073",
//         "email" => "prajudiwilliam10@gmail.com",
//     ],
//     [
//         "nama" => "Darwis Purba",
//         "nim" => "92410499",
//         "email" => "darwispurba93@gmail.com",
//     ]
// ];

$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
mysqli_set_charset($conn, 'utf8');
$query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
while($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
   
$json = json_encode($data);
echo $json;

?>