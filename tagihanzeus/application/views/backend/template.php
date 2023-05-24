<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>tagihanzeus</title>
</head>
<body>

<a href="<?php echo site_url('Home') ?>">Beranda</a> |
<a href="<?php echo site_url('tb_admin') ?>">Data Admin</a> |
<a href="<?php echo site_url('tb_pelanggan') ?>">Data Pelanggan</a> |
<a href="<?php echo site_url('tb_tagihan') ?>">Data Tagihan</a> |
<a href="<?php echo site_url('tb_periode') ?>">Data Periode</a> |
<a href="<?php echo site_url('tb_meteran') ?>">Data Meteran</a> |
<a href="<?php echo site_url('tb_pesan') ?>">Data Pesan</a> | 
<a href="<?php echo site_url('tb_pelanggan_tagihan') ?>">Data Invoice</a> |
<a href="<?php echo site_url('tb_tagihan_pesan') ?>">Data Pemberitahuan</a> |
<a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
<hr>

<?php echo $judul; echo '<small>'; echo' >> '; echo $sub; echo '</small>'; ?>

<p></p>

<!--isi content-->
<?php echo $contents ?>
<!--end isi content-->

</body>
</html>