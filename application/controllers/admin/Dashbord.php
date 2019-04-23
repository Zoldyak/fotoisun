<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $load=$this->load;

    //Codeigniter : Write Less Do More
  }

  function index()
  {
  $load=$this->load;
    $load->view('admin/dashbord.php');
  }

}
