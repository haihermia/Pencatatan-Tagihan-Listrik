<form class="" action="<?php echo site_url ('tb_periode/save') ?>" method="post">
<label>Id_Periode</label><br>
<input type="text" name="Id_Periode" value=""><p></p>
<label>Bulan</label><br>
<input type="text" name="Bulan" value=""><p></p>
<label>Tahun</label><br>
<input type="text" name="Tahun" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_tagihan') ?>"><button type="button"
name="button">Batal</button></a>
</form>