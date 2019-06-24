<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('MA_jadwal'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
  $listdata= $this->MA_jadwal->list_jadwal()->result_array();
  $data=array(
        'halaman' => 'jadwal/list.php',
        'daftar'  => $listdata
  );
  $load=$this->load;
  $load->view('admin/dashbord.php',$data);
  }
  public function tambah(){
    $load=$this->load;
    $i=$this->input;
    $valid 		= $this->form_validation;
    $valid->set_rules('judul','judul','required');
    $valid->set_rules('detail','detail','required');
    $valid->set_rules('tanggal','tanggal','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/jadwal';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $dataform = array('judul_jadwal' => $i->post('judul'),
                              'detail_jadwal'=> $i->post('detail'),
                              'tanggal_jadwal'=>md5($i->post('tanggal')),
                              'foto_jadwal'=>$fileFoto1['upload_data']['file_name'],);
                              $this->MA_jadwal->input_data($dataform);

                                 redirect(base_url('admin/Jadwal/'));
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
          'halaman' => 'Jadwal/form.php',
          'jenis_form'=>'tambah'
    );
    $load->view('admin/dashbord.php',$data);
  }

  public function edit(){
    $load=$this->load;
    $i=$this->input;

    $valid 		= $this->form_validation;
    $valid->set_rules('judul','judul','required');
    $valid->set_rules('detail','detail','required');
    $valid->set_rules('tanggal','tanggal','required');
    // $valid->set_rules('foto','foto','required');
      if ($valid->run() != false) {
        $config['upload_path'] = './assets/frontend/img/jadwal';
        $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
        $config['max_size']  = '3048';
        $config['remove_space'] = TRUE;
        $load->library('upload',$config);
        $this->upload->initialize($config);
          if ($this->upload->do_upload('foto')) {
            $fileFoto1 = array('upload_data' => $this->upload->data());
            $where = array('id_jadwal' => $i->post('id'), );
            $dataform = array('judul_jadwal' => $i->post('judul'),
                              'detail_jadwal'=>$i->post('detail'),
                              'tanggal_jadwal'=>$i->post('tanggal'),
                              'foto_jadwal'=>$fileFoto1['upload_data']['file_name'],);
                              $this->MA_jadwal->update_data($where,$dataform);

                                 redirect(base_url('admin/jadwal/'));
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
    $id=$this->uri->segment(4);
    $listdata= $this->MA_jadwal->detail_jadwal($id)->row_array();
    $data=array(
          'halaman' => 'Jadwal/form.php',
          'jenis_form'=>'edit',
          'data_edit'  => $listdata
    );
        $load->view('admin/dashbord.php',$data);
  }
  public function delete(){
    $load=$this->load;
    $id=$this->uri->segment(4);
    $this->db->delete('jadwal', array('id_jadwal' => $id));
    redirect(base_url('admin/jadwal/'));
  }
}
