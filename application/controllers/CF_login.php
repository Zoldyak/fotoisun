<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CF_login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
      $this->load->model('MF_Register');
      $this->load->library('MyPHPMailer');
  }

  function index()
  {
    $load=$this->load;
  $data = array('halaman' => 'register.php' );
    $load->view('frontend/layout',$data);
  }
  function auth(){
  $load=$this->load;
  $this->load->model('M_login');
  $valid 		= $this->form_validation;
  $valid->set_rules('username','username','required|valid_email');
  $valid->set_rules('password','password','required');

  if($valid->run() != false){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where= array('username' =>$username ,
                  'password'=>md5($password)
                );
    $jumlah=$this->M_login->cek_row($where)->num_rows();
    if ($jumlah > 0) {
      $list_user=$this->M_login->cek_list($where)->result_array();
      print_r($list_user);
      foreach ($list_user as $row ) {
      $level=$row['level'];
      $status=$row['status'];

      $this->session->set_userdata('coba','administrator');
      $this->session->set_userdata('User', $row['username']);
      $this->session->set_userdata('Level', $row['level']);
      $this->session->set_userdata('nama_lengkap',  $row['nama_lengkap']);
    }
      if ($level == 1 && $status=='Aktif') {
      redirect(base_url('admin/dashbord'));

      }
      if ($level == 2 && $status=='Aktif') {
      redirect(base_url('fotographer/CP_Home'));

      }
    }
    else{
       $this->session->set_flashdata('msg','<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>gagal login</strong></div>');
       redirect('CF_home');
      // $this->session->set_userdata('gagal_login','Gagal Login');
      // $this->session->set_flashdata('msg',
      //         '<div class="alert alert-danger">
      //           Login Gagal
      //         </div>');
      // $load->view('login');
    }

  }
}
  function create(){
    $i = $this->input;
    $load=$this->load;
    $valid 		= $this->form_validation;
    $valid->set_rules('Username','Username','required');
    $valid->set_rules('Password','Password','required');
    $valid->set_rules('nama','nama','required');
    $valid->set_rules('HP','HP','required');
    $valid->set_rules('Alamat','Alamat','required');
    // $valid->set_rules('foto','foto','required');

  if ($valid->run() != false) {
    $username=$i->post('Username');
    $where= array('username' =>$username);
    $jumlah=$this->MF_Register->list_data($username)->num_rows();
    // $jumlahuser=$this->M_Register->list_data($username)->num_rows();
    //echo $jumlah;
    if ($jumlah < 1) {
      $config['upload_path'] = './assets/frontend/img/foto_profil';
      $config['allowed_types'] = 'jpg|png|jpeg|JPEG|JPG|PNG';
      $config['max_size']  = '3048';
      $config['remove_space'] = TRUE;
      $load->library('upload',$config);
      $this->upload->initialize($config);
      if ($this->upload->do_upload('foto')) {
        $nama=$i->post('nama');
        $fileFoto1 = array('upload_data' => $this->upload->data());
        $fileFoto = $this->upload->data();
                        //email
                        $subject = 'Konfirmasi Email';
                        $message = '<p>This message has been sent for testing purposes.</p>';

                        // Get full html:
                        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                            <title>' . html_escape($subject) . '</title>
                            <style type="text/css">
                                body {
                                    font-family: Arial, Verdana, Helvetica, sans-serif;
                                    font-size: 16px;
                                }
                                .box{
                                  background:#119ad5;
                                  border: 2px solid #136ff9;
                                  width:100px;
                                  height:50px;
                                }
                                .box a{
                                    color:#ffffff;
                                    text-decoration:none;
                                    font-size:18px;
                                }
                            </style>
                        </head>
                        <body>
                        <p>Email ada baru saja didaftarkan sebagai user di <strong>Foto Isun </strong> <br>
                        silakan konfirmasi jika benar ini anda '.$i->post("nama").'<p>
                        <br>
                        <div class="box"><center><a href="http://localhost/fotoisun/CF_login/update/'.$username.'">Konfirmasi</a></center></div>
                        </body>
                        </html>';

                        // Also, for getting full html you may use the following internal method:
                        //$body = $this->email->full_html($subject, $message);
                        $fromEmail = "isunfotobanyuwangi@gmail.com";
                        $tujuan=$i->post('Username');
                       $isiEmail = "Isi email tulis disini";
                       $mail = new PHPMailer();
                       $mail->IsHTML(true);    // set email format to HTML
                       $mail->IsSMTP();   // we are going to use SMTP
                       $mail->SMTPAuth   = true; // enabled SMTP authentication
                       $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
                       $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
                       $mail->Port       = 465;                   // SMTP port to connect to GMail
                       $mail->Username   = "$fromEmail";  // alamat email kamu
                       $mail->Password   = "isunfoto321";            // password GMail
                       $mail->SetFrom('isunfotobanyuwangi@gmail.com', 'noreply');  //Siapa yg mengirim email
                       $mail->Subject    = "Subjek email";
                       $mail->Body       = $body;
                       $toEmail = $tujuan; // siapa yg menerima email ini
                       $mail->AddAddress($toEmail);

                       if(!$mail->Send()) {
                           echo "Eror: ".$mail->ErrorInfo;
                       } else {
                         $dataform = array('nama_lengkap' => $i->post('nama'),
                                           'username'=> $i->post('Username'),
                                           'Password'=>md5($i->post('Password')),
                                           'alamat_lengkap'=>$i->post('Alamat'),
                                           'no_hp'=>$i->post('HP'),
                                           'foto'=>$fileFoto1['upload_data']['file_name'],
                                           'level'=> 3,
                                            'status'=>'Tidak Aktif');
                                           $this->MF_Register->input_data($dataform);
                                           $this->session->set_flashdata('msg',
                                                   '<div class="alert alert-info">
                                                      Silakan cek email anda untuk konfirmasi
                                                   </div>');
                                              redirect(base_url(''));
                       }




      }
      else {
        $this->session->set_flashdata('msg',
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>'.$this->upload->display_errors().'
                    <p>Tidak ada kata dinput.</p>
                </div>');
      }
    }

      else {
        $this->session->set_flashdata('msg',
                '<div class="alert alert-danger">
                    <p>Anda sudah terdaftar.</p>
                </div>');
      }
    }

    $data=array(
          'halaman' => 'register.php'

    );
  $load->view('frontend/layout',$data);
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url());
    }
    function update(){
      $user=$this->uri->segment(3);
      echo $user;
      $where = array('username' => $user );
      $dataform = array('status' => 'Aktif' );
      $this->MF_Register->update_data($where,$dataform);
      $this->session->set_flashdata('msg',
              '<div class="alert alert-info">
                 Silakan Login
              </div>');
         redirect(base_url(''));
    }
}
