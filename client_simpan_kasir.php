<form id="form_input">
    <label>Nama Kasir</label>
    <input type="text" name="nama_kasir" value=""/>
    <label>Alamat</label>
    <input type="text" name="alamat" value=""/>
    <label>No Handphone</label>
    <input type="text" name="no_handphone" value=""/>
   
    <button type="button" id="tombol_simpan">Simpan</button>
    <div id="tampil_data"></div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
     <script>
         $(document).ready(function(){
            tampil_data();
        });
         function tampil_data(){
            $.ajax({
                url:'api_select_kasir.php',
                type:'get',
                success: function(data){
                    $('#tampil_data').html(data);
                }
            })
        }
         // hapus data
 $(document).on('click', '.hapus_data', function(){ 
 var id = $(this).attr('id');
 
 $.ajax({
 type: 'POST',
 url: "api_delete_kasir.php",
 data: {id:id}, 
 success: function(response) { 
     //setelah simpan data, update data terbaru
 tampil_data() 
 }
 });
 });

$("#tombol_simpan").click(function () {
                            

           $.ajax({
             type: 'POST',
                     url: "api_simpan_kasir.php",
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