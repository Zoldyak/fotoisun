<?php
$user=$detail_data['username'];
$facebook=$detail_data['facebook'];
$twitter=$detail_data['twitter'];
$instagram=$detail_data['instagram'];
 ?>
<section class="breadcrumb-area bg-img bg-overlay jarallax"
	style="background-image: url(<?php echo $this->config->item('frontend') ?>/img/bg-img/slide1.jpeg);">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-12">
				<div class="breadcrumb-content text-center">
					<h2 class="page-title">Detail Photographer</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Detail Photographer</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-team-area">
	<br>
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-4 scroll-comament border_1px background_grey">
				<!-- <h5>Testimoni</h5> -->
				<div class="card">
					<div class="card-body text-center">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<i class="fa fa-user fa-3x"></i>
										<span>tia</span>
										<span>9/12/2018</span>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-12 text-left">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="col-md-12 text-left">
												Good
											</div>
										</div>

									</div>
								</div>
								<hr>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<i class="fa fa-user fa-3x"></i>
										<span>Bagus</span>
										<span>9/02/2019</span>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-12 text-left">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="col-md-12 text-left">
												Good
											</div>
										</div>

									</div>
								</div>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">

				<div class="card bg-light">
					<div class="card-body text-center">
						<p class="font-20 font-wight700">Profil</p>
						<img src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $detail_data['foto'] ?>" alt=""
							style="width:90px"><br>

						<p class="font-20 "><?php echo $detail_data['nama_lengkap'] ?></p>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<p class="font-18">photographer profersional</p>
						<p class="font-14"><?php echo $detail_data['alamat_lengkap'] ?> &nbsp
							<i class="fa fa-phone"></i><?php echo $detail_data['no_hp'] ?>
						</p>
            <?php

            if ($this->session->userdata('User') != null) {?>
              <!-- <a href="<?php echo base_url('CF_photographer/detail/'.$detail_data['username'])?>" class="btn btn-primary text-right">Detail</a>
              <a href="<?php echo base_url('CF_gallery/'.$detail_data['username'])?>" class="btn btn-primary btn-sm">Gallery</a> -->
              <a href="<?php echo base_url('CF_pesan/form_add/'.$detail_data['username'])?>"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Booking</a>
              <a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pesan"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <div class="modal fade" id="pesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Pesan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="" action="<?php echo base_url('Cf_inbox/add_pesan')?>" method="post">
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Photographer</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $this->uri->segment(3)  ?>">
                              <input type="hidden"  name="photographer" class="form-control-plaintext" id="staticEmail" value="<?php echo $this->uri->segment(3)  ?>">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Pesan</label>
                          <div class="col-sm-10">
                            <textarea rows="8" cols="80" class="form-control" name="pesan" placeholder="Pesan"></textarea>
                            <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
                          </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php  }
          else { ?>
            <a href="#"  class="btn btn-primary btn-sm" id="notif_login"><i class="fa fa-plus"></i>Booking</a>

          <?php  } ?>

					</div>
				</div>

			</div>
			<div class="col-md-4">
				<ul class="list-group">
					<li class="list-group-item list-group-item-secondary font-wight700">Sosial media  </li>
					<li class="list-group-item list-group-item-primary"><i class="fa fa-facebook"></i> <?php echo $facebook ?></li>
					<li class="list-group-item list-group-item-danger"><i class="fa fa-twitter"></i> <?php echo $twitter ?><li>
					<li class="list-group-item list-group-item-success"><i class="fa fa-instagram"></i> <?php echo $instagram ?></li>
          <li class="list-group-item list-group-item-secondary  font-wight700">Paket Foto

          </li>
          <?php foreach ($list_paket as $row_paket): ?>
              <li class="list-group-item list-group-item-default font-wight700 font-12 ">
                <div class="float-md-left"><?php echo $row_paket['nama_paket'] ?></div>
                <div class="float-md-right"><?php echo $row_paket['harga'] ?>

                </div>
                <!-- <p class="text-Left"><?php echo $row_paket['nama_paket'] ?></p>
                <p class="text-right"><?php echo $row_paket['harga'] ?></p> -->
              </li>
          <?php endforeach; ?>
        </ul>
			</div>
			<p> <br> </p>
			<div class="col-md-12 ">

				<div class="row">
					<div class="col-md-12 border_1px scroll-comament border_1px">
						<div class="text-left">
								<span class="font-20 font-wight700">Gallery</span>


						</div>

						<div class="row">
							<?php foreach ($list_galleri as $rowgaleri): ?>


							<div class="col-md-4">
								<a data-toggle="modal" data-target="#myModal<?php echo $rowgaleri['id_galleri'] ?>">
									<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/<?php echo $rowgaleri['fotogalleri'] ?>" alt="">
								</a>
							</div>
							<!-- The Modal -->
							<div class="modal" id="myModal<?php echo $rowgaleri['id_galleri'] ?>">
								<div class="modal-dialog">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Modal Heading</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/<?php echo $rowgaleri['fotogalleri'] ?>" alt="">
											<p>fotographer:<?php echo $rowgaleri['nama_lengkap'] ?></p>
											<p>Nama Lokasi:<?php echo $rowgaleri['lokasi'] ?></p>
											<p>kategori Lokasi:<?php echo $rowgaleri['kategori_lokasi'] ?></p>
											<p>Jenis foto:<?php echo $rowgaleri['jenis_foto'] ?></p>
										</div>

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>

									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<!-- <div class="col-md-5">
						<div class="card">
							<div class="card-header">Live chat</div>
							<div class="card-body">
								<p class="text-left">Jadwal hari kamis bisa?</p>
								<p class="text-right">Bisa</p>
							</div>
							<div class="card-footer">
								<form class="form-inline" action="#">

									<input type="email" class="form-control" id="email" placeholder="pesan">

									<button type="submit" class="btn btn-primary">kirim</button>
								</form>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="modal fade" id="editprofil">
	    <div class="modal-dialog modal-xl">
	      <div class="modal-content">

	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Modal Heading</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>

	        <!-- Modal body -->
	        <div class="modal-body">
						<?php
						$user=$detail_data['username'];
						$nama=$detail_data['nama_lengkap'];
						$hp=$detail_data['no_hp'];
						$alamat=$detail_data['alamat_lengkap'];
						 ?>
						<form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/edit')?> " method="post" enctype="multipart/form-data">
 		         <div class="box-header">
 		             <h2 class="text-green">Edit Fotografer</h2>
 		         </div>
 		         <div class="box-body">
 		           <div class="form-group">
 		             <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
 		             <div class="col-sm-10">
 		               <input type="hidden" name="user" value="<?php echo $user ?>">
 		               <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama ?>">
 		             </div>
 		           </div>

 		           <div class="form-group">
 		             <label for="inputEmail3" class="col-sm-2 control-label">No.HP</label>
 		             <div class="col-sm-10">
 		               <input type="Text" class="form-control" id="inputEmail3" placeholder="No.HP" name="HP" value="<?php echo $hp ?>">
 		             </div>
 		           </div>
 		           <div class="form-group">
 		             <label for="inputEmail3" class="col-sm-2 control-label">Alamat Lengkap</label>
 		             <div class="col-sm-10">
 		               <textarea name="Alamat" rows="8" cols="80" class="form-control" placeholder="Alamat Sesuai KTP" ><?php echo $alamat ?></textarea>
 		             </div>
 		           </div>
 		           <div class="form-group">
 		             <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
 		             <div class="col-sm-10">
 		               <input type="file" class="form-control-file" id="inputEmail3" placeholder="Foto" name="foto" >
 		             </div>
 		           </div>
 		           <div class="form-group center-block">
 		               <label for="inputEmail3" class="col-sm-2 control-label"></label>
 		             <div class="col-sm-2 ">
 		               <br>
 		             <input type="submit" name="" value="kirim" class="btn btn-info" id="myBtn">
 		             </div>
 		           </div>

 		         </div>
 		       </form>
	        </div>

	        <!-- Modal footer -->
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>

	      </div>
	    </div>
	  </div>


	</div>
<script>
$(document).ready(function(){
  $('#notif_login').on('click',function(){
     alert("Anda Harus login Terlebih Dahulu");
  });
});

</script>
