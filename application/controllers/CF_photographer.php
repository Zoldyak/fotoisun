<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_photographer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model('MF_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $tes="tes";
    $load=$this->load;
    $listdata= $this->MF_user->list_fotografer()->result_array();
    $data = array('halaman' => 'photographer.php',
                  'daftar'  => $listdata );
    $load->view('frontend/layout',$data);
  }
  function detail(){
    $load=$this->load;
    $data = array('halaman' => 'detail_photographer.php' );
    $load->view('frontend/layout',$data);
  }

}
