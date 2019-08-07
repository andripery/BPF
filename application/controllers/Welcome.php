<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function blog()
	{
		$data_blog = $this->User_model->select("blog");
		$blog['blog'] = $data_blog;
		$this->load->view('blog', $blog);
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function kontak()
	{
		$data_kontak = $this->User_model->select("kontak");
		$kontak['kontak'] = $data_kontak;
		$this->load->view('tabelkontak', $kontak);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function cek_login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$cek_login = $this->User_model->login($username,$password);

		if(empty($cek_login)) redirect("/");
		else redirect(site_url('welcome/admin'));
	}

	public function admin()
	{
		$data_login = $this->User_model->select("login");
		$login['login'] = $data_login;
		$this->load->view('admin',$login);
	}

	public function tabelblog()
	{
		$data_blog = $this->User_model->select("blog");
		$blog['blog'] = $data_blog;
		$this->load->view('tabelblog', $blog);
	}

	public function createuser()
	{
		$this->load->view('adduser');
	}

	public function insertuser($value='')
	{
		# code...
	}
}
?>
