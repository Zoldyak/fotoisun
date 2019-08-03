<?php
$user=$detail_data['fotographer'];
$facebook=$detail_data['facebook'];
$twitter=$detail_data['twitter'];
$instagram=$detail_data['instagram'];
$rating = '
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>
<i class="fa fa-star-o" aria-hidden="true"></i>';
foreach ($list_komen as $rowkomen){
  $ratarata=round($rowkomen['rata']);
  // echo $rowkomen['rata'];
  if (round($rowkomen['rata'])==1) {
    $rating = '
  <i class="fa fa-star text-yellow" aria-hidden="true"></i>
  <i class="fa fa-star-o" aria-hidden="true"></i>
  <i class="fa fa-star-o" aria-hidden="true"></i>
  <i class="fa fa-star-o" aria-hidden="true"></i>
  <i class="fa fa-star-o" aria-hidden="true"></i>';
  }
  elseif (round($rowkomen['rata'])==2) {
    $rating = '
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>';
  }
  elseif (round($rowkomen['rata'])==3) {
    $rating = '
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>';
  }
  elseif (round($rowkomen['rata'])==4) {
    $rating = '
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>';
  }
  elseif (round($rowkomen['rata'])==5) {
    $rating = '
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>
    <i class="fa fa-star text-yellow" aria-hidden="true"></i>';
  }


}
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
      <div class="col-md-4 border-right no-border-left no-border-top">
        <p class="text-left"> <strong>Profil</strong> </p>
        <img src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $detail_data['foto'] ?>" alt=""
          style="width:50%" class="rounded mx-auto d-block">
          <p class="text-center"><?php echo $detail_data['nama_lengkap'] ?><br><?php echo $rating ."<br>".$ratarata."/5"; ?></p>
          <ul class="list-group list-group-flush ">
            <li class="list-group-item text-black"><i class="fa fa-briefcase" aria-hidden="true"></i>
              <a href="#"  class="" data-toggle="modal" data-target="#riwayat"></i> Riwayat Pekerjaan</a></li>
            <li class="list-group-item text-black"><i class="fa fa-address-card-o" aria-hidden="true"></i> Alamat:	<?php echo $detail_data['alamat_lengkap'] ?></li>
            <li class="list-group-item text-black"><i class="fa fa-phone-square" aria-hidden="true"></i>
              No Hp <a href=" https://api.whatsapp.com/send?phone=<?php echo $detail_data['no_hp'] ?>"><?php echo $detail_data['no_hp'] ?></a></li>
            <li class="list-group-item text-black">
              <?php

              if ($this->session->userdata('User') != null) {?>
                <!-- <a href="<?php echo base_url('CF_photographer/detail/'.$detail_data['username'])?>" class="btn btn-primary text-right">Detail</a>
                <a href="<?php echo base_url('CF_gallery/'.$detail_data['username'])?>" class="btn btn-primary btn-sm">Gallery</a> -->
                <a href="<?php echo base_url('CF_pesan/form_add/'.$detail_data['fotographer'])?>"  class="btn btn-light"><i class="fa fa-plus"></i>Booking</a>
                <a href="#"  class="btn btn-light btn-sm" data-toggle="modal" data-target="#pesan"><i class="fa fa-envelope" aria-hidden="true"></i></a>
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
              <a href="#"  class="" id="notif_login"><i class="fa fa-plus"></i> Booking</a>

            <?php  } ?>
            </li>
            <li>
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
                      <div class="float-md-right"><?php echo "Rp ".nominal( $row_paket['harga']) ?>

                      </div>
                      <!-- <p class="text-Left"><?php echo $row_paket['nama_paket'] ?></p>
                      <p class="text-right"><?php echo $row_paket['harga'] ?></p> -->
                    </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="list-group-item text-black ">
              <div class="col-sm-12">
              <div class="col-md-12 scroll-comament no-border-all background_grey  no-padding">
                <div class="col-sm-12 no-padding">
                  <div class="card no-border-all">
                    <div class="card-body text-center">
                      <div class="row">
                        <?php $bintang='';
                        if ($jumlah_komen != null) { foreach ($list_komen2 as $rowkomen):

                            // code...

                          if ($rowkomen['rating']==1) {
                            $bintang = '
                          <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>';
                          }
                          elseif ($rowkomen['rating']==2) {
                            $bintang = '
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                          }
                          elseif ($rowkomen['rating']==3) {
                            $bintang = '
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                          }
                          elseif ($rowkomen['rating']==4) {
                            $bintang = '
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                          }
                          elseif ($rowkomen['rating']==5) {
                            $bintang = '
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>
                            <i class="fa fa-star text-yellow" aria-hidden="true"></i>';
                          }

                          ?>


                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                              <img class="rounded-circle" src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $rowkomen['foto'] ?>" alt=""
                                style="width:90px">
                              <span><?php echo $rowkomen['custumor']; ?></span>

                            </div>
                            <div class="col-md-8">
                              <div class="row">
                                <div class="col-md-12 text-left">
                                <?php echo $bintang; ?>
                                <p><?php echo $rowkomen['tanggal_komen']; ?></p>
                                </div>
                                <?php if ( $rowkomen['foto_komentar']==null) {?>
                                  <div class="col-md-12 text-left">
                                    <?php echo $rowkomen['komentar']; ?>
                                  </div>
                              <?php  } else{?>
                                <div class="col-md-12 text-left">
                                  <?php echo $rowkomen['komentar']; ?> <br>
                                  <img class="rounded" src="<?php echo $this->config->item('frontend') ?>/img/komentar/<?php echo $rowkomen['foto_komentar'] ?>" alt=""
                                    style="width:90px">
                                </div>
                            <?php  }?>

                              </div>

                            </div>
                          </div>
                          <hr>
                        </div>
                      <?php endforeach; } else {?>
                        <div class="col-md-12">
                          Tidak Ada Komentar
                          <hr>
                        </div>
                      <?php } ?>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- <h5>Testimoni</h5> -->
              </div>
              <?php if (!empty($this->session->userdata('User'))): ?>


              <div class="col-sm-1-12">
                <form class="" action="<?php echo base_url('CF_photographer/komentar')?>" method="post"  enctype="multipart/form-data">
                  <input type="hidden" name="photographer" value="<?php echo $this->uri->segment(3); ?>">
                  <div class="form-group">
                    <label for=""></label>
                    <textarea name="komen" rows="2" cols="80" class="form-control" placeholder="Komentar"></textarea>
                  </div>
                  <div class="form-group">
                    <label for=""></label>
                      <input type="file" class="form-control" placeholder="" name="foto">
                  </div>
                  <div class="form-group">
                    <label for=""></label>
                    <fieldset class="rating">
                <!-- <legend>Please rate:</legend> -->
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="fa fa-star size_rating" title="Rocks!"></label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" class="fa fa-star size_rating" title="Pretty good"></label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" class="fa fa-star size_rating" title="Meh"></label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" class="fa fa-star size_rating" title="Kinda bad"></label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" class="fa fa-star size_rating" title="Sucks big time"></label>
                  </fieldset>&nbsp&nbsp&nbsp&nbsp&nbsp
                  <button class="btn btn-primary" type="submit"  name="button"> Kirim</button>

                  </div>

                </form>
              </div>
                <?php endif; ?>
              </div>

            </li>
          </ul>
      </div>
      <div class="col-sm-8">
        <div class="row">
					<div class="col-md-12 border_1px scroll-comament-1000  border_1px">
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

    <div class="modal fade" id="riwayat" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="">Riwayat</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Riwayat</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=0;
                      foreach ($list_riwayat as $row_riwayat):
                        $no++?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row_riwayat['nama_pekerjaan']; ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
	</div>
<script>
$(document).ready(function(){
  $('#notif_login').on('click',function(){
     alert("Anda Harus login Terlebih Dahulu");
  })
  $('#example').DataTable({
     responsive: true
  });;
});

</script>
