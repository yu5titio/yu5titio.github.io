   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php   
     if(isset($_SESSION['admin']) && $_SESSION['admin']['id_member'] == 3) {
      $id = $_SESSION['admin']['id_member'];
      $hasil_profil = $lihat->member_edit($id);
      // Rest of the sidebar code that utilizes $hasil_profil
        } else {
      // Handle the case where the user is not a customer or session is not set
        echo '<script>window.location="login.php";</script>';
        }
    ?>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <br>
              	  <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="100" height="100"></a></p>
                  <br>
              	  <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>
              	  <h5 class="centered">( <?php echo $hasil_profil['NIK'];?> )</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span><b>Dashboard</b></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span><b>Laporan</b><span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=laporan">Laporan Penjualan</a></li>
                      </ul>
                      <ul class="sub">
                          <li><a  href="owner/module/grafik/index.php">Grafik Penjualan</a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cog"></i>
                          <span><b>Settings</b><span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                      </a>
                      <ul class="sub">
                          <li><a href="index.php?page=pengaturan">Profil Toko</a></li>
                          <li><a href="index.php?page=user">Profil Owner</a></li>
                          <li><a href="assets/tentangkami/index.php">Tentang Kami</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->