<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_kegiatan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('MP_kegiatan'));

  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MP_kegiatan->list_kegiatan()->result_array();
    $data = array('halaman' => 'kegiatan.php',
                    'daftar'  => $listdata);
    $load->view('photograper/layout',$data);
  }
  public function detail()
  {
      $load=$this->load;
    $id=$this->uri->segment(4);
    $listdata= $this->MP_kegiatan->detail_list_kegiatan($id)->row_array();
    $data = array('halaman' => 'detail_kegiatan.php',
                    'daftar'  => $listdata);
    $load->view('photograper/layout',$data);
  }

}
