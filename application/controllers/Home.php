<?php
/*********************************************************
   Author:      Renjith VR
   Version:     1.0
   Date:        30-10-2016
   FileName:    home.php
   Description : Controller for home page
**********************************************************/

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('index');
		$this->load->view('common/footer');
	}

	public function about()
	{
		$this->load->view('common/header');
		$this->load->view('about');
		$this->load->view('common/footer');
	}

	public function contact()
	{
		$this->load->view('common/header');
		$this->load->view('contact');
		$this->load->view('common/footer');
	}
}
