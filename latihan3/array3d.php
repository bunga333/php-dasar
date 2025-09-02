<?php
$nilai = [
    // index -> value
    ["nama" => "andi", "mapel" => ["matematika" => 80, "ipa" => 90, "bahasa" => 85]],
    ["nama" => "budi", "mapel" => ["matematika" => 75, "ipa" => 80, "bahasa" => 78]],
    ["nama" => "citra", "mapel" => ["matematika" => 92, "ipa" => 88, "bahasa" => 87]],
];
//   index as $key => value

foreach ($nilai as $data) {
    echo "nilai" . $data["nama"] . ":<br>";
    foreach ($data["mapel"] as $pelajaran => $nilai) {
        echo "- $pelajaran: $nilai <br>";
    }
    echo "<br>";
}