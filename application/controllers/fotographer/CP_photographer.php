<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_photographer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model('MP_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MP_user->list_fotografer()->result_array();
    $data = array('halaman' => 'photographer.php',
                  'daftar'  => $listdata );
    $load->view('photograper/layout',$data);
  }
  function detail(){
    $load=$this->load;
    $username=$this->uri->segment(4);
    $listdata= $this->MP_user->detail_fotografer($username)->row_array();
    $listdatagalleri= $this->MP_user->list_galleri($username)->result_array();
    $listpaket=$this->MP_user->detail_paket($username)->result_array();
    $listkomen=$this->MP_user->list_komentar($username)->result_array();
    $countkomen=$this->MP_user->count_komen($username)->num_rows();
    $data = array('halaman' => 'detail_photographer.php',
                  'detail_data'=> $listdata,
                  'list_galleri'=>$listdatagalleri,
                  'list_paket'=> $listpaket,
                  'list_komen'=>$listkomen,
                  'jumlah_komen'=>$countkomen
                );
    // $data = array('halaman' => 'detail_photographer.php' );
    $load->view('photograper/layout',$data);
  }

}
