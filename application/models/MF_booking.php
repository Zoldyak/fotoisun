<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MF_booking extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function list_booking($username){
    $this->db->select('*');
    $this->db->join('user', 'user.username = booking.username');
    $this->db->join('paket_foto', 'paket_foto.id_paket = booking.id_paket');
    $this->db->where('booking.username', $username);
    return $this->db->get('booking');
  }
  public function status_persetujuan_terbaca_oleh_custumor($username)
  {
    $data = array('status_persetujuan_terbaca_oleh_custumor' =>"sudah terbaca" , );
    $this->db->where('username', $username);
    $this->db->update('booking', $data);
  }
  public function count_persetujuan($username)
  {
    $this->db->select('*');

    $this->db->where('username', $username);
    $this->db->where('persetujuan', 'Disetujui');
    $this->db->where('status_persetujuan_terbaca_oleh_custumor', 'belum terbaca');
    return $this->db->get('booking');
  }
  function list_transaksi($id_booking){
    $this->db->select('*');
    $this->db->join('transaksi', 'transaksi.id_booking = booking.id_booking');
    $this->db->where('transaksi.id_booking', $id_booking);
    return $this->db->get('booking');
  }
  function tagihan($id_booking){
    $this->db->select('*');
    $this->db->join('paket_foto', 'paket_foto.id_paket = booking.id_paket');
    $this->db->where('booking.id_booking', $id_booking);
    return $this->db->get('booking');
  }
  function jumlah_transaksi_tagihan($id_booking){
    $this->db->select_sum('jumlah_transaksi');
    $this->db->where('id_booking', $id_booking);
    $this->db->where('status', "Berhasil");
return $this->db->get('transaksi');
  }
  function add_booking($dataform){
    return  $this->db->insert('booking', $dataform);
  }
  public function update_booking($id_booking)
  {
    // code...
    $data = array('keterangan' =>"ada transaksi baru" , );
    $this->db->where('id_booking', $id_booking);
    $this->db->update('booking', $data);
  }
  function insert_transaksi($dataform){
    return  $this->db->insert('transaksi', $dataform);
  }
}
