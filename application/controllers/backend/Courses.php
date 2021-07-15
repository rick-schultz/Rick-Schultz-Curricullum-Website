<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{

 public function index()
 {

  $data = array(
   'title' => 'Courses',
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
   'users' => $this->ion_auth->users()->result(), //Get all users
  );

  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/courses/index');
  $this->load->view('backend/layout/footer');
 }
}
