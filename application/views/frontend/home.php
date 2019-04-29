<section class="our-team-area section-padding-80-50">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
      <?php foreach ($daftar as $row): ?>
        <!-- start item -->
        <div class="col-sm-3 ">
          <div class="card">
              <img class="card-img-top" src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $row['foto'] ?>" alt="" >
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['nama_lengkap'] ?></h5>

                <ul class="list-inline text-right">
                  <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
                <div class="text-right">
                  <p class="text-red">Photographer</p><a href="#" class="btn btn-primary text-right">Detail</a>
                </div>

            </div>
          </div>
        </div>
        <!-- Close item -->
      <?php endforeach; ?>


      <div class="text-center col-md-12 text-center">
        <br>
        <a href="<?php echo base_url('CF_photographer/')?>" class="btn btn-info ">Load More</a>
      </div>
    </div>
  </div>
</section>
<!-- Welcome Area Start
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        Single Slide
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $this->config->item('frontend') ?>/img/bg-img/slide1.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    Welcome Text
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInDown" data-delay="900ms">Wellcome  <br>Foto Isun</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">Marketplace Jasa photographer</p>
                            <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        Single Slide
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $this->config->item('frontend') ?>/img/bg-img/slide2.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    Welcome Text
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInUp" data-delay="100ms">Wellcome <br>Foto Isun</h2>
                            <p data-animation="bounceInUp" data-delay="500ms">Marketplace Jasa photographer</p>
                            <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
Welcome Area End -->
