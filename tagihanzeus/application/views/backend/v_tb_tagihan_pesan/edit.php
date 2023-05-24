<form class="" action="<?php echo site_url('tb_tagihan_pesan/update/'.$edit['Id_Tagihan'])
?>" method="post">
<label>Id_Pemberitahuan</label><br>
<input type="text" name="Id_Tagihan_Pesan" disabled value="<?php echo
$edit['Id_Tagihan_Pesan'] ?>"><p></p>
<input type="text" name="Id_Tagihan_Pesan" hidden value="<?php echo
$edit['Id_Tagihan_Pesan'] ?>"><p></p>

<label>Id_Tagihan</label><br>
<input type="text" name="Id_Tagihan" value="<?php echo
$edit['Id_Tagihan'] ?>"><p></p>

<label>Id_Pesan</label><br>
<input type="text" name="Id_Pesan" value="<?php echo
$edit['Id_Pesan'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_tagihan_pesan') ?>"><button type="button"
name="button">Batal</button></a>
</form>