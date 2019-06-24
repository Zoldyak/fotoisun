<section class="our-team-area section-padding-80-50">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5><?php echo $daftar['judul_kegiatan'] ?></h5>
        <hr>
      </div>
      <div class="col-md-12 d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo $this->config->item('frontend') ?>/img/kegiatan/<?php echo $daftar['foto_kegiatan'] ?>" alt="" style="width:75%">
      </div>
      <div class="col-md-12 d-flex justify-content-start">
        <p><?php echo $daftar['detail_kegiatan'] ?></p>
      </div>
    </div>
  </div>
</section>
