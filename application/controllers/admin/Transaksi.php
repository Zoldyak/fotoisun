<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MA_Register');
    $this->load->model('MA_booking');
    //Codeigniter : Write Less Do More
  }

  function list_booking()
  {
    $listdata= $this->MA_booking->list_booking()->result_array();
      //$listdata= $this->MA_Register->list_fotografer()->result_array();
    $data=array(
          'halaman' => 'transaksi/list.php',
          'daftar_list'  => $listdata
    );
    $load=$this->load;
    $load->view('admin/dashbord.php',$data);
  }
  function list_transaksi()
  {

    $tanggal=date('Y-m-d');
    $id_booking=$this->uri->segment(5);
    $load=$this->load;
    $username=$this->session->userdata('User');
    $jumlah_tagihan=$this->MA_booking->tagihan($id_booking)->row_array();
    $jumlah_traksaksi=$this->MA_booking->jumlah_transaksi_tagihan($id_booking)->row_array();
    $listbooking= $this->MA_booking->list_booking($username)->result_array();
    $listdata= $this->MA_booking->list_transaksi($id_booking)->result_array();
    $this->MA_booking->update_booking($id_booking);
    $this->MA_booking->update_status_terbaca_admin($id_booking);
    $data=array(
          'halaman' => 'transaksi/detail_transkasi.php',
          'daftar_list'  => $listdata,
          'tagihan'=>$jumlah_tagihan,
          "total_tagihan"=>$jumlah_traksaksi
    );
    $load=$this->load;
    $load->view('admin/dashbord.php',$data);
  }
  public function tambah(){
    $load=$this->load;
    $i=$this->input;
    $valid 		= $this->form_validation;
    $valid->set_rules('Username','Username','required');
    $valid->set_rules('Password','Password','required');
    $valid->set_rules('nama','nama','required');
    $valid->set_rules('HP','HP','required');
    $valid->set_rules('Alamat','Alamat','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/foto_profil';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $dataform = array('nama_lengkap' => $i->post('nama'),
                              'username'=> $i->post('Username'),
                              'Password'=>md5($i->post('Password')),
                              'alamat_lengkap'=>$i->post('Alamat'),
                              'no_hp'=>$i->post('HP'),
                              'foto'=>$fileFoto1['upload_data']['file_name'],
                              'level'=> 2,
                               'status'=>'Aktif');
                              $this->MA_Register->input_data($dataform);

                                 redirect(base_url('admin/User/list_fotografer'));
          }
          else{
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>'.$this->upload->display_errors().'
                        <p>Tidak ada kata dinput.</p>
                    </div>');
                    redirect(base_url('admin/User/tambah'));
          }
      }
    $data=array(
          'halaman' => 'user/form.php',
          'jenis_form'=>'tambah'
    );
    $load->view('admin/dashbord.php',$data);
  }

  public function update(){
    $load=$this->load;
    $i=$this->input;
    $where = array('id_transaksi' =>  $i->post('id_transaksi'), );
    $dataform = array(
                      'status'=> $i->post('status'),
                      // 'keterangan'=>$i->post('keterangan'),
                      'status_transaksi_terbaca_admin'=>'sudah terbaca',
                      'status_konfirmasi_transaksi_terbaca_customer'=>"belum terbaca");
                      $this->MA_booking->update_data($where,$dataform);
                      redirect(base_url('admin/Transaksi/list_booking'));

  }
  public function delete(){
    $load=$this->load;
    $id=$this->uri->segment(4);
    $this->db->delete('user', array('username' => $id));
    redirect(base_url('admin/User/list_fotografer'));
  }
  public function cek_transaksi()
  {

    // $username=$this->uri->segment(4);
    //echo $username=$this->uri->segment(4);
    // $list_fotografer=$this->MP_user->detail_fotografer($username)->row_array();
    // $nama_lengkap= $list_fotografer['nama_lengkap'];
    $counttransaksi=$this->MA_booking->count_transaksi()->num_rows();
    echo "<span class='badge badge-danger'> ".$counttransaksi."</span>";
  }

}
