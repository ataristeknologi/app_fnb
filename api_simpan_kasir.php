<?php
    include ('koneksi.php');
    $nama_kasir=$_POST['nama_kasir'];
    $alamat=$_POST['alamat'];
    $no_handphone=$_POST['no_handphone'];

    mysqli_query($koneksi,"insert into tbl_kasir values('','$nama_kasir','$alamat','$no_handphone')");
?>