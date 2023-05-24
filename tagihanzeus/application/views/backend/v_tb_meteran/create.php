<form class="" action="<?php echo site_url ('tb_meteran/save') ?>" method="post">
<label>Id_Meteran</label><br>
<input type="text" name="Id_Meteran" value=""><p></p>
<label>Id_Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" value=""><p></p>
<label>Total_Kwh</label><br>
<input type="text" name="Total_Kwh" value=""><p></p>
<label>Daya</label><br>
<input type="text" name="Daya" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_meteran') ?>"><button type="button"
name="button">Batal</button></a>
</form>