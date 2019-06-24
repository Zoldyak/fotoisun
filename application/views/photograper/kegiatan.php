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
<section class="our-team-area section-padding-80-50">
<div class="container">

		<div class="list1">
			<!-- <h2>Our team</h2> -->
			<div class="loadMore">
        <?php foreach ($daftar as $row):   ?>

            <div class=" item col-md-12 border_1px border_radius_7px mb-30" >
              <div class="row">
                <div class="col-md-4 mb-3 mt-3">
                  <img class="rounded" src="<?php echo $this->config->item('frontend') ?>/img/kegiatan/<?php echo $row['foto_kegiatan'] ?>" alt="" >
                </div>
                <div class="col-md-8 mb-3 mt-3">
                  <h5><?php echo $row['judul_kegiatan'] ?></h5>
                  <?php echo substr($row['detail_kegiatan'],0,200) ?>
                  <a href="<?php echo base_url('fotographer/CP_kegiatan/detail/'.$row['id_kegiatan'])?>">
                  read more...</a>
                </div>
              </div>
            </div>
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
