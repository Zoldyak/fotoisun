<div class="container">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
  <?php
  if ($jenis_form=='tambah') {?>
    <br>
    <div class="col-sm-12">
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
    <form class="form-horizontal"  action="<?php echo base_url('admin/user/tambah')?> " method="post" enctype="multipart/form-data">
      <div class="box-header">
          <h2 class="text-green">Tambah Fotografer</h2>
      </div>
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Username">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Password" name="Password" onkeyup='check();'>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Re-type Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="retype" placeholder="Re-type Password" name="retypepassword" onkeyup='check();'>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="Text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" name="nama">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">No.HP</label>
          <div class="col-sm-10">
            <input type="Text" class="form-control" id="inputEmail3" placeholder="No.HP" name="HP">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Alamat Lengkap</label>
          <div class="col-sm-10">
            <textarea name="Alamat" rows="8" cols="80" class="form-control" placeholder="Alamat Sesuai KTP"></textarea>
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
  <?php }
    else {
      foreach ($data_edit as $rowedit) {
        $user=$rowedit['username'];
        $nama=$rowedit['nama_lengkap'];
        $hp=$rowedit['no_hp'];
        $alamat=$rowedit['alamat_lengkap'];

      }
      ?>
      <br>
      <div class="col-sm-12">
          <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
      <form class="form-horizontal"  action="<?php echo base_url('admin/user/edit')?> " method="post" enctype="multipart/form-data">
        <div class="box-header">
            <h2 class="text-green">Tambah Fotografer</h2>
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
