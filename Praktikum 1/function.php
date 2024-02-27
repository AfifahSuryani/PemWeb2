<?php
// function untuk menghitung luas segitiga
function luas_segitiga($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    echo $luas;
}

// memanggil function
luas_segitiga(2, 10);