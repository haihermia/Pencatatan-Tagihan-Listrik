<form class="" action="<?php echo site_url('tb_tagihan/update/'.$edit['Id_Tagihan'])
?>" method="post">
<label>Id Tagihan</label><br>
<input type="text" name="Id_Tagihan" disabled value="<?php echo
$edit['Id_Tagihan'] ?>"><p></p>
<input type="text" name="Id_Tagihan" hidden value="<?php echo
$edit['Id_Tagihan'] ?>"><p></p>

<label>Id_Periode</label><br>
<input type="text" name="Id_Periode" value="<?php echo
$edit['Id_Periode'] ?>"><p></p>

<label>Total_Tagihan</label><br>
<input type="text" name="Total_Tagihan" value="<?php echo
$edit['Total_Tagihan'] ?>"><p></p>

<label>Tanggal</label><br>
<input type="text" name="Tanggal" value="<?php echo
$edit['Tanggal'] ?>"><p></p>

<label>Keterangan</label><br>
<input type="text" name="Keterangan" value="<?php echo
$edit['Keterangan'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_tagihan') ?>"><button type="button"
name="button">Batal</button></a>
</form>