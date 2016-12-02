<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->database();

		$usr = $this->db->get("usuario")->result();

		print_r($usr);

		$this->load->view('welcome_message');
	}
}
