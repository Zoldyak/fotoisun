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
    $load=$this->load;
    $listdata= $this->MF_user->list_fotografer()->result_array();
    $data = array('halaman' => 'photographer.php',
                  'daftar'  => $listdata );
    $load->view('frontend/layout',$data);
  }
  function detail(){
    $load=$this->load;
    $username=$this->uri->segment(3);
    //echo "saya".$username;
    $listdata= $this->MF_user->detail_fotografer($username)->row_array();
    $listdatagalleri= $this->MF_user->list_galleri($username)->result_array();
    $listpaket=$this->MF_user->detail_paket($username)->result_array();
    // print_r($listpaket);
    $data = array('halaman' => 'detail_photographer.php',
                  'detail_data'=> $listdata,
                  'list_galleri'=>$listdatagalleri,
                  'list_paket'=> $listpaket
                );
    //$data = array('halaman' => 'detail_photographer.php' );
    $load->view('frontend/layout',$data);
  }

}
