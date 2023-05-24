<form class="" action="<?php echo site_url ('tb_tagihan/save') ?>" method="post">
<label>Id_Tagihan</label><br>
<input type="text" name="Id_Tagihan" value=""><p></p>
<label>Id_Periode</label><br>
<input type="text" name="Id_Periode" value=""><p></p>
<label>Total_Tagihan</label><br>
<input type="text" name="Total_Tagihan" value=""><p></p>
<label>Tanggal</label><br>
<input type="text" name="Tanggal" value=""><p></p>
<label>Keterangan</label><br>
<input type="text" name="Keterangan" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_tagihan') ?>"><button type="button"
name="button">Batal</button></a>
</form>