<?php 
include "css.php";
include "config.php";

$nama = $_GET['nama'] ?? '';
$selected_status = $_GET['status'] ?? '';


$where= "";
// jika nama diisi dan status kosong 
if ($nama != '' && $selected_status == '') {
    $where = "WHERE nama LIKE'%{$nama}%'";
    
}
//jika nama kosong dan status diisi
if ($nama == '' && $selected_status != '') {
    $where = "WHERE status = '{selected_status}'";
    
}
//jika nama diisi dan status diisi
if ($nama != '' && $selected_status != '') {
    $where = "WHERE nama LIKE '%{$nama}%' AND status = '{$selected_status}'";
    
}

$query = $conn->query("SELECT * FROM  master_pesanan {$where};");





?>

<!-- Menu aplikasi -->
<a class="btn btn-success btn-sm" href="pesanan.php">Pesanan baru</a>

<?php 

?>
<!-- filter -->
<form method="GET">
Nama:
<input type="text" name="nama" value="<?php echo $nama?>">
<select name="status">
    <option value="">--Pilih Status--</option>
    <option <?php echo $selected_status == 1 ? 'selected': '' ?> value="1">--Done--</option>
    <option <?php echo $selected_status == 0 ? 'selected': '' ?> value="0">--On Proccess--</option>
    <option <?php echo $selected_status == 0 ? 'selected': '' ?> value="2">--Canceled--</option>
</select>

<input type="submit" value="Cari">
</form>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Pesanan</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Action</th>
        
    </tr>

    <?php
    $no = 1;
    while ($data = $query->fetch_assoc()): ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['pesanan'] ?></td>
        <td><?php echo $data['tanggal'] ?></td>    
        <td><?php echo $data['jumlah'] ?></td>   
        <td>
            <?php if ($data['status'] == 1) : ?>
                Done
            <?php endif; ?>

            <?php if ($data['status'] == 0) : ?>
                On Proccess
            <?php endif; ?>

            <?php if ($data['status'] == 2) : ?>
                Canceled
            <?php endif; ?>
        </td>   
        <td>
        <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
        <a 
        onclick= "return confirm('yakin hapus?');" 
        class="btn btn-danger btn-sm" 
        href="delete.php?id=<?php echo $data['id'] ?>">
        Delete</a>

        </td>
    </tr>

    <?php
    $no++;
 endwhile; ?>
    



</table>