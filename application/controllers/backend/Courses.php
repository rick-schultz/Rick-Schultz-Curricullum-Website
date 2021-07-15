<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
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
   'courses' => $this->core_model->get_all('courses'),
  );

  /*   echo '<pre>';
  print_r($data['courses']);
  exit(); */

  /* 
  Array
(
    [0] => stdClass Object
        (
            [course_id] => 1
            [course_name] => Understanding the Basics of Programming
            [course_school] => Dev Samurai
            [course_month] => April
            [course_year] => 2021
        )
) */


  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/courses/index');
  $this->load->view('backend/layout/footer');
 }
}
