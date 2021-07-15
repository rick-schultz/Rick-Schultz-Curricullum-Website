<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

 public function __construct()
 {
  parent::__construct(); {
   //Valid session?
   if (!$this->ion_auth->logged_in()) {
    redirect('restrict');
   }
  }
 }

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/home/index');
  $this->load->view('backend/layout/footer');
 }
}
