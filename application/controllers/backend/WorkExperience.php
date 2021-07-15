<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WorkExperience extends CI_Controller
{

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/workexperience/index');
  $this->load->view('backend/layout/footer');
 }
}
