<?php
require_once('class_persegipanjang.php');

$persegiPanjang1 = new PersegiPanjang(5, 3);
$persegiPanjang2 = new PersegiPanjang(13, 7);
$persegiPanjang3 = new PersegiPanjang(57, 32);
$persegiPanjang4 = new PersegiPanjang(180, 65);

echo "<br> Luas Persegi Panjang 1: " . $persegiPanjang1->getluas();
echo '<br>';
echo "<br> Luas Persegi panjang 2: " . $persegiPanjang2->getluas();
echo '<br>';
echo "<br> Luas Persegi Panjang 3: " . $persegiPanjang1->getluas();
echo '<br>';
echo "<br> Luas Persegi panjang 4: " . $persegiPanjang2->getluas();

echo '<br>';
echo '<br>';

echo "<br> Keliling Persegi Panjang 1: " . $persegiPanjang1->getKeliling();
echo '<br>';
echo "<br> Keliling Persegi Panjang 2: " . $persegiPanjang2->getKeliling();
echo '<br>';
echo "<br> Keliling Persegi Panjang 3: " . $persegiPanjang1->getKeliling();
echo '<br>';
echo "<br> Keliling Persegi Panjang 4: " . $persegiPanjang2->getKeliling();