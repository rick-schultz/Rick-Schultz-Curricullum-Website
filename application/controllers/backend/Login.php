<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/login/index');
  $this->load->view('backend/layout/footer');
 }
}
