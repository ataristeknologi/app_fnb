<?php
    include "header.php";
?>
<body class="dark-edition">
  <div class="wrapper ">


      <!-- Navbar -->
      <?php
            include "menu.php";
        ?>
      <!-- End Navbar -->
      <div class="row">
                  <div class="col-md-6 ml-auto mr-auto text-center">
                    <h4 class="card-title">
                      Notifications Places
                      <p class="category">Click to view notifications</p>
                    </h4>
                  </div>
                </div>
               
      <div class="content" style="margin-top:20px;">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            <table class="table table-responsive">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td class="text-primary">
                            $36,738
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td class="text-primary">
                            $23,789
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td class="text-primary">
                            $56,142
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td class="text-primary">
                            $38,735
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td class="text-primary">
                            $63,542
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td class="text-primary">
                            $78,615
                          </td>
                        </tr>
                      </tbody>
                    </table>
            </div>
            <div class="col-md-9">
            <div class="row" style="margin-bottom20px;">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block">Top Left</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" >Top Center</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-primary btn-block" >Top Right</button>
                      </div>
                    </div>
                  </div>
                </div>
            <div class="row"  id="tampil_data">

         
            </div>
            </div>
        </div>
      
        </div>
      </div>
      <?php
            include "footer.php";
        ?>
        
        <script>
         $(document).ready(function(){
            tampil_data();
        });
         function tampil_data(){
            $.ajax({
                url:'api_select_menu.php',
                type:'get',
                success: function(data){
                  console.log(data);
                    $('#tampil_data').html(data);
                }
            })
        }
        </script>