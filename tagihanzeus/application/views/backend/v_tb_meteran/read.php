<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('tb_meteran/create') ?>"><button type="button"
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
<tr>
<td>No</td>
<td>Id_Meteran</td>
<td>Id_Pelanggan</td>
<td>Total_Kwh</td>
<td>Daya</td>
<td>Aksi</td>
</tr>
<?php
$no=1;
//$read yang diambil dari control function index
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['Id_Meteran'] ?></td>
<td><?php echo $row['Id_Pelanggan'] ?></td>
<td><?php echo $row['Total_Kwh'] ?></td>
<td><?php echo $row['Daya'] ?></td>
<td>
<!--memanggil halaman edit atau edit.php-->
<a href="<?php echo site_url('tb_meteran/edit/'.$row['Id_Meteran'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('tb_meteran/delete/'.$row['Id_Meteran'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['Id_Meteran'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>