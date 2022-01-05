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
<?php echo form_open('buku/edit');?>
<?php echo form_hidden('id_buku',$databuku->id_buku);?>

<!-- <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Edit Data Buku</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>ID Buku</td>
            <td><input type="text" name="id_buku" size="35" maxlength="6" /></td>
        </tr>
</table> -->
<tr height="46">
        <td><font color="orange" size="5">Form Edit Data Buku</font></td>
</tr>
<table>
    <tr><td width="20%">ID Buku</td><td><?php echo form_input('',$databuku->id_buku,"disabled");?></td></tr>
    <tr><td width="20%">Judul Buku</td><td><?php echo form_input('judul_buku',$databuku->judul_buku);?></td></tr>
    <tr><td width="20%">Nama Penulis Buku</td><td><?php echo form_input('penulis_buku',$databuku->penulis_buku);?></td></tr>
    <tr><td width="20%">Nama Penerbit Buku</td><td><?php echo form_input('penerbit_buku',$databuku->penerbit_buku);?></td></tr>
    <tr><td width="20%">Tahun Terbit Buku</td><td><?php echo form_input('thterbit_buku',$databuku->thterbit_buku);?></td></tr>
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