<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="border-bottom: 0px;">Selamat datang, <span class="nama"><b><?php echo ucwords($this->session->nama);?></b></span></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">

          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">Peta Progress</div>
			  <div class="panel-body">
			  
				<div class="col-lg-6">
                                    <!-- col-lg-6 z-depth-2 -->
                                
                                <div>
                               <script src="<?php echo base_url() ?>resources/js/jquery-3.3.1.min.js"> </script>
                               <script>
                                $(document).ready(function(){
                                    $('#formKabkot').change(function(){
                                        var kabkot_id = $(this).val();
                                        
                                        $.ajax({
                                            url: "Server_Model.php",
                                            method: "POST", <!-- type -->
                                            data: {kabkot_id:kabkot_id}, <!-- 'kako_id='+kabkot_id, --> <!-- response -->
                                            success: function(data) { 
                                                $('#formKecamatan').html(); <!-- data -->
                                                }
                                        });
                                    });
                                });
                                </script>
                                <p>
                                Cari Kabupaten / Kota
                               
                                <!-- <form action ="" method="POST"> -->
                                <select name="formKabkot" id="formKabkot">
                                    <?php foreach($all_kabkot as $semua_kabkot): ?>
                                    <option value="<?php echo $semua_kabkot->id_kabkot; ?>"><?php echo $semua_kabkot->nama_kabkot; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                                </div>
                                  
				<!-- <div id="map"></div> -->
                                
                               <!--
                                $idembeddddd = $_POST['formKabkot'];
                                $idembedddd = $this->Pkl->get_embed_kabkot($idembeddddd);
                               php echo $idembeddddd  -->
                                 
                                 
                                <div><iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126261.70642815421!2d115.15288390734776!3d-8.53057706979312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23c589a2ccd79%3A0x4030bfbca7d2bf0!2sAbiansemal%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543951111902" width="460" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                                

				
				  <table class="table table-bordered">
					<thead>
					  <tr>
						<th>Kabupaten / Kota</th>
                                                <th>Unit KSA Tercacah</th>
                                                <th>Progress KSA</th>
                                                <th>Unit Ubinan Tercacah</th>
                                                <th>Progress Ubinan</th>
						
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Kab. Rejang Lebong</td>
						<td>1234</td>
						<td>57%</td>
                                                <td>1234</td>
						<td>57%</td>
					  </tr>
					</tbody>
				  </table>
                                
                                <table class="table table-bordered">
					<thead>
					  <tr>
						
						<th>Unit Terlisting</th>
						<th>Progress Cacah</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						
						<td>1234</td>
						<td>57%</td>
					  </tr>
					</tbody>
				  </table>
                                
				  <br>
				</div>
				<div class="col-lg-6">
                                <!--   
				<center><h3><span class="namakabterpilih">BENGKULU</span></h3></center>
                                -->
                                
                                <div>
                                <p>
                                Cari Kecamatan
                                
                                
                                <select name="formKecamatan" id="formKecamatan" >
                                    <?php foreach($all_kecamatan as $semua_kecamatan): ?>
                                    <option value="<?php echo $semua_kecamatan->id_kecamatan; ?>"><?php echo $semua_kecamatan->nama_kecamatan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                                </p>
                                </div>
				<!-- <div id="map2"></div> -->
                                <div><iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126261.70642815421!2d115.15288390734776!3d-8.53057706979312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23c589a2ccd79%3A0x4030bfbca7d2bf0!2sAbiansemal%2C+Badung+Regency%2C+Bali!5e0!3m2!1sen!2sid!4v1543951111902" width="460" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				<table class="table table-bordered">
					<thead>
					  <tr>
						<th>Kecamatan</th>
						<th>Unit KSA Tercacah</th>
                                                <th>Progress KSA</th>
                                                <th>Unit Ubinan Tercacah</th>
                                                <th>Progress Ubinan</th>
					
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Kab. Rejang Lebong</td>
						<td>1234</td>
						<td>57%</td>
                                                <td>1234</td>
						<td>57%</td>
					  </tr>
					</tbody>
				  </table>
                                <table class="table table-bordered">
					<thead>
					  <tr>
						
						<th>Unit Terlisting</th>
						<th>Progress Cacah</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						
						<td>1234</td>
						<td>57%</td>
					  </tr>
					</tbody>
				  </table>
				<br>
				</div>
			  </div>	 
			</div>
          </div>

          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
				  <div class="row">
    					<div class="col-xs-9">
    						Progress Pencacahan Total
    					</div>
                                        <!--
    					<div class="col-xs-3">
    						<a class="pull-right" data-toggle="tooltip" data-placement="top" title="Lihat Detail" href="<?php echo base_url('pkl/progres_cacah')?>"><i class="fa fa-external-link" style="color: white"></i></a>
    					</div>
                                        -->
    				</div>
			  </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8" id="progress_bar"></div>
                  <div class="col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>
            <!--
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
				<div class="row">
  					<div class="col-xs-9">
  						Progress Listing
  					</div>
  					<div class="col-xs-3">
  						<a class="pull-right" data-toggle="tooltip" data-placement="top" title="Lihat Detail" href="<?php echo base_url('pkl/progres_listing')?>"><i class="fa fa-external-link" style="color: white"></i></a>
  					</div>
  				</div>
			</div> 
            
              
              <div class="panel-body">
                <div class="col-lg-12">
                  <table class="table table-striped table-bordered table-hover" id="tabel_listing">
                      <thead>
                          <tr>
                            <th>Kab./Kota</th>
                            <th>Terlisting</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
					  <tfoot>
						<tr>
							<th colspan="1" style="text-align:right">Total:</th>
							<th></th>
			            </tr>
			        </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
    -->

		  <div class="col-lg-4">
			<div class="panel panel-default">
              <div class="panel-heading">Sisa Waktu Pencacahan</div>
              <!-- /.panel-heading -->
              <div class="panel-body">
			 
	              <span id="countDown"></span>
	                  <ul id="example">
	                    <li><span class="days">00</span><p class="days_text" style="color: #1DE9B6">Hari</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="hours">00</span><p class="hours_text" style="color: #1DE9B6">Jam</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="minutes">00</span><p class="minutes_text" style="color: #1DE9B6">Menit</p></li>
	                    <li class="seperator">:</li>
	                    <li><span class="seconds">00</span><p class="seconds_text" style="color: #1DE9B6">Detik</p></li>
	                  </ul>
	              
				</div>
            </div>
		  </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->  
</div>
<!-- /#page-wrapper -->

<!-- jQuery 
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
-->
<!-- Bootstrap Typeahead -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function){
        $('#all_kabkot').('change', )
    }
    </script>
 