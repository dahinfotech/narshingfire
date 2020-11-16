<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {

	public function index(){
		$viewData=array(
			'title'=>'Privacy Policy',
			'pageName'=>'Privacy'
		);

		$this->load->view('Privacy/index', $viewData);
	}
}
