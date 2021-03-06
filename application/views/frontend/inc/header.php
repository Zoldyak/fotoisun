
<?php
$this->db->select('*');
$this->db->join('user', 'user.username = booking.username');
$this->db->join('paket_foto', 'paket_foto.id_paket = booking.id_paket');
$this->db->join('transaksi', 'transaksi.id_booking = booking.id_booking', ' left outer');
$this->db->where('transaksi.status_konfirmasi_transaksi_terbaca_customer', 'belum terbaca');
$this->db->where('booking.username', $this->session->userdata('User'));
//$detail=$this->db->get('booking')->row_array();
$query= $this->db->get('booking')->num_rows();
 if ($this->session->userdata('User')!= null){ if ($query > 0) {
   $this->db->select('*');
   $this->db->join('user', 'user.username = booking.username');
   $this->db->join('paket_foto', 'paket_foto.id_paket = booking.id_paket');
   $this->db->join('transaksi', 'transaksi.id_booking = booking.id_booking', ' left outer');
   $this->db->where('transaksi.status_konfirmasi_transaksi_terbaca_customer', 'belum terbaca');
   $this->db->where('booking.username', $this->session->userdata('User'));
   $detail=$this->db->get('booking')->row_array();
   // $query= $this->db->get('booking')->num_rows();
   ?>

<script type="text/javascript">
  $(document).ready(function() {
    window.alert('Transaksi anda sudah di konfirmasi');
       window.location.href='<?php echo base_url('CF_dashbord/update_status_transaksi/'.$detail['id_booking']) ?>';
  })
</script>
<?php } } ?>
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="background_transparan classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="alimeNav">

                    <!-- Logo -->
                      <!-- <div class="welcome-text color_merah">
                      <strong> <h2>Foto Isun.</h2></strong>
                      </div> -->
                    <a class="nav-brand" href="./index.html"><img src="<?php echo $this->config->item('frontend') ?>/img/core-img/isunfoto_logo.png" alt="" style="width:177px; height:56px"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="<?php echo base_url('')?>">Home</a></li>
                                <li><a href="<?php echo base_url('CF_gallery/')?>">Gallery</a></li>
                                <li><a href="<?php echo base_url('CF_photographer/')?>">Photographer</a></li>
                                <li><a href="#">About</a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo base_url('CF_kegiatan/')?>">Kegiatan</a></li>
                                    <li><a href="<?php echo base_url('CF_jadwal/')?>">Jadwal</a></li>
                                  </ul>
                                </li>
                                <?php if ($this->session->userdata('User')!= null){ ?>
                                <li id="inbox"></li>
                              <?php } else{?>

                            <?php }if ($this->session->userdata('User')!= null){ ?>
                                  <li> <a href="#"><?php echo $this->session->userdata('User'); ?><span id="info_persetujuan"></span> </a>
                                    <ul class="dropdown">
                                      <li><a href="<?php echo base_url('CF_dashbord')?>" class="" >Dashbord</a></li>
                                      <li><a href="<?php echo base_url('CF_login/logout')?>" class="" >Logout</a></li>
                                      <!-- <div class="" id="inbox">

                                      </div> -->
                                    </ul>
                                  </li>
                                <?php } else{?>

                                <li><a href="#" class="" data-toggle="modal" data-target="#myModal">Login</a></li>
                              <?php } ?>

                            </ul>
                            <div class="modal fade" id="myModal">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Login</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <form action="<?php echo base_url('CF_login/auth')?>" method="post">
                                      <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
                                      </div>
                                      <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                                      </div>
                                      <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    Belum Punya akun? <a href="<?php echo base_url('CF_login/')?>">Register</a>
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                  </div>

                                </div>
                              </div>
                            </div>
                            <!-- Search Icon -->
                            <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
