<?php 


	defined('BASEPATH') OR exit ("No direct script access allowed");


	class Utama extends CI_Controller{

		public function index(){
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('tampilan-utama');
			$this->load->view('footer');
		}
	}


 ?>