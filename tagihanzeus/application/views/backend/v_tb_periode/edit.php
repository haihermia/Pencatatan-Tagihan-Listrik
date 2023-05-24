<form class="" action="<?php echo site_url('tb_periode/update/'.$edit['Id_Periode'])
?>" method="post">
<label>Id Periode</label><br>
<input type="text" name="Id_Periode" disabled value="<?php echo
$edit['Id_Periode'] ?>"><p></p>
<input type="text" name="Id_Periode" hidden value="<?php echo
$edit['Id_Periode'] ?>"><p></p>

<label>Bulan</label><br>
<input type="text" name="Bulan" value="<?php echo
$edit['Bulan'] ?>"><p></p>

<label>Tahun</label><br>
<input type="text" name="Tahun" value="<?php echo
$edit['Tahun'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_periode') ?>"><button type="button"
name="button">Batal</button></a>
</form>