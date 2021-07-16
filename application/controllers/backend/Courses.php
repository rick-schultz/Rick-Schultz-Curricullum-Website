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

    $this->load->view('backend/layout/header', $data);
    $this->load->view('backend/courses/index');
    $this->load->view('backend/layout/footer');
  }

  public function core()
  {

    $data = array(
      'course_name' => $this->input->post('course_name'),
      'course_school' => $this->input->post('course_school'),
      'course_month' => $this->input->post('course_month'),
      'course_year' => $this->input->post('course_year'),
    );

    $this->core_model->insert('courses', $data);
    redirect('courses');
  }
}
