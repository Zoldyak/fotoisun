<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cp_inbox extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('MP_inbox'));
    //Codeigniter : Write Less Do More
  }

  function cek_inbox()
  {
    $username=$this->uri->segment(4);
      $listdata= $this->MP_inbox->count_inbox($username)->num_rows();
      if ($listdata>0) {
        echo "<a href='".base_url('fotographer/Cp_inbox/list_inbox')."'>Inbox<span class='badge badge-danger'> ".$listdata."</span></a>";
      }
      else{
        echo "<a href='".base_url('fotographer/Cp_inbox/list_inbox')."'>Inbox</span></a>";
      }

  }
  public function list_inbox()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $listdata_new= $this->MP_inbox->list_inbox_new($username)->result_array();
    // $listdata_terbaca= $this->MP_inbox->list_inbox_terbaca($username)->result_array();
    // print_r($listdata);
    $data = array('halaman' => 'list_inbox.php',
                  'daftar_list_new'=> $listdata_new,
                  // 'daftar_list_terbaca'=> $listdata_terbaca,
                );
    $load->view('photograper/layout',$data);
  }
  public function list_inbox_ajax()
  {
    $load=$this->load;
    $username=$this->session->userdata('User');
    $daftar_list_new= $this->MP_inbox->list_inbox_new($username)->result_array();
    //$listdata_terbaca= $this->MP_inbox->list_inbox_terbaca($username)->result_array();
    // print_r($listdata);
    foreach ($daftar_list_new as $rowlist_new) {
      if ($rowlist_new['notif']=='new') {
        echo '
                <li class="list-group-item" data-inbox="'.$rowlist_new['idlist'].'" style="border-bottom:2px solid #ccc">
                  <a href="#'.$rowlist_new['photographer'].'" data-inbox="'.$rowlist_new['idlist'].'class="list-inbox active"> '.$rowlist_new['photographer'].'
                    <span class="badge badge-danger">new</span>
                  </a>
                </li>';
      }
      else {
        echo '<li class="list-group-item" data-inbox="'.$rowlist_new['idlist'].'" style="border-bottom:2px solid #ccc">
          <a href="#'.$rowlist_new['photographer'].'" class="list-inbox active"> '.$rowlist_new['photographer'].'

          </a>
        </li>';
      }
    }
  }

  public function detail_inbox_ajax()
  {
    $iddetail=$this->input->post('id');
    $dataupdtelist = array('status_terbaca_photographer' => 'terbaca', );
    $where = array('id_list_inbox' => $iddetail,);
    $daftar_list_detail= $this->MP_inbox->detail_inbox($iddetail)->result_array();
    $upadtesatatuslist=$this->MP_inbox->updatelist($where,$dataupdtelist);
    $upadtesatatusdetailist=$this->MP_inbox->updatedetaillist($where,$dataupdtelist);

    foreach ($daftar_list_detail as $row_detail) {
      if ($row_detail['status_pengirim']==2) {
        echo '<div class=""><p class="text-white  text-right font-14"><span class="bg-green"> '.$row_detail['pesan'].'';
        if ($row_detail['status_terbaca_custumer']=="terbaca") {
          echo '<i class="text-blue fa fa-check font-12" aria-hidden="true"></i><i class="text-blue fa fa-check font-12" aria-hidden="true"></i>
                </span></p></div>';

        }
        else{
          echo '<i class="text-grey fa fa-check font-12" aria-hidden="true"></i><i class="text-grey fa fa-check font-12" aria-hidden="true"></i>
                </span></p></div>';
        }
      }
      else{
        echo '<div class=""><p class="text-white  text-left font-14"><span class="bg-blue"> '.$row_detail['pesan'].'</span></p></div>';
      }

    }

  }
  public function balas_pesan()
  {
    date_default_timezone_set('Asia/Jakarta');
    $idlist=$this->input->post('pesan');
    $pesan=$this->input->post('pesan1');
    $tanggal=date('Y-m-d  h:i:s');
    $dataform = array('id_list_inbox' => $idlist,
                      'pesan' => $pesan,
                      'tanggal_pesan' => $tanggal,
                      'status_pengirim' => 2,
                      'status_terbaca_custumer' => 'new',
                      'status_terbaca_photographer' => 'terbaca');
    $res=$this->db->insert('detail_inbox', $dataform);
        redirect(base_url('fotographer/Cp_inbox/list_inbox'));
  }
  public function add_pesan()
  {
    // code...
    $photographer=$this->input->post('photographer');
    $custemer=$this->session->userdata('User');
    $pesan=$this->input->post('pesan');
    $cek_idlist_inbox= $this->MP_inbox->cek_idlist_inbox($custemer,$photographer)->result_array();
    $countdata=$this->MP_inbox->cek_idlist_inbox($custemer,$photographer)->num_rows();
    if ($countdata>0) {
      foreach ($cek_idlist_inbox as $rowid) {
        $idlist=$rowid['id_list_inbox'];
      }
      $tanggal=date('Y-m-d  h:i:s');
      $dataform = array('id_list_inbox' => $idlist,
                        'pesan' => $pesan,
                        'tanggal_pesan' => $tanggal,
                        'status_pengirim' => 1,
                        'status_terbaca_custumer' => 'terbaca',
                        'status_terbaca_photographer' => 'new');
      $this->db->insert('detail_inbox', $dataform);
    }
    else {
      $dataforminsertlist=array('custumer'=>$custemer,
                      'photographer'=>$photographer,
                      'status_terbaca_custumer'=>'tebaca',
                      'status_terbaca_photographer'=>'new');
      $insert=$this->db->insert('list_inbox', $dataforminsertlist);
      if ($insert) {
        $cek_idlist_inbox= $this->MP_inbox->cek_idlist_inbox($custemer,$photographer)->result_array();
        $countdata=$this->MP_inbox->cek_idlist_inbox($custemer,$photographer)->num_rows();
        if ($countdata>0) {
          foreach ($cek_idlist_inbox as $rowid) {
            $idlist=$rowid['id_list_inbox'];
          }
          $tanggal=date('Y-m-d  h:i:s');
          $dataform = array('id_list_inbox' => $idlist,
                            'pesan' => $pesan,
                            'tanggal_pesan' => $tanggal,
                            'status_pengirim' => 1,
                            'status_terbaca_custumer' => 'terbaca',
                            'status_terbaca_photographer' => 'new');
          $this->db->insert('detail_inbox', $dataform);
          redirect(base_url('fotographer/Cp_inbox/list_inbox'));
        }
      }
    }
  }

}
