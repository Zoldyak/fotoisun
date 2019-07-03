<?php
$userphotograper=$detail_data['username'];
$namaphotograper=$detail_data['nama_lengkap'];
$facebook=$detail_data['facebook'];
$twitter=$detail_data['twitter'];
$instagram=$detail_data['instagram'];
$userbooking= $this->session->userdata('User');
 ?>

<div class="container bg-white">

  <div id="notifications">


  </div>
<br>

<br>
<p> <br> </p>
  <div class="card bg-light text-dark">
    <div class="card-body">
      <?php echo $this->session->flashdata('msg'); ?>
      <div class="col-sm-12">
          <?php echo validation_errors('<div class="alert alert-danger">','</div>');  ?>
      <form class="form-horizontal"  action="<?php echo base_url('CF_pesan/add')?> " method="post" enctype="multipart/form-data">
        <div class="box-header">
            <h2 class="text-green">Booking</h2>
        </div>
        <div class="box-body">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Photographer</label>
            <div class="col-sm-10">
              <input type="text" disabled class="form-control" id="inputEmail3" placeholder="Email" name="Username" value="<?php echo $namaphotograper ?>">
              <input type="hidden"  class="form-control" id="inputEmail3" placeholder="Email" name="photograper" value="<?php echo $namaphotograper ?>">
                <input type="hidden"  class="form-control" id="inputEmail3" placeholder="Email" name="penyewa" value="<?php echo $userbooking ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Paket Foto</label>
            <div class="col-sm-10">
              <select  class="form-control" name="paket_foto" id="pilihpaket">
                <option value="" selected disabled>Pilih paket</option>
                <?php foreach ($list_paket as $row_paket): ?>
                  <option value="<?php  echo $row_paket['id_paket']?>"><?php echo $row_paket['nama_paket']." Rp.".$row_paket['harga']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="" id="isidetail">

          </div>
          <div class="form-group">
            <label for="example-date-input" class="col-2 control-label">Tanggal Booking</label>
            <div class="col-10">
              <input name="tanggal_booking" class="form-control" type="date" value="" id="example-date-input">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tipe</label>
            <div class="col-sm-10">
              <select class="form-control" name="tipe">
                <option value="Pre-wedding">Pre-wedding</option>
                <option value="Wedding">Wedding</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Jenis Pembayaran</label>
            <div class="col-sm-10">
              <select class="form-control" name="pembayaran">
                <option value="COD">COD</option>
                <option value="Transfer">Transfer</option>
              </select>
            </div>

          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Lokasi Foto</label>
            <div class="col-sm-10">
              <textarea name="lokasi" rows="8" cols="80" class="form-control"></textarea>
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

  </div>
  </div>
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
<script type="text/javascript">
    $(document).ready(function() {
      $('#pilihpaket').on('change',function() {
        var id= $( this ).val();
        $.ajax({
          url: '<?php echo base_url('CF_pesan/ajax_detail')?>',
          data: {'id':id },
          type: "POST",
         success: function(data) {
             alert(id)
            $('#isidetail').html(data);
         }
        })

      })
    })
</script>
