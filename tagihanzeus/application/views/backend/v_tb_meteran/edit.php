<form class="" action="<?php echo site_url('tb_meteran/update/'.$edit['Id_Meteran'])
?>" method="post">
<label>Id_Meteran</label><br>
<input type="text" name="Id_Meteran" disabled value="<?php echo
$edit['Id_Meteran'] ?>"><p></p>
<input type="text" name="Id_Meteran" hidden value="<?php echo
$edit['Id_Meteran'] ?>"><p></p>

<label>Id_Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" value="<?php echo
$edit['Id_Pelanggan'] ?>"><p></p>

<label>Total_Kwh</label><br>
<input type="text" name="Total_Kwh" value="<?php echo
$edit['TOtal_Kwh'] ?>"><p></p>

<label>Daya</label><br>
<input type="text" name="Daya" value="<?php echo
$edit['Daya'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_meteran') ?>"><button type="button"
name="button">Batal</button></a>
</form>