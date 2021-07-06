<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_anggota extends CI_Controller {

   function __construct(){
   parent::__construct();
   $this->load->model('M_anggota');
   }

  public function index(){
     $data['anggota'] = $this->M_anggota->data_anggota()->result();
     $data['simpanan'] = $this->M_anggota->data_simpanan()->result();
     $data['join_anggota_simpanan'] = $this->M_anggota->join2table()->result();
     $this->load->view('anggota/v_anggota',$data);
  }
}
