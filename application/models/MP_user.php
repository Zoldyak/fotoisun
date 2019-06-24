<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MP_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function list_fotografer(){
    $this->db->select('*,avg(rating) as rata,komentar.username as custumor');
    $this->db->join('user', 'user.username =komentar.photographer','right');

    $this->db->where('user.level', 2);
        $this->db->group_by('user.username');
    return $this->db->get('komentar');

  }
   function  list_galleri($username){
     $this->db->select('*,galleri.foto as fotogalleri');
     $this->db->join('user', 'user.username = galleri.username', 'left');
     $this->db->where('galleri.username', $username);
  return  $this->db->get('galleri');
  }
  function detail_fotografer($username){
    $this->db->select('*');
    $this->db->join('paket_foto', 'paket_foto.username = user.username', 'left');
    $this->db->where('user.username', $username);
   //$query1=$this->db->get_where('user', array('username' => $username));
   return $this->db->get('user');
   // /return $query1;

  }
  function detail_paket($username){
    $this->db->select('*');
    $this->db->join('paket_foto', 'paket_foto.username = user.username', 'left');
    $this->db->where('user.username', $username);
   //$query1=$this->db->get_where('user', array('username' => $username));
   return $this->db->get('user');
   // /return $query1;

  }
function input_data($dataform){
    $this->db->insert('user',$dataform);
      }
  function update_data($where,$dataform){
    $this->db->where($where);
  $this->db->update('user',$dataform);
  }
  function update_data_sosmed($where,$dataform){
    $this->db->where($where);
  $this->db->update('user',$dataform);
  }
  function insert_data_galleri($dataform){
      $this->db->insert('galleri',$dataform);
  }
  function insert_data_paket($dataform){
      $this->db->insert('paket_foto',$dataform);
  }
  function update_data_paket($where,$dataform){
    $this->db->where($where);
  $this->db->update('paket_foto',$dataform);
  }
  function delete_data_paket($id){
    $this->db->where('id_paket', $id);
    $this->db->delete('paket_foto');
  }
  public function list_komentar($username)
  {
    // code...
    $this->db->select('*,avg(rating) as rata,komentar.username as custumor');
       $this->db->join('user', 'user.username =komentar.username','inner');
    $this->db->where('photographer', $username);
    return $this->db->get('komentar');
  }
  public function list_komentar2($username)
  {
    // code...
    $this->db->select('*,komentar.username as custumor');
       $this->db->join('user', 'user.username =komentar.username','inner');
    $this->db->where('photographer', $username);
    return $this->db->get('komentar');
  }
  public function count_komen($username)
  {
    // code...
    $this->db->select('*');

    $this->db->where('photographer', $username);
    return $this->db->get('komentar');
  }
  public function list_riwayat($username)
  {
    // code...
    $this->db->select('*');
    $this->db->where('username', $username);
    return $this->db->get('riwayat_pekerjaan');
  }
  public function list_detail_riwayat($id)
  {
    $this->db->select('*');
    $this->db->where('id_riwayat_pekerjaan', $id);
    return $this->db->get('riwayat_pekerjaan');
    // code...
  }
  function insert_riwayat($dataform){
  $this->db->insert('riwayat_pekerjaan',$dataform);
  }
  function update_riwayat($where,$dataform){
    $this->db->where($where);
  $this->db->update('riwayat_pekerjaan',$dataform);
  }

}
