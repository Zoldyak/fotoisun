<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_kegiatan extends CI_Model{

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
  public function detail_kegiatan($id)
  {
  $this->db->select('*');
  $this->db->where('id_kegiatan', $id);
  return $this->db->get('kegiatan');
  }
  function input_data($dataform){
      $this->db->insert('kegiatan',$dataform);
        }
  function update_data($where,$dataform)
  {
    $this->db->where($where);
    $this->db->update('kegiatan',$dataform);
  }
}
