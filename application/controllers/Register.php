<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$data['header'] = "<h1><b><i>Take the awesome PHP Codeigniter Framework with your credentials</i></b></h1>";
		$this->load->view('loginview/register',$data);
	}

	public function rauth(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$this->load->model('Person');
		$success = $this->Person->insertperson();
		if($success){
			echo("successfully register ".$name);
		}else{
			$data['header'] = "<h1><b><i>Get In awesome PHP Codeigniter Framework</i></b></h1>";
			$data['error'] = "<small>Invalid user! unauthorized credentials you are trying to access</small>";
			$this->load->view('loginview/login',$data);
		}
	}

}
