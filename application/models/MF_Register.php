<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_Register extends CI_Model{

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

   $query1=$this->db->get_where('user', array('username' => $id));
   return $query1;

  }
function input_data($dataform){
    $this->db->insert('user',$dataform);
      }
  function update_data($where,$dataform){
    $this->db->where($where);
  $this->db->update('user',$dataform);
  }
  function list_data($username){
  return   $this->db->get_where('user', array('username' => $username));
  }
}
