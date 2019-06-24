  <p><br><br></p>
<section class="our-team-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <?php if ($jenis_form=="tambah") {?>
        <div class="card bg-light text-dark">
          <div class="card-body">
            <?php echo $this->session->flashdata('msg'); ?>

                <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
            <form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/form_tambah_riwayat')?> " method="post" enctype="multipart/form-data">
              <div class="box-header">
                  <h2 class="text-green">Register</h2>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Riwayat Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Riwayat Pekerjaan" name="riwayat" value="">

                  </div>
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
      <?php } else{ ?>
        <div class="card bg-light text-dark">
          <div class="card-body">
            <?php echo $this->session->flashdata('msg'); ?>

                <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
            <form class="form-horizontal"  action="<?php echo base_url('fotographer/CP_dashbord/form_edit_riwayat')?> " method="post" enctype="multipart/form-data">
              <div class="box-header">
                  <h2 class="text-green">Register</h2>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Riwayat Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Riwayat Pekerjaan" name="riwayat" value="<?php echo $daftar_list['nama_pekerjaan']; ?>">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="Email" name="id_detail" value="<?php echo $daftar_list['id_riwayat_pekerjaan']; ?>">
                  </div>
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

        </div>

      <?php }?>
  </div>
    </div>
  </div>
</section>
