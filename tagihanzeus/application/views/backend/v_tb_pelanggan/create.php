<form class="" action="<?php echo site_url ('tb_pelanggan/save') ?>" method="post">
<label>Id_Pelanggan</label><br>
<input type="text" name="Id_Pelanggan" value=""><p></p>
<label>Nama_Pelanggan</label><br>
<input type="text" name="Nama_Pelanggan" value=""><p></p>
<label>Alamat</label><br>
<input type="text" name="Alamat" value=""><p></p>
<label>No_HP</label><br>
<input type="text" name="No_HP" value=""><p></p>
<button type="submit" name="button">Simpan</button>
<a href="<?php echo site_url('tb_pelanggan') ?>"><button type="button"
name="button">Batal</button></a>
</form>