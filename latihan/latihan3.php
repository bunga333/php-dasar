<?php
$sotal = 600000;
$disc = 0;

if ($sotal > 500000) {
    $disc = 0.2 * $sotal;
} elseif ($sotal >= 250000) {
    $disc = 0.1 * $sotal;
} else {
    $disc = 0;
}

echo "total: " . $sotal. "<br>";
echo "discount: " . $disc . "<br>";
echo "total after discount: " . ($sotal - $disc) . "<br>";