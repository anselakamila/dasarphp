<?php

$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x += 10;
}

echo "<hr>";

//looping format for

for ($x=0; $x <=100 ; $x+=10) { 
    echo "The number is: $x <br>";
}

echo "<hr>";
// looping foreach

$colors = array("red", "green", "yellow", "black", "white",);
foreach ($colors as $value) {
    if ($value == 'blue') {
        continue;
    }
    echo $value . ', ';

    if ($value == "black") {
        break;
    }
}

echo "<hr>";

for ($i=1; $i <100; $i+=2) { 
    
    echo " $i <br>";
}

echo "<hr>";



  function fungsiLooping($jumlah){
    for ($i = 1; $i <= $jumlah; $i+=2) {
    
        echo $i . ':';
        for ($j=1; $j <= $i ; $j++) { 
            echo "*";
        }
        echo "<br>";
      }

  }

  function fungsiBatas() {
    echo "<hr>";

  }

  echo "Panggil fungsi:<br>";

  fungsiBatas();
  fungsiLooping(100);



?>