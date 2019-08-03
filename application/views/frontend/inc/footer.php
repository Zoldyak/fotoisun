
<footer class="footer-area background_red">
    <div class="container">
        <div class="row">
          <br>
          <div class="col-md-4">
            <h3 class="color_white font-wight700">About Us</h3>
            <p class="color_white">Kami adalah Marketplace yang bergerak di bidang jasa Photographer
            </p>
          </div>
          <div class="col-md-4">
            <h3 class="color_white font-wight700">Menu</h3>
            <ul class="list-group list-group-flush ">
              <li class="list-group-item none_backround color_white">Home</li>
              <li class="list-group-item none_backround color_white">Gallery</li>
              <li class="list-group-item none_backround color_white">Photographer</li>
              <li class="list-group-item none_backround color_white">Login</li>

            </ul>
          </div>
          <div class="col-md-4">
              <h3 class="color_white font-wight700">Follow Us</h3>
              <a href="#"class="btn btn-default">
                <i class="fa fa-facebook-square fa-2x"></i>
              </a>
              <a href="#"class="btn btn-default">
                <i class="fa fa-instagram fa-2x"></i>
              </a>
              <a href="#"class="btn btn-default">
                <i class="fa fa-twitter-square fa-2x"></i>
              </a>
          </div>
            <div class="col-12">
                <div class="footer-content d-flex align-items-center justify-content-between">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="#"><img src="<?php echo $this->config->item('frontend') ?>/img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Social Info -->
                    <div class="social-info">
                        <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                        <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
  </div>
    </div>
</footer>
<!-- jQuery 3.4.1 -->

<script src="<?php echo $this->config->item('frontend') ?>/js/jquery.datatable.js"></script>

<script src="<?php echo $this->config->item('frontend') ?>/js/dataTables.bootstrap4.min.js " charset="utf-8"></script>
<script src="<?php echo $this->config->item('frontend') ?>/js/dataTables.responsive.min.js" charset="utf-8"></script>
  <script src="<?php echo $this->config->item('frontend') ?>/js/responsive.bootstrap4.min.js " charset="utf-8"></script>

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<!-- <script src="<?php echo $this->config->item('frontend') ?>/js/jquery.min.js"></script> -->
<!-- Popper -->
<script src="<?php echo $this->config->item('frontend') ?>/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $this->config->item('frontend') ?>/js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="<?php echo $this->config->item('frontend') ?>/js/alime.bundle.js"></script>
<!-- Active -->
<script src="<?php echo $this->config->item('frontend') ?>/js/default-assets/active.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(document).ready(function() {

  var reload_header= setInterval(function () {

    $.ajax({
        url: '<?php echo base_url('Cf_inbox/cek_inbox/'.$this->session->userdata('User')); ?>',

        success: function(data){
            // alert(1);
          $('#inbox').html(data);
        }
      });
    $.ajax({
      url: '<?php echo base_url('Cf_inbox/list_inbox_ajax/'.$this->session->userdata('User')); ?>',

      success: function(inbox_list){
                $('#list_inbox').html(inbox_list);
      }

    });
    $.ajax({
      url: '<?php echo base_url('Cf_inbox/info_persetujuan_ajax/'.$this->session->userdata('User')); ?>',

      success: function(info_persetujuan){
                $('#info_persetujuan').html(info_persetujuan);
      }

    });
    $('.list-group-item').on('click',function() {
      var atrribut_list=$(this).attr('data-inbox');
        $("#form_pesan").remove()
        var form_kirm=`<div id="form_pesan">
                  <form method="post" class="mb-15 form_simpan"style="position:relative" action="<?php echo base_url('Cf_inbox/balas_pesan/'.$this->session->userdata('User')); ?>">
                    <div class="form-group col-sm-12">
                      <input name="pesan" type="hidden" class="form-control idlist"  placeholder="" value=`+atrribut_list+`>
                      <textarea name="pesan1" class="form-control pesan" rows="2" cols="80"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="submit"  class="btn btn-info simpan" id="" placeholder="" value="Kirim">Kirim</button>

                    </div>
                  </form>
                </div>`;
        $("#detail_pesan").after(form_kirm);
    // alert(atrribut_list);
    $.ajax({
      type : 'POST',
      url:'<?php echo base_url('Cf_inbox/detail_inbox_ajax/'.$this->session->userdata('User')); ?>',

      data:{id:atrribut_list},
      success: function(detail_inbox) {
        // alert(detail_inbox);
        $('#detail_pesan').html(detail_inbox)
        // alert(detail_inbox)
      }
    });

    })

  }, 1000);

})
var clear =setInterval(function () {
console.clear();
}, 100000)
cache.delete('#detail_pesan').then(function(response) {
    someUIUpdateFunction();
  });
  $('.simpan').on('click',function() {
    alert(1);
    var id_list=$('.idlist').val();
    //alert(id_list)
    var pesan=$('.pesan').val();
    //var data=$('.form_simpan').serialize();
    $.ajax({
      type:'POST',
      data:{idlist:id_list,pesan:pesan},
      url:"<?php echo base_url('Cf_inbox/balas_pesan/'.$this->session->userdata('User')); ?>",
      success:function() {
        alert("Pesan terkirim")
      }
    })
  })
</script>

<script>
  $(document).ready(function() {

  })
</script>
