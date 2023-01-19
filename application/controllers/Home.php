<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->view('includes/header/default_header');
        $this->load->view('includes/navbar/default_navbar');
        $this->load->view('home/home');
        $this->load->view('includes/footer/default_footer');
	}
}
 