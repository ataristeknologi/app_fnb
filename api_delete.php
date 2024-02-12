<?php 
    include('koneksi.php');    
    $id = $_POST['id'];
    mysqli_query($koneksi,"delete from tbl_menu where id_menu='$id'");
 
?>