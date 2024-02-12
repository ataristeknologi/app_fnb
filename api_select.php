<table class='table table-striped'>
    <thead>
        <tr>
            <th>Nama Menu</th>
            <th>Harga Jual</th>
            <th>Foto</th>
            <th>Kategori</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $no=1;
            $data=mysqli_query($koneksi, "SELECT * FROM tbl_menu");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_menu']; ?></td>
                    <td><?php echo $d['harga_jual']; ?></td>
                    <td><?php echo $d['foto']; ?></td>
                    <td><?php echo $d['kategori']; ?></td>
                    <td>
                    <button id="<?php echo $d['id_menu']; ?>" class=" hapus_data">  Hapus </button>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>

</table>