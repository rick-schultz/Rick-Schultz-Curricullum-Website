<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('bodyHeader');
  $this->load->view('mainMenu');
  $this->load->view('aboutMe');
  $this->load->view('education');
  $this->load->view('workExperience');
  $this->load->view('courses');
  $this->load->view('skills');
  $this->load->view('references');
  $this->load->view('layout/footer');
 }
}
