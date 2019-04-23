<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MA_Register');
    //Codeigniter : Write Less Do More
  }

  function list_fotografer()
  {
      $listdata= $this->MA_Register->list_fotografer()->result_array();
    $data=array(
          'halaman' => 'user/list.php',
          'daftar'  => $listdata
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
                              $this->MA_Register->update_data($where,$dataform);

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
    $id=$this->uri->segment(4);
    $listdata= $this->MA_Register->detail_fotografer($id)->result_array();
    $data=array(
          'halaman' => 'user/form.php',
          'jenis_form'=>'edit',
          'data_edit'  => $listdata
    );
        $load->view('admin/dashbord.php',$data);
  }
  public function delete(){
    $load=$this->load;
    $id=$this->uri->segment(4);
    $this->db->delete('user', array('username' => $id));
    redirect(base_url('admin/User/list_fotografer'));
  }

}
