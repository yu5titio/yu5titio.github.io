 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9">
					<div class="row" style="margin-left:1pc;margin-right:1pc;">
				  <h1><b>Selamat Datang, Pelanggan :)</b></h1>
				  <h3>Ada yang bisa kami bantu hari ini?</h3>
				  <hr>
				  
				  <?php 
						$sql=" select * from barang where stok <= 3";
						$row = $config -> prepare($sql);
						$row -> execute();
						$r = $row -> rowCount();
						if($r > 0){
					?>	
					<?php
							echo "
							<div class='alert alert-warning'>
								<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span>
								<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
							</div>
							";	
						}
					?>
				  <?php $hasil_barang = $lihat -> barang_row();?>
				  <?php $hasil_kategori = $lihat -> kategori_row();?>
				  <?php $stok = $lihat -> barang_stok_row();?>
				  <?php $jual = $lihat -> jual_row();?>
				  
                    <div class="row">
                    <!--STATUS PANELS -->
						<div class="col-md-3">
                      		<div class="panel panel-primary">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Data Pembelian</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1><?php echo number_format($jual['stok']);?></h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;"><a href='index.php?page=jual'>Tabel Pembelian <i class='fa fa-angle-double-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
					<!-- STATUS PANELS -->
						<div class="col-md-3">
                      		<div class="panel panel-info">
                      			<div class="panel-heading">
						  			<h5><i class="fa fa-desktop"></i> Data Customer</h5>
                      			</div>
                      			<div class="panel-body">
									<center><h1>Customer</h1></center>
								</div>
								<div class="panel-footer">
									<h4 style="font-size:15px;font-weight:700;font-weight:700;"><a href='index.php?page=user'>Edit Profil Customer<i class='fa fa-angle-double-right'></i></a></h4>
								</div>
	                      	</div><!--/grey-panel -->
                      	</div><!-- /col-md-3-->
					</div>
					<h3><b>Tentang Sistem Informasi Web ini</b></h3>
					<div class="row justify-content-center fs-5">
						<div class="col-md-8">
							<p style="font-size: 16px;">
							SIWEB Life Balanced (Sistem Informasi Web "Life Balanced") adalah sebuah platform digital yang dirancang 
							untuk memfasilitasi transaksi pembelian dan penjualan obat-obat kesehatan. Sistem ini 
							bertujuan untuk menyediakan solusi yang efisien, aman, dan nyaman 
							bagi konsumen dan penjual dalam mengelola kebutuhan kesehatan mereka.
							</p>
							<p style="font-size: 16px;">
							SIWEB Life Balanced dirancang untuk menjadi solusi komprehensif dalam 
							transaksi obat-obat kesehatan, dengan fokus pada kemudahan, efisiensi, dan keamanan 
							bagi semua pengguna. Dengan fitur-fitur yang lengkap dan user-friendly, sistem ini diharapkan 
							dapat meningkatkan pengalaman pengguna dalam mengelola kebutuhan kesehatan mereka secara online.
							</p>
						</div>
					</div>
					<h3><b>Apa Keuntungan Menggunakan SIWEB Life Balanced?</b></h3>
					<div class="row justify-content-center fs-5">
						<div class="col-md-8">
							<p style="font-size: 16px;">1. Kemudahan dan Kenyamanan</p>
							<p style="font-size: 16px;">2. Keamanan dan Privasi</p>
							<p style="font-size: 16px;">3. Manajemen yang lebih baik</p>
							</p>
					</div>
					</div>
				</div>
           </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
			<div class="col-lg-3 ds">
				<div id="calendar" class="mb">
					<div class="panel green-panel no-margin">
						<div class="panel-body">
							<div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
								<div class="arrow"></div>
								<h3 class="popover-title" style="disadding: none;"></h3>
								<div id="date-popover-content" class="popover-content"></div>
							</div>
							<div id="my-calendar"></div>
						</div>
					</div>
				</div><!-- / calendar -->
			  </div><!-- /col-lg-3 -->
		  </div><! --/row -->
		 <div class="clearfix" style="padding-top:18%;"></div>
	  </section>
  </section>