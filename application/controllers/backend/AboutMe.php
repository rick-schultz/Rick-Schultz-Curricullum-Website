<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutMe extends CI_Controller
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
   'title' => 'About Me',
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
   //'aboutme' => $this->core_model->get_all('aboutme'),
  );

  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/aboutme/index');
  $this->load->view('backend/layout/footer');
 }
}
