<html>
    <head></head>
    <body>
        <div id="tampil_data"></div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
     <script>
        $(document).ready(function(){
            tampil_data();
        });
        // fungsi tampil data
        function tampil_data(){
            $.ajax({
                url:'api_select.php',
                type:'get',
                success: function(data){
                    $('#tampil_data').html(data);
                }
            })
        }
    </script>
</html>