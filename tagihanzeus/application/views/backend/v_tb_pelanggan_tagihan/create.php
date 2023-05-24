<form class="" action="<?php echo site_url ('tb_pelanggan_tagihan/save') ?>" method="post">
<label>Id_Pelanggan_Tagihan</label><br>
<input type="text" name="Id_Meteran" value=""><p></p>
<label>Id_Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" value=""><p></p>
<label>Id_Tagihan</label><br>
<input type="text" name="Id_Tagihan" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_meteran') ?>"><button type="button"
name="button">Batal</button></a>
</form>