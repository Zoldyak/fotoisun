<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_gallery extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('MP_galleri');
  }

  function index()
  {
    $load=$this->load;
      $listdatagalleri= $this->MP_galleri->list_galleri()->result_array();
    $data = array('halaman' => 'gallery.php',
                  'list_galleri'=>$listdatagalleri );
    $load->view('photograper/layout',$data);
  }

}
