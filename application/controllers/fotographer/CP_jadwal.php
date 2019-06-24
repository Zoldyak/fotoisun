<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_jadwal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('MP_jadwal'));
  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MP_jadwal->list_jadwal()->result_array();
    $data = array('halaman' => 'jadwal.php',
                    'daftar'  => $listdata);
    $load->view('photograper/layout',$data);
  }

}
