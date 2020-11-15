<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$viewData=array(
			'title'=>'Product Extinguisher',
			'pageName'=>'Products'
		);
		$this->load->view('Products/extinguisher', $viewData);
	}

	public function fireSuppression(){
		$viewData=array(
			'title'=>'Product Fire Suppression',
			'pageName'=>'fireSuppression'
		);
		$this->load->view('Products/fire_suppression', $viewData);
	}

	public function waterSystem(){
		$viewData=array(
			'title'=>'Product Water System',
			'pageName'=>'waterSystem'
		);
		$this->load->view('Products/water_system', $viewData);
	}

	public function fillingMachine(){
		$viewData=array(
			'title'=>'Product Extinguisher Filling Machine',
			'pageName'=>'fillingMachine'
		);
		$this->load->view('Products/filling_machine', $viewData);
	}

	public function submitEnquiryFrm(){
		if ($this->input->is_ajax_request()){
			$postData= $this->input->post();
			$firstname= isset($postData['first_name']) ? $postData['first_name'] : '';
			$phone= isset($postData['mobile_no']) ? $postData['mobile_no'] : '';
			
        	if($firstname!='' && $phone!=''){
    			$to = "narshingfire@gmail.com, dahinfotech3@gmail.com";
				$subject = isset($postData['inquiry_product']) ? $postData['inquiry_product'] : '';
				$email = isset($postData['email']) ? $postData['email'] : '';

				$message = "
				<html>
					<head>
						<title>Web enquery</title>
					</head>
					<body>
						<p>Hi,</p>
						<p>Please find my contact details as mention below, I want to use your service. Kindly let me know details.</p>
						<table>
							<tr>
								<td>First Name : </td>
								<td>$firstname</td>
							</tr>
							<tr>
								<td>Email : </td>
								<td>$email</td>
							</tr>
							<tr>
								<td>Phone No : </td>
								<td>$phone</td>
							</tr>
							<tr>
								<td>Product : </td>
								<td>$subject</td>
							</tr>
							
						</table>
					</body>
				</html>
				";

				// Always set content-type when sending HTML email
				$separator = md5(time());
				$eol = "\r\n";

				$headers = "From: <narshingfire@gmail.com>" . $eol;
			    $headers .= "MIME-Version: 1.0" . $eol;
			    $headers .= "Content-type:text/html;charset=UTF-8" . $eol;
			    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
			    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;

				$body = $eol;
			    $body .= $message . $eol;

				if(mail($to, 'Web Enquiry- '.$subject, $body, $headers)){
					echo "success";
				}
        	}
        }
        echo 'success';
        exit;
	}



} //end class
