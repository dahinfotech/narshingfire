<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {
	
	public function index(){
		$viewData=array(
			'title'=>'Careers',
			'pageName'=>'Careers'
		);
		$this->load->view('Careers/index', $viewData);
	}
}
