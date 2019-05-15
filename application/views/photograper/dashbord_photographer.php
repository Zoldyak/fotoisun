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

              <a href="<?php echo base_url('fotographer/CP_dashbord/daftar_booking/'.$this->session->userdata('nama_lengkap'))?>"  class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Daftar Booking1</a>
					</div>
				</div>

			</div>
			<div class="col-md-4">
				<ul class="list-group">
					<li class="list-group-item list-group-item-secondary font-wight700">Sosial media  </li>
					<li class="list-group-item list-group-item-primary"><i class="fa fa-facebook"></i> <?php echo $facebook ?><a href="#"  class="text-right" data-toggle="modal" data-target="#editsosmedfacebook"><i class="fa fa-pencil"></i>edit</a></li>
					<li class="list-group-item list-group-item-danger"><i class="fa fa-twitter"></i> <?php echo $twitter ?><a href="#"  class="text-right" data-toggle="modal" data-target="#editsosmedtwitter"><i class="fa fa-pencil"></i>edit</a></li>
					<li class="list-group-item list-group-item-success"><i class="fa fa-instagram"></i> <?php echo $instagram ?><a href="#"  class="text-right" data-toggle="modal" data-target="#editsosmedinstagram"><i class="fa fa-pencil"></i>edit</a></li>
          <li class="list-group-item list-group-item-secondary  font-wight700">Paket Foto
            <div  class="float-md-right">
              <a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahpaket"><i class="fa fa-plus"></i></a>
            </div>

          </li>
          <?php foreach ($list_paket as $row_paket): ?>
              <li class="list-group-item list-group-item-default font-wight700 font-12 ">
                <div class="float-md-left"><?php echo $row_paket['nama_paket'] ?></div>
                <div class="float-md-right"><?php echo $row_paket['harga'] ?>
                  <a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editpaket<?php echo $row_paket['id_paket'] ?>"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url('fotographer/CP_dashbord/delete_paket/'.$row_paket['id_paket'])?>"  class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
                </div>

                <div class="modal fade" id="editpaket<?php echo $row_paket['id_paket'] ?>" tabindex="2" role="dialog" aria-labelledby="" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id=""></h4>
                      </div>
                      <div class="modal-body">
                        <form class="" action="<?php echo base_url('fotographer/CP_dashbord/edit_paket')?>" method="post">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Paket</label>
                            <div class="col-sm-10">
                              <input type="hidden" name="id_paket" value="<?php echo $row_paket['id_paket'] ?>">
                              <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Paket" name="nama_paket" value="<?php echo $row_paket['nama_paket'] ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-10">
                              <input type="hidden" name="user" value="<?php echo $user ?>">
                              <input type="Text" class="form-control" id="inputEmail3" placeholder="Harga Paket" name="harga" value="<?php echo $row_paket['harga'] ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" name="button" class="btn btn-info float-md-right">Tambah</button>

                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
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

								<button type="button" class="btn btn-info" name="button"  data-toggle="modal" data-target="#tambahfoto"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
		<!--start modal sosmed -->

		<!-- start facebook -->
		<div class="modal fade" id="editsosmedfacebook">
			<div class="modal-dialog modal-md">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Modal Heading</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">

						<form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/editsosmed')?> " method="post" enctype="multipart/form-data">
						 <div class="box-header">
								 <h2 class="text-green">Edit Facebook</h2>
						 </div>
						 <div class="box-body">
							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
								 <div class="col-sm-10">
									 <input type="hidden" name="user" value="<?php echo $user ?>">
									 <input type="hidden" name="tipe_sosmed" value="facebook">
									 <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama_sosmed" value="<?php echo $facebook ?>">
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
		<!-- close facebook -->

		<!-- start twitter -->
		<div class="modal fade" id="editsosmedtwitter">
			<div class="modal-dialog modal-md">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Modal Heading</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">

						<form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/editsosmed')?> " method="post" enctype="multipart/form-data">
						 <div class="box-header">
								 <h2 class="text-green">Edit Twitter</h2>
						 </div>
						 <div class="box-body">
							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>
								 <div class="col-sm-10">
									 <input type="hidden" name="user" value="<?php echo $user ?>">
									 <input type="hidden" name="tipe_sosmed" value="twitter">
									 <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama_sosmed" value="<?php echo $twitter ?>">
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
		<!-- close twitter -->

		<!-- start instagram -->
		<div class="modal fade" id="editsosmedinstagram">
			<div class="modal-dialog modal-md">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Modal Heading</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">

						<form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/editsosmed')?> " method="post" enctype="multipart/form-data">
						 <div class="box-header">
								 <h2 class="text-green">Edit Twitter</h2>
						 </div>
						 <div class="box-body">
							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">instagram</label>
								 <div class="col-sm-10">
									 <input type="hidden" name="user" value="<?php echo $user ?>">
									 <input type="hidden" name="tipe_sosmed" value="instagram">
									 <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama_sosmed" value="<?php echo $instagram ?>">
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
		<!-- close instagram -->
		<!-- close modal sosmed -->

		<!-- start modal tambah foto -->
		<div class="modal fade" id="tambahfoto">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Modal Heading</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/add_foto')?> " method="post" enctype="multipart/form-data">
						 <div class="box-header">
								 <h2 class="text-green">Tambah Foto</h2>
						 </div>
						 <div class="box-body">
							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Nama Lokasi</label>
								 <div class="col-sm-10">
									 <input type="hidden" name="user" value="<?php echo $user ?>">
									 <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lokasi" name="lokasi" value="">
								 </div>
							 </div>

							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Kategori Lokasi</label>
								 <div class="col-sm-10">
									 <select class="form-control" name="kategori_lokasi">
										 <option value="Gunung">Gunung</option>
										 <option value="Pantai">Pantai</option>
										 <option value="Kota">Kota</option>
									 </select>
								 </div>
							 </div>
							 <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Jenis Foto</label>
								 <div class="col-sm-10">
									 <select class="form-control" name="jenis_foto">
										 <option value="Pre-wedding">Pre-wedding</option>
										 <option value="Wedding">Wedding</option>
									 </select>
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
		<!-- close modal tambah foto -->
	</div>
  <div class="modal fade" id="tambahpaket" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="">Tambah</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form class="" action="<?php echo base_url('fotographer/CP_dashbord/add_paket')?>" method="post">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Paket</label>
              <div class="col-sm-10">
                <input type="hidden" name="user" value="<?php echo $user ?>">
                <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Paket" name="nama_paket" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
              <div class="col-sm-10">
                <input type="hidden" name="user" value="<?php echo $user ?>">
                <input type="Text" class="form-control" id="inputEmail3" placeholder="Harga Paket" name="harga" value="">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" name="button" class="btn btn-info float-md-right">Tambah</button>

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
</section>
