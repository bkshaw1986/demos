<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()	{
		$this->load->view('includes/CommonHeader');
		$this->load->view('Home');
		$this->load->view('includes/CommonFooter');
	}
	
}