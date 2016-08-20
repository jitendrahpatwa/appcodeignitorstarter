<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$data['header'] = "<h1><b><i>Get In awesome PHP Codeigniter Framework</i></b></h1>";
        $this->load->view('loginview/login',$data);
	}

	public function getu(){
		$query = $this->db->get('person');
		print_r($query->result());
	}

	public function auth(){
		/*$this->load->model('Person');
		$data['result'] = $this->Person->getperson();
		var_dump($data['result']);*/
		$name = $_POST['name'];
		$age = $_POST['age'];
		$sql = "select * from person where name = ? and age = ?";
		$query = $this->db->query($sql,array($name,$age));
		if($query->result()){
			echo("successfully logged in ".$name);
		}else{
			$data['header'] = "<h1><b><i>Get In awesome PHP Codeigniter Framework</i></b></h1>";
			$data['error'] = "<small>Invalid user! unauthorized credentials you are trying to access</small>";
			$this->load->view('loginview/login',$data);
			/*echo "<script>window.location.assign('/login')</script>";*/
		}
	}

}
