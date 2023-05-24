<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('tb_periode/create') ?>"><button type="button"
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
<tr>
<td>No</td>
<td>Id_Periode</td>
<td>Bulan</td>
<td>Tahun</td>
<td>Aksi</td>
</tr>
<?php
$no=1;
//$read yang diambil dari control function index
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['Id_Periode'] ?></td>
<td><?php echo $row['Bulan'] ?></td>
<td><?php echo $row['Tahun'] ?></td>
<td>
<!--memanggil halaman edit atau edit.php-->
<a href="<?php echo site_url('tb_periode/edit/'.$row['Id_Periode'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('tb_periode/delete/'.$row['Id_Periode'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['Id_Periode'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>