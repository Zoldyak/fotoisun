<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_gallery extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $data = array('halaman' => 'gallery.php' );
    $load->view('frontend/layout',$data);
  }
  function detail(){
    $load=$this->load;
    $data = array('halaman' => 'detail_photographer.php' );
    $load->view('frontend/layout',$data);
  }

}
