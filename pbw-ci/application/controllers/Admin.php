<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
    $this->load->helper('url');

  }

  function index(){
    $data['user'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['user'] = $this->m_admin->edit_data($where,'user')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $name= $this->input->post('name');
    $email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $data = array(
			'name' => $nama,
			'email' => $email,
            'subject' => $subject,
            'message' => $message

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'user');
    redirect('admin/');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'user');
  redirect('admin/index');
  }

  function tambah_aksi(){
		//$Nama = $this->input->post('name');
		//$Email = $this->input->post('email');
		//$Telepon = $this->input->post('telepon');
        //$Message = $this->input->post('message');

    $data = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'subject' => $_POST['subject'],
            'message' => $_POST['message']

			);
      $result = $this->m_admin->input_data('user', $data);
      
		redirect(base_url());
	}
}
