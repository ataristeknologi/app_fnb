<?php
    include ('koneksi.php');
    $nama_menu=$_POST['nama_menu'];
    $harga_jual=$_POST['harga_jual'];
    $foto=$_POST['foto'];
    $kategori=$_POST['kategori'];
    mysqli_query($koneksi,"insert into tbl_menu values('','$nama_menu','$harga_jual','$foto','$kategori')");
?>