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
    $data = array('halaman' => 'dashbord_photographer.php',
                  'detail_data'=> $listdata);
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
}
