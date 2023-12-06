<?php 
include "css.php";
?>

<a class="btn btn-info btn-sm" href="index.php">Kembali</a>
<form action="" class="form-control" method="POST">
    Nama:<br>
    <input class="form-control" type="text" name="nama">
    Pesanan:<br>
    <input class="form-control" type="text" name="pesanan">
    <br>
    Tanggal:<br>
    <input class="form-control" type="date" name="tanggal">
    <br>
    Jumlah:<br>
    <input class="form-control" type="text" name="jumlah">
    <br>
    Status:<br>
    <select name="status" class="form-control"> 
        <option value="">--Pilih status--</option>
        <option value="1">Done</option>
        <option value="0">On Proccess</option>
        <option value="2">Canceled</option>

    </select>
    
    <br><br>
    <input class="btn btn-success btn-sm" type="submit" name="pesan">
</form>

<?php 

if ($_POST)
{
    include 'config.php';

    $nama = $_POST['nama'];
    $pesanan = $_POST['pesanan'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];


    $query = "INSERT INTO master_pesanan values (null, '{$nama}', '{$pesanan}', '{$tanggal}', '{$jumlah}', '{$status}'); ";

    $result = $conn->query($query);

    if ($result == 1) {
        header("location:index.php");
    }else{
        echo "Insert data gagal!";
    }

}

?>