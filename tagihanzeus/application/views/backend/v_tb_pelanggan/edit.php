<form class="" action="<?php echo site_url('tb_pelanggan/update/'.$edit['Id_Pelanggan'])
?>" method="post">
<label>Id Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" disabled value="<?php echo
$edit['Id_Pelanggan'] ?>"><p></p>
<input type="text" name="Id_Pelanggan" hidden value="<?php echo
$edit['Id_Pelanggan'] ?>"><p></p>

<label>Nama Pelanggan</label><br>
<input type="text" name="Nama_Pelanggan" value="<?php echo
$edit['Nama_Pelanggan'] ?>"><p></p>

<label>Alamat</label><br>
<input type="text" name="Alamat" value="<?php echo
$edit['Alamat'] ?>"><p></p>

<label>No HP</label><br>
<input type="text" name="No_HP" value="<?php echo
$edit['No_HP'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_pelanggan') ?>"><button type="button"
name="button">Batal</button></a>
</form>