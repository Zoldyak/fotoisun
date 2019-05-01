<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MP_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function list_fotografer(){

   $query1=$this->db->get_where('user', array('level' => 2));
   return $query1;

  }
   function  list_galleri($username){
     $this->db->select('*,galleri.foto as fotogalleri');
     $this->db->join('user', 'user.username = galleri.username', 'left');
     $this->db->where('galleri.username', $username);
  return  $this->db->get('galleri');
  }
  function detail_fotografer($username){

   $query1=$this->db->get_where('user', array('username' => $username));
   return $query1;

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
}
