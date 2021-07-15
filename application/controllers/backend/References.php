<?php
defined('BASEPATH') or exit('No direct script access allowed');

class References extends CI_Controller
{

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/references/index');
  $this->load->view('backend/layout/footer');
 }
}
