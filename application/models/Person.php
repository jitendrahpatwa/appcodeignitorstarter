<?php
class Person extends CI_Model {
	public $name;
	public $id;
	public $email;
	public $age;

	public function __construct(){
		parent::__construct();
	}

	public function getperson(){
		$query = $this->db->get('person');
		return $query->result();
	}

	public function insertperson(){
		$this->name = $_POST['name'];
		$this->email = $_POST['email'];
		$this->age = $_POST['age'];

		$this->db->insert('person',$this);
	}

	public function updateperson(){
		$this->name = $_POST['name'];
		$this->email = $_POST['email'];
		$this->age = $_POST['age'];

		$this->db->update('person',$this,array('id'=>$_POST['id']));		
	}
}
?>