<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_kegiatan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('MF_kegiatan'));

  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MF_kegiatan->list_kegiatan()->result_array();
    $data = array('halaman' => 'kegiatan.php',
                    'daftar'  => $listdata);
    $load->view('frontend/layout',$data);
  }
  public function detail()
  {
      $load=$this->load;
    $id=$this->uri->segment(3);
    $listdata= $this->MF_kegiatan->detail_list_kegiatan($id)->row_array();
    $data = array('halaman' => 'detail_kegiatan.php',
                    'daftar'  => $listdata);
    $load->view('frontend/layout',$data);
  }

}
