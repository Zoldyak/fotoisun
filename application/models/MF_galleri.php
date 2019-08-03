<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_galleri extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function  list_galleri(){
    $this->db->select('*,galleri.foto as fotogalleri');
    $this->db->join('user', 'user.username = galleri.username', 'left');
  return  $this->db->get('galleri');
  }
  public function list_galleri_filter($kate,$jen)
  {
    // code...
    $this->db->select('*,galleri.foto as fotogalleri');
    $this->db->join('user', 'user.username = galleri.username', 'left');
    $this->db->where('kategori_lokasi', $kate);
    $this->db->where('jenis_foto', $jen);
  return  $this->db->get('galleri');
  }
  public function list_lokasi_filter($lokasi)
  {
    // code...
    $this->db->select('*,galleri.foto as fotogalleri');
    $this->db->join('user', 'user.username = galleri.username', 'left');
    $this->db->where('lokasi', $lokasi);
  return  $this->db->get('galleri');
  }
}
