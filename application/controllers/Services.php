<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index(){
		$this->load->view('Services/index');
	}

	public function airDuctCleaning(){ 
		$viewData=array(
			'title'=>'Air Duct Cleaning',
			'pageName'=>'airDuctCleaning'
		);
		$this->load->view('Services/air_duct_cleaning', $viewData);
	}

	public function passiveFireProtection(){
		$viewData=array(
			'title'=>'Passive Fire Protection',
			'pageName'=>'passiveFireProtection'
		);
		$this->load->view('Services/passive_fire_protection', $viewData);
	}

	public function backFlowDevice(){
		$viewData=array(
			'title'=>'Backflow Devices',
			'pageName'=>'backFlowDevice'
		);
		$this->load->view('Services/back_flow_device', $viewData);
	}

	public function fireExtinguisher(){
		$viewData=array(
			'title'=>'Fire Extinguishers',
			'pageName'=>'fireExtinguisher'
		);
		$this->load->view('Services/fire_extinguisher', $viewData);
	}

}
