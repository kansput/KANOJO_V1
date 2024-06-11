<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pageuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/home',$data);
    }
    public function usertalent(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/talent',$data);
    }
    public function userabout(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/about',$data);
    }

    public function payment(){
		$this->load->view('user/payment',$data);
	}
	
    public function hannahs(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/hannahs',$data);
		
	}
	public function spicy(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/spicy',$data);
	}
	public function anna(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/anna',$data);
	}
	public function hannah(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/hannah',$data);
	}
	public function freya(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/freya',$data);
	}
	public function azizi(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/azizi',$data);
	}
	public function catheez(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/catheez',$data);
	}
	public function hanni(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/hanni',$data);
	}
	public function dasha(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/dasha',$data);
	}
	public function elina(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/elina',$data);
	}
	public function wonyoung(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/wonyoung',$data);
	}
	public function bara(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/bara',$data);
	}
	public function kanna(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/kanna',$data);
	}
	public function justine(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/justine',$data);
	}
	public function danielle(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/danielle',$data);
	}
	public function hansohee(){
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('talent/hansohee',$data);
	}

}
