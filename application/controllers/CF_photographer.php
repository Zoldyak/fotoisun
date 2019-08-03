<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_photographer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->load->model('MF_user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $load=$this->load;
    $listdata= $this->MF_user->list_fotografer()->result_array();
    $data = array('halaman' => 'photographer.php',
                  'daftar'  => $listdata );
    $load->view('frontend/layout',$data);
  }
  function detail(){
    $load=$this->load;
    $iduser=$this->uri->segment(3);
      $rowid= $this->MF_user->$iduser($username)->row_array();
    $username=$this->uri->segment(3);
    //echo "saya".$username;
    $listdata= $this->MF_user->detail_fotografer($username)->row_array();
    // print_r($listdata);
    $listdatagalleri= $this->MF_user->list_galleri($username)->result_array();
    $listpaket=$this->MF_user->detail_paket($username)->result_array();
    $listkomen=$this->MF_user->list_komentar($username)->result_array();
    $listkomen2=$this->MF_user->list_komentar2($username)->result_array();
    $countkomen=$this->MF_user->count_komen($username)->num_rows();
      $listriwayat=$this->MF_user->list_riwayat($username)->result_array();
    // if(!empty($countkomen)){
    //     echo "jumlah".$countkomen;
    // }
    // else{
    //     echo "jumlah".$countkomen;
    // }

    // print_r($listpaket);
    $data = array('halaman' => 'detail_photographer.php',
                  'detail_data'=> $listdata,
                  'list_galleri'=>$listdatagalleri,
                  'list_paket'=> $listpaket,
                  'list_komen'=>$listkomen,
                  'list_komen2'=>$listkomen2,
                  'jumlah_komen'=>$countkomen,
                  'list_riwayat'=>$listriwayat
                );
    //$data = array('halaman' => 'detail_photographer.php' );
    $load->view('frontend/layout',$data);
  }
  public function komentar()
  {
    $load=$this->load;
    date_default_timezone_set('Asia/Jakarta');
    $tanggal=date('Y-m-d H:i:s');
    $photograp=$this->input->post('photographer');
    $komen = $this->input->post('komen');
    $rating= $this->input->post('rating');
    $customer=$this->session->userdata('User');
    $config['upload_path'] = './assets/frontend/img/komentar';
    $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
    $config['max_size']  = '3048';
    $config['remove_space'] = TRUE;
    $load->library('upload',$config);
    $this->upload->initialize($config);
    if ($this->upload->do_upload('foto')) {
      $fileFoto1 = array('upload_data' => $this->upload->data());
      $dataform = array('komentar' => $komen,
                        'rating'=>$rating,
                        'username'=>$customer,
                        'photographer'=>$photograp,
                        'tanggal_komen'=>$tanggal,
                        'foto_komentar'=>$fileFoto1['upload_data']['file_name']);
      $this->MF_user->insert_komen($dataform);
    }
    else{
      $dataform = array('komentar' => $komen,
                        'rating'=>$rating,
                        'username'=>$customer,
                        'photographer'=>$photograp,
                        'tanggal_komen'=>$tanggal);
      $this->MF_user->insert_komen($dataform);
    }

    redirect(base_url('CF_photographer/detail/'.$photograp));
  }

}
