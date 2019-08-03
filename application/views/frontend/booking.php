<?php
$userphotograper=$detail_data['username'];
$namaphotograper=$detail_data['nama_lengkap'];
$facebook=$detail_data['facebook'];
$twitter=$detail_data['twitter'];
$instagram=$detail_data['instagram'];
$userbooking= $this->session->userdata('User');
date_default_timezone_set('Asia/Jakarta');
$sekarang=date("Y-m-d");
// echo $sekarang;
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
      <form class="form-horizontal" id="booking_pg"  action="<?php echo base_url('CF_pesan/add')?> " method="post" enctype="multipart/form-data">
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
                  <option value="<?php  echo $row_paket['id_paket']?>" data-id="<?php  echo nominal($row_paket['harga'])?>" data-pajak="<?php  echo nominal('10000')?>" data-total="<?php $hargapaket=$row_paket['harga'];
                          $administrator=10000; echo  nominal($hargapaket+$administrator) ?>">
                    <?php echo $row_paket['nama_paket']." Rp.".$row_paket['harga']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="" id="isidetail">

          </div>
          <div class="form-group">
            <label for="example-date-input" class="col-2 control-label">Tanggal Booking</label>
            <div class="col-10">
              <input name="tanggal_booking" class="form-control " type="date" value="" id="datepicker">
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
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" id="myBtn">
                Kirim
              </button>
              <!-- <input type="submit" name="" value="kirim" class="btn btn-info" > -->
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

  </div>
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Total Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-3 col-form-label">Harga Paket</label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" readonly id="Hpaket" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-3 col-form-label" readonly>administrasi</label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" id="administrasi" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-3 col-form-label" readonly>Total Pembayaran</label>
          <div class="col-sm-9">
            <input type="text" readonly class="form-control-plaintext" id="totalbayar" value="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitbooking">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
<!-- </div> -->

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
             // alert(id)
            $('#isidetail').html(data);
         }
        })

      })
      // $("#datepicker").datepicker({
      //   autoclose: true,
      // });
          $("#datepicker").change(function() {
              var date = $( this ).val();
              var pg= "<?php echo  $namaphotograper?>";
              // var bulan date.getMonth();
              var tahun=<?php echo date("Y"); ?>;
              var bulan=`<?php echo date("m"); ?>`;
              var tanggal=<?php echo date("d"); ?>;
              var tanggal_sekarang= tahun+"-"+bulan+"-"+tanggal;
              console.log(date+"<="+ tanggal_sekarang);
              // alert("tanggal sudah terlewat");
            if (date <= tanggal_sekarang) {

              alert("tanggal sudah terlewat");
              document.getElementById("myBtn").disabled = true;
            }
            else {
              document.getElementById("myBtn").disabled = false;

              $.ajax({
                  url: '<?php echo base_url('CF_pesan/cek_tanggal')?>',
                  data:{
                    'tanggal':date,
                    'photograper':pg,
                  },
                  type: 'POST',
                  success: function(result) {
                    if (result=="Sudah ada") {
                      alert("Tanggal Sudah ada Penyewa, silahkan pilih tanggal lain");
                    }
                  }
              })
              // alert(date);
              $("#placeholder").text(date);}
          });


    })
</script>
<script>
$(document).ready(function () {
  $('#myBtn').click(function() {
      var hargapaket=$('#pilihpaket').find(':selected').attr('data-id');
      var pajak=$('#pilihpaket').find(':selected').attr('data-pajak');
      var totalbayar=$('#pilihpaket').find(':selected').attr('data-total');
      // alert(hargapaket);
       $('#Hpaket').val(hargapaket);
       $('#administrasi').val(pajak);;
       $('#totalbayar').val(totalbayar);;
  });

  $('#submitbooking').click(function(){
      alert('submitting');
      $('#booking_pg').submit();
  });
})
</script>
