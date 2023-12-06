<?php

function tambah($a, $b){
    $hasil = $a + $b;
    return $hasil;
}
 
function kurang($a, $b)
{
    $hasil = $a - $b;
    return $hasil;
}
 
 
function kali($a, $b){
    $hasil = 0;
    for ($i=0; $i < $b; $i++) { 
        $hasil = tambah($hasil, $a);
    }
    return $hasil;
}
 
function pangkat($a, $b){
    $hasil = 1;
    for ($i = 1; $i <= $b; $i++) {
        $hasil = kali($hasil, $a);
    }
/*
Looping ada 3 kali
loop1: 1 * 4 = 4, nilai $hasil=4
loop2: 4 * 4 = 16, nilai $hasil=16
loop3: 16 * 4 = 64, nilai $hasil=64
*/
    return $hasil;
}
 
function bagi($a, $b){
 
}
 
// $result = tambah(3, 6);
// $result = kali(9, 9);
// $result = pangkat(4,3);
$result = bagi(4, 2);
echo $result;

?>