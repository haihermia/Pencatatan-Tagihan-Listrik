<form class="" action="<?php echo site_url ('tb_pesan/save') ?>" method="post">
<label>Id_Tagihan</label><br>
<input type="text" name="Id_Pesan" value=""><p></p>
<label>Id_Admin</label><br>
<input type="text" name="Id_Admin" value=""><p></p>
<label>Isi_Pesan</label><br>
<input type="text" name="Isi_Pesan" value=""><p></p>
<label>Status</label><br>
<input type="text" name="Status" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_tagihan') ?>"><button type="button"
name="button">Batal</button></a>
</form>