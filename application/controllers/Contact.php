<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()	{
		$viewData=array(
			'title'=>'Contact Us',
			'pageName'=>'Contact'
		);
		$this->load->view('Contact/index', $viewData);
	}

	public function submitForm(){

		if ($this->input->is_ajax_request()){
			$postData= $this->input->post();
			$firstname= isset($postData['uname']) ? $postData['uname'] : '';
			$phone= isset($postData['phone']) ? $postData['phone'] : '';
			
        	if($firstname!='' && $phone!=''){
    			$to = "narshingfire@gmail.com, dahinfotech3@gmail.com";
				$subject = isset($postData['subject']) ? $postData['subject'] : '';
				$email = isset($postData['email']) ? $postData['email'] : '';
				$msg = isset($postData['message']) ? $postData['message'] : '';

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
								<td>Message : </td>
								<td>$msg</td>
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
			    //$headers .= "This is a MIME encoded message." . $eol;

				/*$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: <info@dahinfotech.com>' . "\r\n";*/

				$body = $eol;
			    //$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
			    //$body .= "Content-Transfer-Encoding: 8bit" . $eol;
			    $body .= $message . $eol;

				if(mail($to, 'Web Enquiry- '.$subject, $body, $headers)){
					echo "success";
				}
        	}
        }
        echo 'success';
        exit;
	}
}
