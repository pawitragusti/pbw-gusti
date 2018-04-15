<?php

class Report extends CI_Controller{
function __construct(){
    parent::__construct();
        $this->load->model('m_admin');
    $this->load->helper('url');
  }

  function index(){
     $data['user'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_report',$data);
  }

  function download(){
    $filename = 'Report.xls';
  header('Content-Type:   application/ms-excel');
  header('Content-Disposition: attachment; filename=' .$filename);
  $data['user'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_report',$data);

  }
}