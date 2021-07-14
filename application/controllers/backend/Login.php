<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

 public function index()
 {

  $data = array(
   'title' => 'Login',
  );

  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/login/index');
  $this->load->view('backend/layout/footer');
 }

 public function auth()
 {
  $identity = $this->input->post('email');
  $password = $this->input->post('password');
  $remember = ($this->input->post('remember' ? TRUE : FALSE));

  if ($this->ion_auth->login($identity, $password, $remember)) {
   redirect('dashboard');
  } else {
   redirect('restrict');
  }
 }
}
