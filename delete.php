<?php 
include "config.php";

$id = $_GET['id'];

$result = $conn->query("DELETE FROM master_pesanan WHERE id = {$id};");

if ($result == 1){
    header('location:index.php');
}
else{
    echo "Hapus data gagal!";
}
 


?>