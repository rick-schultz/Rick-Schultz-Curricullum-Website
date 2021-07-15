<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutMe extends CI_Controller
{

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/aboutme/index');
  $this->load->view('backend/layout/footer');
 }
}
