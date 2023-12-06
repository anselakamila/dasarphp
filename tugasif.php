<?php

/*
 Buat kondisi yang menghasilkan output sebagai berikut:
Baby Boomers:
Kelahiran antara tahun 1946 hingga tahun 1964.
 
Generasi X:
Kelahiran antara tahun 1965 hingga tahun 1979.
 
Generasi Y:
Kelahiran antara tahun 1980 hingga tahun 1994.
 
Generasi Z:
Kelahiran antara tahun 1995 hingga tahun 2010.
 
Generasi Alpha:
Kelahiran antara tahun 2010 hingga saat ini.
/*

$kelahiran = $_GET['tahun'] ?? '';
$output = "";

if ($kelahiran >= 1946 && $kelahiran  <= 1964 ){
    $output = "Baby Boomers";

}elseif ($kelahiran >= 1965 && $kelahiran  <= 1979 ) {
    $output = "Generasi X";

}elseif ($kelahiran >= 1980 && $kelahiran  <= 1994 ){
    $output = "Generasi Y";

}elseif ($kelahiran >= 1995 && $kelahiran  <= 2010 ){
    $output = "Generasi Z";

}elseif ($kelahiran > 2010){
    $output = "Generasi Alpha";


}else {
    $output = "Tahun salah.";
}

echo $output; */









$color = $_GET['color'] ?? '';
switch ($color) {
    case 'blue':
        echo "Biru";
        break;

        case 'yellow':
            echo "Kuning";
            break;

            case 'red':
                echo "Merah";
                break;
    

    default:
        echo "Tidak tersedia";
        
}




?>


