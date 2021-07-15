<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Education extends CI_Controller
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

  $data = array(
   'title' => 'Education',
   'styles' => array(
    'bundles/summernote/summernote-bs4.css',
    'bundles/codemirror/lib/codemirror.css',
    'bundles/codemirror/theme/duotone-dark.css',
    'bundles/jquery-selectric/selectric.css'
   ),
   'scripts' => array(
    'bundles/summernote/summernote-bs4.js',
    'bundles/codemirror/lib/codemirror.js',
    'bundles/codemirror/mode/javascript/javascript.js',
    'bundles/jquery-selectric/jquery.selectric.min.js',
    'bundles/ckeditor/ckeditor.js'
   ),
   //'education' => $this->core_model->get_all('education'),
  );

  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/education/index');
  $this->load->view('backend/layout/footer');
 }
}
