 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <section class="content-header">
      <h1>
        Data Tables
        <small>User tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List user</h3>
              <div class="text-right">
                <a href="<?php echo base_url('admin/User/tambah')?>" class="btn btn-info">
                  Tambah
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                  <th>Keterangan</th>
                  <!-- <th>Pembayaran</th> -->

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
                        						<td><a href="<?php echo base_url('admin/Transaksi/list_transaksi/'.$row_daftar['jenis_pembayaran'].'/'.$row_daftar['id_booking'])?>" class="btn btn-success"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    								<?php  }
                  } else{ ?>
														<td><a href="#" class="btn btn-danger"> <?php echo $row_daftar['jenis_pembayaran']?></a></td>
                    <?php  } ?>

                      <td>
                        <?php if ($row_daftar['keterangan']=='ada transaksi baru') {?>
                          <a href="#" class="btn btn-danger">
                            <?php   echo $row_daftar['keterangan'] ?>
                          </a>
                      <?php  }
                        else{ ?>
                            <a href="#" class="btn btn-success"> <?php echo $row_daftar['keterangan'] ?> </a>
                      <?php  }
                        ?>
                      </td>
                      <!-- <td>
                        <?php if ($row_daftar['status_transaksi_terbaca_admin']==null) {
                          echo "tidak ada";
                        } elseif ($row_daftar['status_transaksi_terbaca_admin']=="belum terbaca") {
                            echo "transaksi Baru";
                        } elseif ($row_daftar['status_transaksi_terbaca_admin']=="sudah terbaca") {
                          echo "transaksi sudah terbaca";
                        }?>
                      </td> -->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </section>

  <!-- /.content-wrapper -->
