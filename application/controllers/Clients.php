<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	
	public function index(){
		$viewData=array(
			'title'=>'Clients',
			'pageName'=>'Clients'
		);
		$this->load->view('Clients/index', $viewData);
	}
}
