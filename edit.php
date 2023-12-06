<?php 
include "css.php";
include "config.php";

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM master_pesanan WHERE id = {$id}");
$row = $data->fetch_assoc();
?>

<a class="btn btn-info btn-sm" href="index.php">Kembali</a>
<form action="" class="form-control" method="POST">
    Nama:<br>
    <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'] ?>">
    Pesanan:<br>
    <input class="form-control" type="text" name="pesanan" value="<?php echo $row['pesanan'] ?>">
    <br>
    tanggal:<br>
    <input class="form-control" type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>">
    <br>
    Jumlah:<br>
    <input class="form-control" type="number" name="jumlah" value="<?php echo $row['jumlah'] ?>">
    <br>
    Status:<br>
    <select name ="status" class="form-control">
    <option value="">--Pilih status--</option>
    <option <?php echo $row['status'] == 1 ? 'selected' : '' ?> value="1">Done</option>
    <option <?php echo $row['status'] == 1 ? 'selected' : '' ?> value="0">On Proccess</option>
    <option <?php echo $row['status'] == 1 ? 'selected' : '' ?> value="2">Canceled</option>
    </select>
    <br><br>
    <input class="btn btn-success btn-sm" type="submit" name="Simpan">
</form>

<?php 
if ($_POST) {
    $nama = $_POST['nama'];
    $pesanan = $_POST['pesanan'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];


    $update = $conn->query("UPDATE master_pesanan SET nama = '{$nama}', pesanan = '{$pesanan}', tanggal = '{$tanggal}', jumlah = '{$jumlah}', status = '{$status}' WHERE id = {$id};");
    if ($update) {
        header('location:index.php');
    }else{
        echo "Update pesanan GAGAL!";
    }
}
?>