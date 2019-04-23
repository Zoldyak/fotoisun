<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MF_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MF_user->list_fotografer()->result_array();
    $data = array('halaman' => 'home.php',
                    'daftar'  => $listdata);
    $load->view('frontend/layout',$data);
  }

}
