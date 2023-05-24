<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('tb_tagihan/create') ?>"><button type="button"
name="button" title="untuk menambah data">Tambah</button></a>
<table border="1" width="70%">
<tr>
<td>No</td>
<td>Id_Tagihan</td>
<td>Id_Periode</td>
<td>Total_Tagihan</td>
<td>Tanggal</td>
<td>Keterangan</td>
<td>Aksi</td>
</tr>
<?php
$no=1;
//$read yang diambil dari control function index
foreach ($read->result_array() as $row) {
?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $row['Id_Tagihan'] ?></td>
<td><?php echo $row['Id_Periode'] ?></td>
<td><?php echo $row['Total_Tagihan'] ?></td>
<td><?php echo $row['Tanggal'] ?></td>
<td><?php echo $row['Keterangan'] ?></td>
<td>
<!--memanggil halaman edit atau edit.php-->
<a href="<?php echo site_url('tb_tagihan/edit/'.$row['Id_Tagihan'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('tb_tagihan/delete/'.$row['Id_Tagihan'])?>"
onclick="javascript: return confirm('Yakin Mau dihapus <?php echo
$row['Id_Tagihan'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>