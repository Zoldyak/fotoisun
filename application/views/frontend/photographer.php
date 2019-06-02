<style media="screen">

/**
* Load More Results - Example Styles
* Author: Cenk Çalgan
*/





.item { display: inline-block; }

.btn-load-more {
font-size: 14px;
color: #fff;
background-color: #00712c;
border: 0;
outline: 0;
padding: 10px 20px;
margin: 10px;
cursor: pointer;
}

.btn-load-more:hover { background-color: #00481c; }

</style>
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $this->config->item('frontend') ?>/img/bg-img/slide1.jpeg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">Photographer</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Photographer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-team-area section-padding-80-50">
<div class="container taxt_align_center">

		<div class="list1">
			<!-- <h2>Our team</h2> -->
			<div class="loadMore">
        <?php foreach ($daftar as $row):   $bintang = '
        <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
        <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>';
          if ($row['rating']==1) {
            $bintang = '
          <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>';
          }
          elseif ($row['rating']==2) {
            $bintang = '
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>';
          }
          elseif ($row['rating']==3) {
            $bintang = '
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>';
          }
          elseif ($row['rating']==4) {
            $bintang = '
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star-o" aria-hidden="true"></i></li>';
          }
          elseif ($row['rating']==5) {
            $bintang = '
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>
            <li class="list-inline-item"><i class="fa fa-star text-yellow" aria-hidden="true"></i></li>';
          }?>
          <a href="<?php echo base_url('CF_photographer/detail/'.$row['username'])?>">
            <div class=" item col-md-3" >
              <div class="">
                  <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                      <div class="member-thumb">
                          <img src="<?php echo $this->config->item('frontend') ?>/img/foto_profil/<?php echo $row['foto'] ?>" alt="" style="width:170px; height:170px;">
                      </div>

                      <h5><?php echo $row['nama_lengkap'] ?></h5>
                      <ul class="list-inline text-right">
                        <?php echo $bintang ?>
                      </ul>

                      <div class="member-social-info">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                          <a href="#"><i class="fa fa-pinterest"></i></a>
                      </div>

                  </div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>


			</div>
		</div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
<script src="<?php echo $this->config->item('frontend') ?>/js/loadMoreResults.js"></script>
<script type="text/javascript">
  $('.list1 .loadMore').loadMoreResults({
    displayedItems: 3,
    showItems: 3
  });
</script>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
