<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MF_user');
    $this->load->model(array('MF_user','MF_booking'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $listdata= $this->MF_booking->list_booking($username)->result_array();
    // print_r($listdata);
    $data = array('halaman' => 'dashbord_photographer.php',
                  'daftar_list'=> $listdata
                );
    $load->view('frontend/layout',$data);
  }
  function transaksi()
  {
    $tanggal=date('Y-m-d');
    $id_booking=$this->uri->segment(4);
    $load=$this->load;
    $username=$this->session->userdata('User');
    $jumlah_tagihan=$this->MF_booking->tagihan($id_booking)->row_array();
    $jumlah_traksaksi=$this->MF_booking->jumlah_transaksi_tagihan($id_booking)->row_array();
    $listbooking= $this->MF_booking->list_booking($username)->result_array();
    $listdata= $this->MF_booking->list_transaksi($id_booking)->result_array();


    // print_r($listdata);
    $data = array('halaman' => 'transaksi.php',
                  'daftar_list'=> $listdata,
                  'tagihan'=>$jumlah_tagihan,
                  "total_tagihan"=>$jumlah_traksaksi
                );
    $load->view('frontend/layout',$data);
  }
  public function add_transaksi(){
    $load=$this->load;
    $i=$this->input;
    $tanggal=date('Y-m-d');
    $id_booking=$i->post('id_booking');
    $valid 		= $this->form_validation;
    $valid->set_rules('jumlah','jumlah','required');

    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/transaksi';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $dataform = array('jumlah_transaksi' => $i->post('jumlah'),
                              'tanggal_transaksi'=>$tanggal,
                              'id_booking'=>$id_booking,
                              'foto_transaksi'=>$fileFoto1['upload_data']['file_name'],
                              'status'=> "Menunggu Konfirmasi Admin",
                               'keterangan'=>null);
                              $this->MF_booking->insert_transaksi($dataform);
                              redirect(base_url('CF_dashbord'));
          }

          else{
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>'.$this->upload->display_errors().'
                        <p>Tidak ada kata dinput.</p>
                    </div>');
                    redirect(base_url('CF_dashbord'));
          }
      }
  }

}
