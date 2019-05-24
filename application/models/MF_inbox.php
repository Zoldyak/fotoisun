<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_inbox extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function count_inbox($username){
    $this->db->select('*');
    //$this->db->join('detail_inbox', 'detail_inbox.id_list_inbox = list_inbox.id_list_inbox');
    $this->db->where('.list_inbox.status_terbaca_custumer','new');
    $this->db->where('custumer', $username);
    return $this->db->get('list_inbox');

  }
  public function list_inbox_new($username)
  {
    $this->db->distinct(`custumer`,`photographer,detail_inbox.status_terbaca as notif`);
    $this->db->select('`custumer`,`photographer`, `list_inbox`.`status_terbaca_custumer` as `notif`,`list_inbox`.`id_list_inbox` as `idlist`');
    $this->db->join('detail_inbox', 'detail_inbox.id_list_inbox = list_inbox.id_list_inbox');
    $this->db->where('custumer', $username);
    // $this->db->where('detail_inbox.status_terbaca','new');
    $this->db->order_by('detail_inbox.status_terbaca', ' ASC');
    return $this->db->get('list_inbox');
  }
  // public function list_inbox_terbaca($username)
  // {
  //   $this->db->distinct();
  //   $this->db->select('`custumer`,`photographer`');
  //   $this->db->where('custumer', $username);
  //   $this->db->where('status_terbaca','sudah dibaca');
  //   $this->db->order_by('status_terbaca', ' ASC');
  //   return $this->db->get('list_inbox');
  // }
  public function detail_inbox($iddetail)
  {
    $this->db->select('*');
    $this->db->where('id_list_inbox', $iddetail);
    return $this->db->get('detail_inbox');

  }
  public function updatelist($where,$dataupdtelist)
  {
    $this->db->where($where);
    $this->db->update('list_inbox',$dataupdtelist);
  }
  public function updatedetaillist($where,$dataupdtelist)
  {
    $this->db->where($where);
    $this->db->update('detail_inbox',$dataupdtelist);
  }

  public function cek_idlist_inbox($custemer,$photographer)
  {
    // code...
    $this->db->select('*');
    $this->db->where('custumer', $custemer);
    $this->db->where('photographer', $photographer);
    return $this->db->get('list_inbox');
  }

}
