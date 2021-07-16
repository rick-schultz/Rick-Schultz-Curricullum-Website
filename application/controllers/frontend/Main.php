<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

 public function index()
 {
  $data = array(
   'courses' => $this->core_model->get_all('courses'),
  );

  $this->load->view('frontend/layout/header', $data);
  $this->load->view('frontend/bodyHeader');
  $this->load->view('frontend/mainMenu');
  $this->load->view('frontend/aboutMe');
  $this->load->view('frontend/education');
  $this->load->view('frontend/workExperience');
  $this->load->view('frontend/courses');
  $this->load->view('frontend/skills');
  $this->load->view('frontend/references');
  $this->load->view('frontend/layout/footer');
 }
}
