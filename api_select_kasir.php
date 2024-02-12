<table class='table table-hover'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama kasir</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $no=1;
            $data=mysqli_query($koneksi, "SELECT * FROM tbl_kasir");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_kasir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_handphone']; ?></td>
                    <td>
                    <button id="<?php echo $d['id_kasir']; ?>" class=" hapus_data">  Hapus </button>
                    </td>
                </tr>
                <?php
            }
        ?>
    </tbody>

</table>