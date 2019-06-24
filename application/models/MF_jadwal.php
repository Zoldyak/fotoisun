<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_jadwal extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function list_jadwal()
  {
  $this->db->select('*');
  return $this->db->get('jadwal');
  }
}
