<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	} 
	
	public function Add_form()
	{		
		$this->load->view('include/header');
		$this->load->view('add_form');
		$this->load->view('include/footer');
	} 


	}
	?>
