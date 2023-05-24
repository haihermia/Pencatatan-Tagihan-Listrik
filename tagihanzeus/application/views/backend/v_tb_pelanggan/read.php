<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('tb_pelanggan/create') ?>"><button type="button"
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
<tr>
<td>No</td>
<td>Id_Pelanggan</td>
<td>Nama_Pelanggan</td>
<td>Alamat</td>
<td>No_HP</td>
<td>Aksi</td>
</tr>
<?php
$no=1;
//$read yang diambil dari control function index
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['Id_Pelanggan'] ?></td>
<td><?php echo $row['Nama_Pelanggan'] ?></td>
<td><?php echo $row['Alamat'] ?></td>
<td><?php echo $row['No_HP'] ?></td>
<td>
<!--memanggil halaman edit atau edit.php-->
<a href="<?php echo site_url('tb_pelanggan/edit/'.$row['Id_Pelanggan'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('tb_pelanggan/delete/'.$row['Id_Pelanggan'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['Id_Pelanggan'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>