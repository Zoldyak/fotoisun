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
                        <th>Penyewa</th>
												<th>no hp</th>
                        <th>Nama Paet</th>
                        <th>Harga</th>
                        <th>Tanggal Booking</th>
                        <th>Tipe</th>
                        <th>Lokasi</th>
                        <th>Persetujuan</th>
                        <th>Pembayaran</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($daftar_list as $row_daftar): ?>


                    <tr>
                      <td><?php echo $row_daftar['nama_lengkap']?></td>
											<td><?php echo $row_daftar['no_hp']?></td>
                      <td><?php echo $row_daftar['nama_paket']?></td>
                      <td><?php echo $row_daftar['harga']?></td>
                      <td><?php echo $row_daftar['tanggal_booking']?></td>
                      <td><?php echo $row_daftar['tipe_foto']?></td>
                      <td><?php echo $row_daftar['lokasi_foto']?></td>
                      <td>
												<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $row_daftar['id_booking']?>">
												  <?php echo $row_daftar['persetujuan']?>
												</button>

											</td>
                      <?php if ($row_daftar['jenis_pembayaran']=="Transfer"){
                          				if ($row_daftar['persetujuan'] =="Menunggu Persetujuan Photographer") {?>
                             					<td><a href="#" class="btn btn-warning btn-sm" id="pemberitahuan"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>

                      						<?php   }
																	elseif ($row_daftar['persetujuan'] =="Dibatalkan") {?>
												 						<td><a href="#" class="btn btn-danger btn-sm" id="pembatalan"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
																	<?php	}
                      						else { ?>
                        						<td><a href="<?php echo base_url('fotographer/CP_dashbord/transaksi/'.$row_daftar['jenis_pembayaran'].'/'.$row_daftar['id_booking'])?>" class="btn btn-success"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    								<?php  }
                  } else{ ?>
														<td><a href="#" class="btn btn-danger"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    <?php  } ?>

                      <td><?php echo $row_daftar['keterangan']?></td>
                    </tr>
										<div class="modal fade" id="exampleModal<?php echo $row_daftar['id_booking']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
															<form class="" action="<?php echo base_url('fotographer/CP_dashbord/persetujuan')?>" method="post">
	 	                           <div class="form-group row">
	 	                            <label for="inputEmail3" class="col-sm-3 col-form-label">Persetujuan</label>
	 	                            <div class="col-sm-9">
	 	                              <select class="form-control" name="persetujuan">
	 	                                <option value="Disetujui">Disetujui</option>
	 	                                <option value="Dibatalkan">Dibatalkan</option>
	 	                              </select>
	 	                              <input type="hidden" name="id_booking" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $row_daftar['id_booking']?>">
	 	                            </div>
	 	                          </div>
	 	                          <div class="form-group row">
	 	                            <label for="inputEmail3" class="col-sm-3 control-label">keterangan</label>
	 	                            <div class="col-sm-9">
	 	                               <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	 	                            </div>
	 	                          </div>

	 	                         </div>
	 	                         <div class="modal-footer">
	 	                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	 	                           <button type="submit" class="btn btn-primary">Save changes</button>
	 	                         </div>
	 	                         </form>
										      </div>
										    </div>
										  </div>
										</div>
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
