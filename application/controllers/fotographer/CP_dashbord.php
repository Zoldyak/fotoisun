<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MP_user');
    $this->load->model(array('MP_user','MP_booking'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $listdata= $this->MP_user->detail_fotografer($username)->row_array();
    $listdatagalleri= $this->MP_user->list_galleri($username)->result_array();
    $listpaket=$this->MP_user->detail_paket($username)->result_array();
    $listkomen=$this->MP_user->list_komentar($username)->result_array();
    $listkomen2=$this->MP_user->list_komentar2($username)->result_array();
    $countkomen=$this->MP_user->list_komentar($username)->num_rows();
    $listriwayat=$this->MP_user->list_riwayat($username)->result_array();
    $data = array('halaman' => 'dashbord_photographer.php',
                  'detail_data'=> $listdata,
                  'list_galleri'=>$listdatagalleri,
                  'list_paket'=> $listpaket,
                  'list_komen'=>$listkomen,
                  'list_komen2'=>$listkomen2,
                  'jumlah_komen'=>$countkomen,
                  'list_riwayat'=>$listriwayat

                );
    $load->view('photograper/layout',$data);
  }
  public function edit(){
    $load=$this->load;
    $i=$this->input;

    $valid 		= $this->form_validation;
    $valid->set_rules('nama','nama','required');
    $valid->set_rules('HP','HP','required');
    $valid->set_rules('Alamat','Alamat','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/foto_profil';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $where = array('username' => $i->post('user'), );
            $dataform = array('nama_lengkap' => $i->post('nama'),
                              'alamat_lengkap'=>$i->post('Alamat'),
                              'no_hp'=>$i->post('HP'),
                              'foto'=>$fileFoto1['upload_data']['file_name'],
                              'level'=> 2,
                               'status'=>'Aktif');
                              $this->MP_user->update_data($where,$dataform);

                                 redirect(base_url('fotographer/CP_dashbord'));
          }
          else{
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>'.$this->upload->display_errors().'
                        <p>Tidak ada kata dinput.</p>
                    </div>');
                    redirect(base_url('fotographer/CP_dashbord'));
          }
      }
}
  public function editsosmed(){
    $load=$this->load;
    $i=$this->input;
    $tipe_sosmed=$i->post('tipe_sosmed');

    $where = array('username' => $i->post('user'), );
    $dataform = array($tipe_sosmed => $i->post('nama_sosmed'), );
    $this->MP_user->update_data_sosmed($where,$dataform);
     redirect(base_url('fotographer/CP_dashbord'));
  }
  public function add_foto(){
    $load=$this->load;
    $i=$this->input;

    $valid 		= $this->form_validation;
    $valid->set_rules('lokasi','lokasi','required');
    $valid->set_rules('kategori_lokasi','kategori_lokasi','required');
    $valid->set_rules('jenis_foto','jenis_foto','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/gallery';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $where = array('username' => $i->post('user'), );
            $dataform = array('username' => $i->post('user'),
                              'lokasi' => $i->post('lokasi'),
                              'jenis_foto'=>$i->post('jenis_foto'),
                              'kategori_lokasi'=>$i->post('kategori_lokasi'),
                              'foto'=>$fileFoto1['upload_data']['file_name']);
                              $this->MP_user->insert_data_galleri($dataform);

                                 redirect(base_url('fotographer/CP_dashbord'));
          }
          else{
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>'.$this->upload->display_errors().'
                        <p>Tidak ada kata dinput.</p>
                    </div>');
                    redirect(base_url('fotographer/CP_dashbord'));
          }
      }
  }
  function add_paket(){
    $load=$this->load;
    $i=$this->input;
    $user=$this->session->userdata('User');
    $valid 		= $this->form_validation;
    $valid->set_rules('nama_paket','nama_paket','required');
    $valid->set_rules('harga','harga','required');
    //$valid->set_rules('jenis_foto','jenis_foto','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $dataform = array('username' =>$user ,
                          'nama_paket'=>$i->post('nama_paket'),
                          'detail_paket'=>$i->post('detail'),
                          'harga' =>$i->post('harga')
                        );
          $this->MP_user->insert_data_paket($dataform);
          redirect(base_url('fotographer/CP_dashbord'));
      }
      else{
        $this->session->set_flashdata('msg',
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>'.$this->upload->display_errors().'
                    <p>Tidak ada kata dinput.</p>
                </div>');
                redirect(base_url('fotographer/CP_dashbord'));
      }

  }
  function edit_paket(){
    $load=$this->load;
    $i=$this->input;

    $valid 		= $this->form_validation;
    $valid->set_rules('nama_paket','nama_paket','required');
    $valid->set_rules('harga','harga','required');
    //$valid->set_rules('jenis_foto','jenis_foto','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $where = array('id_paket' => $i->post('id_paket'), );
        $dataform = array('nama_paket'=>$i->post('nama_paket'),
                          'detail_paket'=>$i->post('detail'),
                          'harga' =>$i->post('harga')
                        );
          $this->MP_user->update_data_paket($where,$dataform);
          redirect(base_url('fotographer/CP_dashbord'));
      }
      else{
        $this->session->set_flashdata('msg',
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>'.$this->upload->display_errors().'
                    <p>Tidak ada kata dinput.</p>
                </div>');
                redirect(base_url('fotographer/CP_dashbord'));
      }

  }
  function delete_paket(){
    $id=$this->uri->segment(4);
    $this->MP_user->delete_data_paket($id);
      redirect(base_url('fotographer/CP_dashbord'));
  }

  function daftar_booking()
  {
    $load=$this->load;
    $nama=$this->session->userdata('nama_lengkap');
    $listdata= $this->MP_booking->list_booking($nama)->result_array();
    $upadate_status_terbaca_booking=$this->MP_booking->upadate_status_terbaca_booking($nama);
    // print_r($listdata);
    $data = array('halaman' => 'list_booking.php',
                  'daftar_list'=> $listdata
                );
    $load->view('photograper/layout',$data);
  }
  public function persetujuan()
  {
    $load=$this->load;
    $i=$this->input;
    $where = array('id_booking' =>  $i->post('id_booking'), );
    $dataform = array(
                      'persetujuan'=> $i->post('persetujuan'),
                      'keterangan'=>null,
                      'status_persetujuan_terbaca_oleh_custumor'=>'belum terbaca',);
                      $this->MP_booking->update_data($where,$dataform);
                        redirect(base_url('fotographer/CP_dashbord/daftar_booking'));

  }

  function transaksi()
  {
    $tanggal=date('Y-m-d');
    $id_booking=$this->uri->segment(5);
    $load=$this->load;
    $username=$this->session->userdata('User');
    $jumlah_tagihan=$this->MP_booking->tagihan($id_booking)->row_array();
    $jumlah_traksaksi=$this->MP_booking->jumlah_transaksi_tagihan($id_booking)->row_array();
    $listbooking= $this->MP_booking->list_booking($username)->result_array();
    $listdata= $this->MP_booking->list_transaksi($id_booking)->result_array();


    // print_r($listdata);
    $data = array('halaman' => 'transaksi.php',
                  'daftar_list'=> $listdata,
                  'tagihan'=>$jumlah_tagihan,
                  "total_tagihan"=>$jumlah_traksaksi
                );
    $load->view('photograper/layout',$data);
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
                              'status'=> "Berhasil",
                               'keterangan'=>null);
                              $this->MP_booking->insert_transaksi($dataform);
                              redirect(base_url('fotographer/CP_dashbord'));
          }

          else{
            $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger">
                        <h4>Oppss</h4>'.$this->upload->display_errors().'
                        <p>Tidak ada kata dinput.</p>
                    </div>');
                    redirect(base_url('fotographer/CP_dashbord'));
          }
      }
  }
  public function form_tambah_riwayat()
  {
    $username=$this->session->userdata('User');
    $load=$this->load;
    $i=$this->input;
    $valid 		= $this->form_validation;
    $valid->set_rules('riwayat','riwayat','required');
    if ($valid->run() != false) {
        $dataform = array('username' => $username,
        'nama_pekerjaan' => $i->post('riwayat'),
                      );
                      $this->MP_user->insert_riwayat($dataform);
                      redirect(base_url('fotographer/CP_dashbord'));
    }


    $data = array('halaman' => 'form_riwayat.php',
                  'jenis_form'=>'tambah'
                );
                // print_r($detai_list);
     $load->view('photograper/layout',$data);
  }
  public function form_edit_riwayat()
  {
    $id =$this->uri->segment(4);
    $load=$this->load;
    $i=$this->input;
    $valid 		= $this->form_validation;
    $valid->set_rules('riwayat','riwayat','required');
    if ($valid->run() != false) {
        $where = array('id_riwayat_pekerjaan' => $i->post('id_detail'), );
        $dataform = array('nama_pekerjaan' => $i->post('riwayat'),
                      );
                      $this->MP_user->update_riwayat($where,$dataform);
                      redirect(base_url('fotographer/CP_dashbord'));
    }
    $detai_list=$this->MP_user->list_detail_riwayat($id)->row_array();

    $data = array('halaman' => 'form_riwayat.php',
                  'daftar_list'=> $detai_list,
                  'jenis_form'=>'edit'
                );
                // print_r($detai_list);
     $load->view('photograper/layout',$data);
  }
  public function form_delete_riwayat()
  {
    $id =$this->uri->segment(4);
      $this->db->delete('riwayat_pekerjaan', array('id_riwayat_pekerjaan' => $id));
      redirect(base_url('fotographer/CP_dashbord'));
    // code...
  }
}
