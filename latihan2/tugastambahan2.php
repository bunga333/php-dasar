<?php
$barang = [
    ["botol", 12],
    ["Pensil", 3],
    ["Buku", 7],
    ["Papan tulis", 2],
    ["Penghapus", 0]
];

foreach ($barang as $item) {
    if ($item[1] < 5) {
        echo $item[0] . " hampir habis (stok: " . $item[1] . ")<br>";
    }
}
?>