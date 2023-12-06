
<?php
function pengurangan($a, $b) {
    $hasil = $a - $b;
    return $hasil;
}

echo pengurangan(76,5);

echo "<hr>";

function kurangan($a, $b) {
    $hasil = $a;
    
    for ($i = 0; $i < $b; $i++) {
        $hasil--;
    }
    return $hasil;
}
echo kurangan(60,4);
 

?>
