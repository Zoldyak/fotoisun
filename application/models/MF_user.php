<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_user extends CI_Model{

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
  function detail_fotografer($id){

    $this->db->select('*,user.username as fotographer');
    $this->db->join('paket_foto', 'paket_foto.username = user.username', 'left');
    $this->db->where('user.username', $id);
   //$query1=$this->db->get_where('user', array('username' => $username));
   return $this->db->get('user');

  }

  function  list_galleri($id){
    $this->db->select('*,galleri.foto as fotogalleri');
    $this->db->join('user', 'user.username = galleri.username', 'left');
    $this->db->where('galleri.username', $id);
 return  $this->db->get('galleri');
 }
 function detail_paket($id){
   $this->db->select('*');
   $this->db->join('paket_foto', 'paket_foto.username = user.username', 'left');
   $this->db->where('user.username', $id);
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
  public function insert_komen($dataform)
  {
    $this->db->insert('komentar', $dataform);
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
}
