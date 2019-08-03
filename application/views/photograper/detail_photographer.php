<?php
$user=$detail_data['username'];
$facebook=$detail_data['facebook'];
$twitter=$detail_data['twitter'];
$instagram=$detail_data['instagram'];

foreach ($list_komen as $rowkomen){
    $ratarata=round($rowkomen['rata']);
  // echo round($rowkomen['rata']);
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
                style="width:50%"class="rounded mx-auto d-block"> <br>
                	<p class="font-20 text-center"><?php echo $detail_data['nama_lengkap'] ?><br><?php echo $rating ?><br><?php echo $ratarata."/5"; ?></p>
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item text-black"><i class="fa fa-briefcase" aria-hidden="true"></i>
                      <a href="#"  class="" data-toggle="modal" data-target="#riwayat"></i> Riwayat Pekerjaan</a></li>
                    <li class="list-group-item text-black"><i class="fa fa-address-card-o" aria-hidden="true"></i> Alamat:	<?php echo $detail_data['alamat_lengkap'] ?></li>
                    <li class="list-group-item text-black"><i class="fa fa-phone-square" aria-hidden="true"></i>
                      No Hp <a href=" https://api.whatsapp.com/send?phone=<?php echo $detail_data['no_hp'] ?>"><?php echo $detail_data['no_hp'] ?></a></li>
                      <li class="list-group-item text-black">
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
                      <li class="list-group-item text-black">
                        <div class="col-md-12 scroll-comament border_1px background_grey  no-padding">
                          <div class="col-sm-12 no-padding">
                            <div class="card">
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
                                          <div class="col-md-12 text-left">
                                            <?php echo $rowkomen['komentar']; ?>
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
                      </li>

                  </ul>

      </div>
      <div class="col-sm-8">
        <div class="row">
          <div class="col-md-12 border_1px scroll-comament-1000 border_1px">
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
  });
  $('#example').DataTable({
     responsive: true
  });
});

</script>
