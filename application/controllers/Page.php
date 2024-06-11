<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index(){
		$this->load->view('_partialsguest/headguest');
		$this->load->view('_partialsguest/headerguest');
		$this->load->view('guest/homeguest');
		$this->load->view('_partialsguest/footerguest');
	}
	public function talent(){
		$this->load->view('guest/talentguest');
	}
	public function about(){
		$this->load->view('guest/aboutguest');
	}

	public function hannahs(){
		$this->load->view('talent/hannahs');
	}
	public function spicy(){
		$this->load->view('talent/spicy');
	}
	public function anna(){
		$this->load->view('talent/anna');
	}
	public function hannah(){
		$this->load->view('talent/hannah');
	}
	public function freya(){
		$this->load->view('talent/freya');
	}
	public function azizi(){
		$this->load->view('talent/azizi');
	}
	public function catheez(){
		$this->load->view('talent/catheez');
	}
	public function hanni(){
		$this->load->view('talent/hanni');
	}

}
