<form class="" action="<?php echo site_url('tb_pelanggan_tagihan/update/'.$edit['Id_Pelanggan_Tagihan'])
?>" method="post">
<label>Id_Invoice</label><br>
<input type="text" name="Id_Pelanggan_Tagihan" disabled value="<?php echo
$edit['Id_Pelanggan_Tagihan'] ?>"><p></p>
<input type="text" name="Id_Pelanggan_Tagihan" hidden value="<?php echo
$edit['Id_Pelanggan_Tagihan'] ?>"><p></p>

<label>Id_Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" value="<?php echo
$edit['Id_Pelanggan'] ?>"><p></p>

<label>Id_Tagihan</label><br>
<input type="text" name="Id_Tagihan" value="<?php echo
$edit['Id_Tagihan'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_pelanggan_tagihan') ?>"><button type="button"
name="button">Batal</button></a>
</form>