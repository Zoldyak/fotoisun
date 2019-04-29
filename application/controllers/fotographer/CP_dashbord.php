<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MP_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $listdata= $this->MP_user->detail_fotografer($username)->row_array();
    $data = array('halaman' => 'dashbord_photographer.php',
                  'detail_data'=> $listdata);
    $load->view('photograper/layout',$data);
  }

}
