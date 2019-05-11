<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP_dashbord extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MP_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $listdata= $this->MP_user->detail_fotografer($username)->row_array();
    $listdatagalleri= $this->MP_user->list_galleri($username)->result_array();
    $listpaket=$this->MP_user->detail_paket($username)->result_array();
    $data = array('halaman' => 'dashbord_photographer.php',
                  'detail_data'=> $listdata,
                  'list_galleri'=>$listdatagalleri,
                  'list_paket'=> $listpaket
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

    $valid 		= $this->form_validation;
    $valid->set_rules('nama_paket','nama_paket','required');
    $valid->set_rules('harga','harga','required');
    //$valid->set_rules('jenis_foto','jenis_foto','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $dataform = array('username' =>$i->post('user') ,
                          'nama_paket'=>$i->post('nama_paket'),
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
}
