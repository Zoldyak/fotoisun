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
							<a href="#"  data-toggle="modal" data-target="#editprofil"><i class="fa fa-pencil"></i>edit</a>
						<p class="font-20 "><?php echo $detail_data['nama_lengkap'] ?></p>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<p class="font-18">photographer profersional</p>
						<p class="font-14"><?php echo $detail_data['alamat_lengkap'] ?> &nbsp
							<i class="fa fa-phone"></i><?php echo $detail_data['no_hp'] ?>
						</p>
					</div>
				</div>

			</div>
			<div class="col-md-4">
				<ul class="list-group">
					<li class="list-group-item list-group-item-secondary font-wight700">Sosial media</li>
					<li class="list-group-item list-group-item-primary"><i class="fa fa-facebook"></i> Dhesyani</li>
					<li class="list-group-item list-group-item-danger"><i class="fa fa-twitter"></i> Dhesyani</li>
					<li class="list-group-item list-group-item-success"><i class="fa fa-instagram"></i> Dhesyani</li>
				</ul>
			</div>
			<p> <br> </p>
			<div class="col-md-12 ">

				<div class="row">
					<div class="col-md-7 border_1px scroll-comament border_1px">
						<span class="font-20 font-wight700">Gallery</span>
						<div class="row">
							<div class="col-md-4">
								<a data-toggle="modal" data-target="#myModal">
									<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/gunung1.jpeg" alt="">
								</a>
							</div>
							<div class="col-md-4">
								<a data-toggle="modal" data-target="#myModal">
									<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/pantai1.jpeg" alt="">
								</a>
							</div>
							<div class="col-md-4">
								<a data-toggle="modal" data-target="#myModal">
									<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/kota1.jpeg" alt="">
								</a>
							</div>
							<!-- The Modal -->
							<div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Modal Heading</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<img src="<?php echo $this->config->item('frontend') ?>/img/gallery/gunung1.jpeg" alt="">
										</div>

										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
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
					</div>
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
 		             <h2 class="text-green">Tambah Fotografer</h2>
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
</section>
