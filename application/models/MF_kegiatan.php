<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_kegiatan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function list_kegiatan()
  {
    $this->db->select('*');
    return $this->db->get('kegiatan');
  }
  public function detail_list_kegiatan($id)
  {
    $this->db->select('*');
    $this->db->where('id_kegiatan', $id);
    return $this->db->get('kegiatan');
  }
}
