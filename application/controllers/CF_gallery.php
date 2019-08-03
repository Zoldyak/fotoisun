<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_gallery extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('MF_galleri');
  }

  function index()
  {
    if ($this->input->post('tipe')==1) {
      // code...
      $kate=$this->input->post('kategori');
      $jen=$this->input->post('jenis');
      $listdatagalleri=$this->MF_galleri->list_galleri_filter($kate,$jen)->result_array();
    }
    elseif ($this->input->post('tipe')==2) {
      // code...
      $lokasi=$this->input->post('lokasi');
      $listdatagalleri=$this->MF_galleri->list_lokasi_filter($lokasi)->result_array();
    }
    else {
        $listdatagalleri= $this->MF_galleri->list_galleri()->result_array();
    }
    $load=$this->load;
    // $listdatagalleri= $this->MF_galleri->list_galleri()->result_array();
    $data = array('halaman' => 'gallery.php',
                  'list_galleri'=>$listdatagalleri );
    $load->view('frontend/layout',$data);
  }

}
