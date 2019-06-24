<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_jadwal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('MF_jadwal'));
  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MF_jadwal->list_jadwal()->result_array();
    $data = array('halaman' => 'jadwal.php',
                    'daftar'  => $listdata);
    $load->view('frontend/layout',$data);
  }

}
