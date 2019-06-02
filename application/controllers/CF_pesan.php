<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_pesan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      // $this->load->model('MF_user');
      $this->load->model(array('MF_user','MF_booking'));
    //Codeigniter : Write Less Do More
  }

  function form_add()
  {
    $this->load->library('user_agent');
    $load=$this->load;
    $i=$this->input;
    $username=$this->uri->segment(3);
    // echo "saya".$username;
    $listdata= $this->MF_user->detail_fotografer($username)->row_array();
    $listdatagalleri= $this->MF_user->list_galleri($username)->result_array();
    $listpaket=$this->MF_user->detail_paket($username)->result_array();
    // $listdata= $this->MF_user->list_fotografer()->result_array();
    // print_r($listpaket);
    $data = array('halaman' => 'booking.php',
                  'daftar'  => $listdata,
                  'detail_data'=> $listdata,
                  'list_paket'=> $listpaket );


    $load->view('frontend/layout',$data);
  }
  function add(){
    $this->load->library('user_agent');
    $load=$this->load;
    $i=$this->input;
    $username=$this->uri->segment(3);
    $valid 		= $this->form_validation;
    $valid->set_rules('paket_foto','paket_foto','required');
    $valid->set_rules('tanggal_booking','tanggal_booking','required');
    $valid->set_rules('tipe','tipe','required');
    $valid->set_rules('pembayaran','pembayaran','required');
    // $valid->set_rules('lokasi','lokasi','required');
    if ($valid->run() != false) {
      $dataform = array('username' => $i->post('penyewa'),
                         'id_paket'=> $i->post('paket_foto'),
                         'photograper'=>$i->post('photograper'),
                         'tanggal_booking'=> $i->post('tanggal_booking'),
                         'tipe_foto'=> $i->post('tipe'),
                         'jenis_pembayaran'=> $i->post('pembayaran'),
                         'lokasi_foto'=> $i->post('lokasi'),
                         'persetujuan'=>"Menunggu Persetujuan Photographer",
                          'status_booking'=>'baru');

          $this->MF_booking->add_booking($dataform);
          redirect(base_url(''));
    }
    else{
      redirect(base_url('CF_pesan/form_add/'.$i->post('photograper')));
    }

  }

}
