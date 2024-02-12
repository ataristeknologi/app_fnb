<form id="form_input">
    <label>Nama Menu</label>
    <input type="text" name="nama_menu" value=""/>
    <label>Harga Jual</label>
    <input type="text" name="harga_jual" value=""/>
    <label>Foto</label>
    <input type="text" name="foto" value=""/>
    <label>Kategori</label>
    <select name="kategori">
        <option value="makanan">Makanan</option>
        <option value="minuman">Minuman</option>
    </select>
    <button type="button" id="tombol_simpan">Submit</button>
    <div id="tampil_data"></div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
     <script>
         function tampil_data(){
            $.ajax({
                url:'api_select.php',
                type:'get',
                success: function(data){
                    $('#tampil_data').html(data);
                }
            })
        }
$("#tombol_simpan").click(function () {
                            

           $.ajax({
             type: 'POST',
                     url: "api_simpan.php",
                        data: $('#form_input').serialize(),
                        success: function () {
                            //setelah simpan data, update data terbaru
                            tampil_data()
                        }
            });
         //kosongkan form nama dan jurusan
        
         return false;

    });

</script>