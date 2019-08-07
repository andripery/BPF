<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class User extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function createuser()
	{
		$this->load->view('adduser');
	}
}
?>