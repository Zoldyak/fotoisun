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
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
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
                  <td><?php echo $row1['nama_lengkap'] ?></td>
                  <td><?php echo $row1['alamat_lengkap'] ?></td>
                  <td><?php echo $row1['no_hp'] ?></td>
                  <td>
                      <img src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $row1['foto'] ?>" alt="" style="width:170px; height:170px;">
                  </td>
                  <td>

                    <a href="<?php echo base_url('admin/User/edit/'.$row1['username'])?>" style="color: #000;">
                      <i class="fa fa fa-pencil fa-2x" aria-hidden="true"style="background: #f39c12;border-radius: 7px;"></i>
                    </a>&nbsp&nbsp
                    <a href="<?php echo base_url('admin/User/delete/'.$row1['username'])?>" style="color: #000;">
                      <i class="fa fa-trash fa-2x" aria-hidden="true"style="background: #dd4b39 ;border-radius: 7px;"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>

                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </section>

  <!-- /.content-wrapper -->
