<?php
    include "header.php";
?>
<body class="dark-edition">
  <div class="wrapper ">
  <?php
            include "sidebar.php";
        ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
            include "menu.php";
        ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">LAPORAN</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form>
             
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Kasir</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">No Handphone</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                 
                   
                    <button type="button" onclick="md.showNotification('top','right')" class="btn btn-primary pull-right">Simpan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
           
              <div class="card card-profile">
                <div class="card-avatar">
                 <br>
                </div>
                <div class="card-body">
                <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Kasir
                        </th>
                        <th>
                          No Handphone
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
                          
                        </tr>
                       
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
      <?php
            include "footer.php";
        ?>