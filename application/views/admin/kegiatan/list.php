 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <section class="content-header">
      <h1>
        Data Tables
        <small>Kegiatan tables</small>
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
              <h3 class="box-title">List Kegiatan</h3>
              <div class="text-right">
                <a href="<?php echo base_url('admin/Kegiatan/tambah')?>" class="btn btn-info">
                  Tambah
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Detail</th>
                  <th>Foto</th>
                  <th>Opsi</th>

                </tr>
                </thead>
                <tbody>
                  <?php
                 $no=0;
                 foreach ($daftar as $row1 ) {
                   $no++; ?>
                <tr>
                  <td><?php echo $row1['judul_kegiatan'] ?></td>
                  <td><?php echo substr($row1['detail_kegiatan'],0,200)?></td>
                  <td>
                      <img src="<?php echo $this->config->item('frontend') ?>/img/kegiatan/<?php echo $row1['foto_kegiatan'] ?>" alt="" style="width:170px; height:170px;">
                  </td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#jadwal-<?php echo $row1['id_kegiatan'] ?>"style="color: #000;">
                      <i class="fa fa-eye fa-2x" aria-hidden="true"style="background: #4bdd39 ;border-radius: 7px;"></i>
                    </a>
                    <a href="<?php echo base_url('admin/Kegiatan/edit/'.$row1['id_kegiatan'])?>" style="color: #000;">
                      <i class="fa fa fa-pencil fa-2x" aria-hidden="true"style="background: #f39c12;border-radius: 7px;"></i>
                    </a>&nbsp&nbsp
                    <a href="<?php echo base_url('admin/Kegiatan/delete/'.$row1['id_kegiatan'])?>" style="color: #000;">
                      <i class="fa fa-trash fa-2x" aria-hidden="true"style="background: #dd4b39 ;border-radius: 7px;"></i>
                    </a>

                  </td>
                </tr>
                <div class="modal fade" id="jadwal-<?php echo $row1['id_kegiatan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row1['judul_kegiatan'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                      </div>
                      <div class="modal-body">
                          <img class="img-responsive " src="<?php echo $this->config->item('frontend') ?>/img/kegiatan/<?php echo $row1['foto_kegiatan'] ?>" alt="" >
                          <p class=" card-text list-inline d-flex justify-content-start">
                            <?php echo $row1['detail_kegiatan'] ?>
                          </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </section>

  <!-- /.content-wrapper -->
