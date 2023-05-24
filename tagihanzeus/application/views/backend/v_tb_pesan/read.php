<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('tb_pesan/create') ?>"><button type="button"
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
<tr>
<td>No</td>
<td>Id_Pesan</td>
<td>Id_Admin</td>
<td>Isi_Pesan</td>
<td>Status</td>
<td>Aksi</td>
</tr>
<?php
$no=1;
//$read yang diambil dari control function index
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['Id_Pesan'] ?></td>
<td><?php echo $row['Id_Admin'] ?></td>
<td><?php echo $row['Isi_Pesan'] ?></td>
<td><?php echo $row['Status'] ?></td>
<td>
<!--memanggil halaman edit atau edit.php-->
<a href="<?php echo site_url('tb_pesan/edit/'.$row['Id_Pesan'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('tb_pesan/delete/'.$row['Id_Pesan'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['Id_Pesan'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>