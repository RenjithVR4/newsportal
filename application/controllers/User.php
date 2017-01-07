<?php
/*********************************************************
   Author:      Renjith VR
   Version:     1.0
   Date:        31-10-2016
   FileName:    register.php
   Description : Controller for user routines
**********************************************************/


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('text');
		$this->load->helper('string');
		$this->load->helper('form', 'url');
		$this->load->library('email');
		$this->load->model('UserModel');
	}

	public function register()
	{
		$this->load->helper('email');
		$data = array();

		if($this->input->post('submit'))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">', '</div>');

			$this->form_validation->set_rules('firstname', 'First Name', 'required', array('required' => 'Please enter firstname'));

			$this->form_validation->set_rules('lastname', 'First Name', 'required', array('required' => 'Please enter lastname'));

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', array('required' => 'Please enter email address', 'valid_email' => 'Please enter a valid email address','is_unique' => 'Email already used!Try another'));

			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[25]', array('required' => 'Please enter password', 'min_length' => 'The password must be at least 4 characters long'));

			$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]', array('required' => 'Please enter confirm password', 'matches' => 'Password  does\'t match with confirmation password'));

			$this->form_validation->set_rules('gender', 'Gender', 'required', array('required' => 'Please select gender'));

			if(!empty($this->input->post('age')))
			{
				$this->form_validation->set_rules('age', 'Age', 'numeric', array('numeric' => 'Please enter numbers'));
			}

			if($this->form_validation->run())
			{
				$formData = array();

				$date = date('Y-m-d h:i:s');

				$formData['iduser'] = substr(md5($date), 0, 8);
				$formData['firstname'] = trim($this->input->post('firstname'));
				$formData['lastname'] =  trim($this->input->post('lastname'));
				$formData['email'] = trim($this->input->post('email'));

				//password salt
				if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH)
				{
					  $salt = '$2y$11$' . substr(md5($date . ';'), 0, 22);
					  $password = crypt(trim($this->input->post('password')), $salt);
				}

				$formData['password'] = $password;
				$formData['gender'] = $this->input->post('gender');

				if(!empty($this->input->post('age')))
				{
					$formData['age'] = trim($this->input->post('age'));
				}

				if(!empty($this->input->post('city')))
				{
					$formData['city'] = trim($this->input->post('city'));
				}

				if(!empty($this->input->post('country')))
				{
					$formData['country'] = trim($this->input->post('country'));
				}

				//Generating verificationCode
				$verificationCode = uniqid(substr(md5($date), 0, 75));
				$formData['verificationcode'] = $verificationCode;

				// $addUser = $this->UserModel->adduser($formData);

				// if($addUser)
				// {
					//Sending email
					$subject = 'This is a test';
$message = '<p>This message has been sent for testing purposes.</p>';

// Get full html:
$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';


					$this->email->from('renjithvr.official@gmail.com');   //change it
					    $this->email->to('renjithvr.blog@gmail.com');       //change it
					    $this->email->subject($subject);
					    $this->email->message($body);
					    if ($this->email->send()) {
					        $data['success'] = 1;
					    } else {
					        $data['success'] = 0;
					        $data['error'] = $this->email->print_debugger(array('headers'));
					    }
					    echo "<pre>";
					    print_r($data);
					    echo "</pre>";

				// }
			}

		}

		$data['gender'] = array('' => 'Select','male' => 'Male','female' => 'Female','other' => 'Other');

		$this->load->view('common/header');
		$this->load->view('register', $data);
		$this->load->view('common/footer');

	}

	public function login()
	{
		$this->load->view('common/header');
		$this->load->view('login');
		$this->load->view('common/footer');
	}


}
