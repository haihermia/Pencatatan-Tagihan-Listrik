<form class="" action="<?php echo site_url('tb_pesan/update/'.$edit['Id_Tagihan'])
?>" method="post">
<label>Id_Pesan</label><br>
<input type="text" name="Id_Pesan" disabled value="<?php echo
$edit['Id_Pesan'] ?>"><p></p>
<input type="text" name="Id_Pesan" hidden value="<?php echo
$edit['Id_Pesan'] ?>"><p></p>

<label>Id_Admin</label><br>
<input type="text" name="Id_Admin" value="<?php echo
$edit['Id_Admin'] ?>"><p></p>

<label>Isi_Pesan</label><br>
<input type="text" name="Isi_Pesan" value="<?php echo
$edit['Isi_Pesan'] ?>"><p></p>

<label>Status</label><br>
<input type="text" name="Status" value="<?php echo
$edit['Status'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_pesan') ?>"><button type="button"
name="button">Batal</button></a>
</form>