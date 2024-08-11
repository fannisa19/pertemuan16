<?php
$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];

setcookie("barang", $barang, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("jumlah", $jumlah, time() + (86400 * 30), "/");

echo "Barang: " . $_COOKIE['barang'] . "<br>";
echo "Jumlah: " . $_COOKIE['jumlah'] . "<br>";
?>
