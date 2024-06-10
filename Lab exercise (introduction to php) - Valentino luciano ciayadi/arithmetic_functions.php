<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Cannot divide by zero";
    }
    return $a / $b;
}

$a = 23;
$b = 2;

echo "Hasil penjumlahan $a dan $b adalah " . add($a, $b) . "<br>";
echo "Hasil pengurangan $a dan $b adalah " . subtract($a, $b) . "<br>";
echo "Hasil perkalian $a dan $b adalah " . multiply($a, $b) . "<br>";
echo "Hasil pembagian $a dan $b adalah " . divide($a, $b) . "<br>";
?>
