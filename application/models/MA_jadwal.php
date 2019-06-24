<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Jadwal extends CI_Model{

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
  public function detail_jadwal($id)
  {
  $this->db->select('*');
  $this->db->where('id_jadwal', $id);
  return $this->db->get('jadwal');
  }
  function input_data($dataform){
      $this->db->insert('jadwal',$dataform);
        }
  function update_data($where,$dataform)
  {
    $this->db->where($where);
    $this->db->update('jadwal',$dataform);
  }
}
