<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
   'title' => 'Registered Users',
   'styles' => array(
    'bundles/datatables/datatables.min.css',
    'bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'
   ),
   'scripts' => array(
    'bundles/datatables/datatables.min.js',
    'bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
    'bundles/jquery-ui/jquery-ui.min.js',
    'js/page/datatables.js'
   ),
   'users' => $this->ion_auth->users()->result(), //Get all users
  );

  /*   echo '<pre>';
  print_r($data['users']);
  exit(); */

  $this->load->view('backend/layout/header', $data);
  $this->load->view('backend/users/index');
  $this->load->view('backend/layout/footer');
 }
}
