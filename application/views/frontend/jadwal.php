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
<div class="container taxt_align_center">

		<div class="list1">
			<!-- <h2>Our team</h2> -->
			<div class="loadMore">
        <?php foreach ($daftar as $row):   ?>

            <div class=" item col-md-3" >
              <div class="card  mb-30">
                  <div class="team-content-area text-center wow fadeInUp" data-wow-delay="100ms">
                          <img class="rounded card-img-top" src="<?php echo $this->config->item('frontend') ?>/img/jadwal/<?php echo $row['foto_jadwal'] ?>" alt="" style="width:170px; height:170px;">


                      <h5 class="card-title"><?php echo $row['judul_jadwal'] ?></h5>
                      <p class=" card-text list-inline d-flex justify-content-start">
                        <?php echo substr($row['detail_jadwal'],0,100) ?>
                      </p>
											<p class=" card-text list-inline d-flex justify-content-end">
                        <?php echo $row['tanggal_jadwal'] ?>
                      </p>
                      <div class="member-social-info text-right ">
                          <a href="#" class="btn btn-info text-white " data-toggle="modal" data-target="#jadwal-<?php echo $row['id_jadwal'] ?>">Detail</i></a>

                      </div>

                  </div>
              </div>
            </div>
						<div class="modal fade" id="jadwal-<?php echo $row['id_jadwal'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog  modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['judul_jadwal'] ?></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>

						      </div>
						      <div class="modal-body">
						        	<img class="rounded card-img-top" src="<?php echo $this->config->item('frontend') ?>/img/jadwal/<?php echo $row['foto_jadwal'] ?>" alt="" >
											<p class=" card-text list-inline d-flex justify-content-start">
                        <?php echo $row['detail_jadwal'] ?>
                      </p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div>
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
