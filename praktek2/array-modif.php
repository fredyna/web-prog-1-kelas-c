<?php
    $data = array(
        "nama" => "Fredy Nur Apriyanto",
        "usia" => 19,
        "jomblo" => true,
        0.1 => 5
    );

    echo "Nama : " . $data['nama'] . "<br>";
    echo "Usia : " . $data['usia'] . "<br>";
    echo "Status Jomblo : " . $data['jomblo'] . "<br>";
    echo "data lain : " . $data[0.1];
?>