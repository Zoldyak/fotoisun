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
              <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
              <?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');} ?>
      <h2 class="text-center">Daftar Transaksi</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-12 mb-3">


            <?php
            $total_sisa=$tagihan['harga']- $total_tagihan['jumlah_transaksi'];
            if ($this->uri->segment(3)=="Transfer") {
              // code...


            if ($total_sisa >0 ) {?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> add
              </button>
              <?php }
              else {?>
                <button type="button" class="btn btn-success">
                  Lunas
                </button>
            <?php   } }
            ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo base_url('CF_dashbord/add_transaksi')?>" method="post"  enctype="multipart/form-data">
					<div class="form-group row">
           <label for="inputEmail3" class="col-sm-3 col-form-label">Renkening Penerima</label>
           <div class="col-sm-9">
						 <div class="input-group-prepend">
		          <div class="input-group-text">BCA 072241684 a/n Albertus Yoga Wicaksono</div>
		        </div>

           </div>
         </div>
					<div class="form-group row">
           <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah transaksi</label>
           <div class="col-sm-9">
             <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Email">
             <input type="hidden" name="id_booking" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $this->uri->segment(4); ?>">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-3 control-label">Foto</label>
           <div class="col-sm-9">
             <input type="file" class="form-control-file" id="inputEmail3" placeholder="Foto" name="foto" >
           </div>
         </div>
  <button type="submit" class="btn btn-primary">Save changes</button>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>

    </div>
  </div>
</div>
          </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal Transfer</th>
                        <th>Bukti</th>
                        <th>status</th>

                        <th>jumlah_transfer</th>

                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($daftar_list as $row_daftar): ?>


                    <tr>
                      <td><?php echo $row_daftar['tanggal_transaksi']?></td>
                      <td><img src="<?php echo $this->config->item('frontend') ?>/img/transaksi/<?php echo $row_daftar['foto_transaksi']?>" ></td>
                      <td><?php echo $row_daftar['status']?></td>
											<td><?php echo $row_daftar['jumlah_transaksi']?></td>



                    </tr>
                    <?php endforeach; ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th  >Total</th>
                      <th><?php echo $tagihan['harga'] ?></th>

                    <th  ><?php echo $total_tagihan['jumlah_transaksi'] ?></th></th>
                    <?php
                      if ($total_sisa<=0) {?>
                        <th><button type="button" class="btn btn-success">
                          Lunas
                        </button></th>
                    <?php  } else{

                    ?>
                    <th><button type="button" class="btn btn-danger">
                      <?php
                      echo "Sisa:".$total_sisa ?>
                    </button>
                      </th><?php } ?>
                  </tr>

                </tfoot>
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
