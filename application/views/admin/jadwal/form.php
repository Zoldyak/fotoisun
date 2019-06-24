<div class="container">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
  <?php
  if ($jenis_form=='tambah') {?>
    <br>
    <div class="col-sm-12">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
    <form class="form-horizontal"  action="<?php echo base_url('admin/Jadwal/tambah')?> " method="post" enctype="multipart/form-data">
      <div class="box-header">
          <h2 class="text-green">Tambah Jadwal</h2>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputEmail3" placeholder="judul" name="judul">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
          <div class="col-sm-9">
            <textarea name="detail" rows="8" cols="80"class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="datepicker" placeholder="Ex:2019-09-30" name="tanggal">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
          <div class="col-sm-9">
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
  <?php }
    else {
      ?>
      <br>
      <div class="col-sm-12">
          <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
      <form class="form-horizontal"  action="<?php echo base_url('admin/Jadwal/edit')?> " method="post" enctype="multipart/form-data">
        <div class="box-header">
            <h2 class="text-green">Edit Jadwal</h2>
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-9">
              <input type="hidden" name="id" value="<?php echo $data_edit['id_jadwal'] ?>">
              <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="judul" value="<?php echo $data_edit['judul_jadwal'] ?>">
            </div>
          </div>


          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Detail</label>
            <div class="col-sm-9">
              <textarea name="detail" rows="8" cols="80" class="form-control" placeholder="Alamat Sesuai KTP" ><?php echo $data_edit['detail_jadwal'] ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="Text" class="form-control" id="inputEmail3" placeholder="No.HP" name="tanggal" value="<?php echo $data_edit['tanggal_jadwal'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-9">
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
  <?php  }
   ?>
</div>
<script type="text/javascript">
  function check(){
    var password =document.getElementById("password").value;
    var rytpe =document.getElementById("retype").value;
    if (password === rytpe) {
      document.getElementById("myBtn").disabled = false;
      // document.getElementById("infobatas").innerHTML = "Tidak sama dengan password";
      //
      // document.getElementById('message').style.color = 'green';
      // document.getElementById('message').innerHTML = 'matching';
    }
    else{
      document.getElementById("myBtn").disabled = true;
      //   document.getElementById("infobatas").innerHTML = "sama dengan password";
      // document.getElementById('message').style.color = 'red';
      //     document.getElementById('message').innerHTML = 'not matching'
    }
  }

</script>
