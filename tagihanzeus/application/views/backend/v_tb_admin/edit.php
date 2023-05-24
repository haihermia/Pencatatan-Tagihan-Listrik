<form class="" action="<?php echo site_url('tb_admin/update/'.$edit['id_admin'])
?>" method="post">
<label>Id Admin</label><br>
<input type="text" name="id_admin" disabled value="<?php echo
$edit['id_admin'] ?>"><p></p>
<input type="text" name="id_admin" hidden value="<?php echo
$edit['id_admin'] ?>"><p></p>

<label>Username</label><br>
<input type="text" name="username" value="<?php echo
$edit['username'] ?>"><p></p>

<label>Password</label><br>
<input type="text" name="password" value="<?php echo
$edit['password'] ?>"><p></p>

<button type="submit" name="button">Perbaharui</button>
<a href="<?php echo site_url('tb_admin') ?>"><button type="button"
name="button">Batal</button></a>
</form>