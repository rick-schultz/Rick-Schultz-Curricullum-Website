<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('frontend/layout/oldHeader');
		$this->load->view('frontend/welcome_message');
		$this->load->view('frontend/layout/oldFooter');
	}
}
