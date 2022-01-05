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
        <a href="buku" class="brand-logo center">PERPUSTAKAAN YPPI TUALANG</a>
        </div>
    </nav>
</div>

    <div class="container">
        
<font color="orange">
    
<?php echo $this->session->flashdata('hasil'); ?>
</font>

<table>
   <tr>
        <th>ID Buku</th>
        <th>Judul Buku</th>
        <th>Nama Penulis Buku</th>
        <th>Nama Penerbit Buku</th>
        <th>Tahun Terbit Buku</th>
    </tr>
    <?php
    foreach ($databuku as $char){
         echo "<tr>
               <td>$char->id_buku</td>
              <td>$char->judul_buku</td>
              <td>$char->penulis_buku</td>
              <td>$char->penerbit_buku</td>
              <td>$char->thterbit_buku</td>
              <td>".anchor('buku/edit/'.$char->id_buku,'Edit')."
                ".anchor('buku/delete/'.$char->id_buku,'Delete')."
                  </td>
              </tr>";
             
    }
    ?>
</table>
<br>
<div>
<a class="waves-effect waves-light btn col s6 offset-s6" href="buku/create">Tambahkan data</a>
</div>
<br>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
    
</body>

</html>