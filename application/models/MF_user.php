<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function list_fotografer(){

   $query1=$this->db->get_where('user', array('level' => 2));
   return $query1;

  }
  function detail_fotografer($id){

    $this->db->select('*');
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
}
