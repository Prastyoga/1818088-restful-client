<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('Assets/css/materialize.min.css') ?>" media="screen,projection" />
    <title>RESTFUL CLIENT PERPUSTAKAAN</title>
</head>

<body>
<div class="navbar-fixed ">
    <nav class="#9c27b0 blue">
        <div class="nav-wrapper container">
        <a href="http://[::1]/Client-perpus/index.php/buku" class="brand-logo center">PERPUSTAKAAN YPPI TUALANG</a>
        </div>
    </nav>
</div>
    <div class="container">
<?php echo form_open_multipart('buku/create');?>
<tr height="46">
        <td><font color="orange" size="5">Form Tambah Data Buku</font></td>
</tr>
<table>
    <tr><td width="20%">ID BUKU</td><td><?php echo form_input('id_buku');?></td></tr>
    <tr><td width="20%">JUDUL BUKU</td><td><?php echo form_input('judul_buku');?></td></tr>   
    <tr><td width="20%">PENULIS BUKU</td><td><?php echo form_input('penulis_buku');?></td></tr>   
    <tr><td width="20%">PENERBIT BUKU</td><td><?php echo form_input('penerbit_buku');?></td></tr>   
    <tr><td width="20%">TAHUN TERBIT</td><td><?php echo form_input('thterbit_buku');?></td></tr>         
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
    </td></tr>
</table>
<?php
echo form_close();
?>

</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
    
</body>

</html>