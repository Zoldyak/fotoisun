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
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Daftar Booking</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>photograper</th>
                        <th>Nama Paet</th>
                        <th>Harga</th>
                        <th>Tanggal Booking</th>
                        <th>Tipe</th>
                        <th>Lokasi</th>
                        <th>Persetujuan</th>
                        <th>Pembayaran</th>
                        
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($daftar_list as $row_daftar): ?>


                    <tr>
                      <td><?php echo $row_daftar['photograper']?></td>
                      <td><?php echo $row_daftar['nama_paket']?></td>
                      <td><?php echo $row_daftar['harga']?></td>
                      <td><?php echo $row_daftar['tanggal_booking']?></td>
                      <td><?php echo $row_daftar['tipe_foto']?></td>
                      <td><?php echo $row_daftar['lokasi_foto']?></td>
                      <td><?php echo $row_daftar['persetujuan']?></td>
                      <?php if ($row_daftar['jenis_pembayaran']=="Transfer"){
                          				if ($row_daftar['persetujuan'] =="Menunggu Persetujuan Photographer") {?>
                             					<td><a href="#" class="btn btn-warning" id="pemberitahuan"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>

                      						<?php   }
																	elseif ($row_daftar['persetujuan'] =="Dibatalkan") {?>
												 						<td><a href="#" class="btn btn-danger" id="pembatalan"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
																	<?php	}
                      						else { ?>
                        						<td><a href="<?php echo base_url('CF_dashbord/transaksi/'.$row_daftar['jenis_pembayaran'].'/'.$row_daftar['id_booking'])?>" class="btn btn-success"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    								<?php  }
                  } else{ ?>
														<td><a href="#" class="btn btn-danger"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    <?php  } ?>


                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
      </div>
    </div>
  </div>

</section>
<script>
$(document).ready(function() {
  $('#example').DataTable({
     responsive: true
  });
  $('#pemberitahuan').on('click',function(){
     alert("Menunggu persetujuan");
  });

} );
</script>
