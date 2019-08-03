<?php
date_default_timezone_set('Asia/Jakarta');
 ?>
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
                                <li class="active"><a href="<?php echo base_url('fotographer/CP_home/')?>">Home</a></li>
                                <li><a href="<?php echo base_url('fotographer/CP_gallery/')?>">Gallery</a></li>
                                <li><a href="<?php echo base_url('fotographer/CP_photographer/')?>">Photographer</a></li>
                                <?php if ($this->session->userdata('User')!= null){ ?>
                                <li id="inbox"></li>
                              <?php } else{?>

                            <?php }?>
                            <li><a href="#">About</a>
                              <ul class="dropdown">
                                <li><a href="<?php echo base_url('fotographer/CP_kegiatan/')?>">Kegiatan</a></li>
                                <li><a href="<?php echo base_url('fotographer/CP_jadwal/')?>">Jadwal</a></li>
                              </ul>
                            </li>
                                <li > <a href="#" ><?php echo $this->session->userdata('nama_lengkap'); ?>
                                  <span id="info_boking"></span>
                                </a>
                                  <ul class="dropdown">
                                    <li><a href="<?php echo base_url('fotographer/CP_dashbord')?>" class="" >Dashbord</a></li>
                                    <li><a href="<?php echo base_url('CF_login/logout')?>" class="" >Logout</a></li>
                                  </ul>
                                </li>

                            </ul>
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
