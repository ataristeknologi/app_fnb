<?php 
    include('koneksi.php');    
    $id = $_POST['id'];
    mysqli_query($koneksi,"delete from tbl_kasir where id_kasir='$id'");
 
?>