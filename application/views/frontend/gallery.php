<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $this->config->item('frontend') ?>/img/gallery/kota2.jpeg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">Gallery</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
  <div class="row">
    <div class="col-md-3">
      <form class="form-horizontal"  action="<?php echo base_url('CF_gallery/')?> " method="post" enctype="multipart/form-data">
      <ul class="list-group list-group-flush">
          <li class="list-group-item font-wight700">Filter</li>
          <li class="list-group-item">
            <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori</label>
            <input type="hidden" name="tipe" value="1">
            <select class="form-control" id="exampleFormControlSelect1" name="kategori" required>
              <option value="" disabled selected>Pilih</option>
              <option value="Pantai">Pantai</option>
              <option value="Gunung">Gunung</option>
              <option value="Kota">Kota</option>
            </select>
          </div>
          </li>
          <li class="list-group-item"><div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Foto</label>
          <select class="form-control" id="exampleFormControlSelect1" name="jenis" required>
            <option value="" disabled selected>Pilih</option>
            <option value="Wedding">Wedding</option>
            <option value="Pre-wedding">Pre-wedding</option>
            <option value="Anak">Anak-anak</option>
          </select>
        </div></li>
          <li class="list-group-item text-right"><button type="submit" class="btn btn-danger">
            <i class="fa fa-search"></i>kirim
          </button></li>

        </ul>
      </form>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12 ">
          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb  mt-15">
              <li class="breadcrumb-item active" aria-current="page">
                <form class="form-inline"  action="<?php echo base_url('CF_gallery/')?> " method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="hidden" name="tipe" value="2">
                    <input type="text" name="lokasi" class="form-control" id="inputPassword2" placeholder="Nama lokasi" required>
                  </div> &nbsp
                  <button type="submit" class="btn btn-primary  "><i class="fa fa-search"></i></button>
                </form>
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-md-12">
          <div class="row">
            <?php foreach ($list_galleri as $rowgaleri): ?>
              <div class="col-md-4">
                <div class="card">

                <img src="<?php echo $this->config->item('frontend') ?>/img/gallery/<?php echo $rowgaleri['fotogalleri'] ?>" alt="">
                  <div class="card-body">
                    <p class="card-text font-12">Photographer:<?php echo $rowgaleri['nama_lengkap'] ?> <br>
                    Nama Lokasi:<?php echo $rowgaleri['lokasi'] ?> <br>
                    Jenis:<?php echo $rowgaleri['jenis_foto'] ?>  <br>   Kategori:<?php echo $rowgaleri['kategori_lokasi'] ?>  </p>
                    <div class="text-right">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $rowgaleri['id_galleri'] ?>">
                      Detail
                      </button>
                    </div>
                  </div>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal<?php echo $rowgaleri['id_galleri'] ?>">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Photographer:<?php echo $rowgaleri['nama_lengkap'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                      <img src="<?php echo $this->config->item('frontend') ?>/img/gallery/<?php echo $rowgaleri['fotogalleri'] ?>" class="img-fluid" alt="Responsive image">
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
