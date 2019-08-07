<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$this->load->view('tabelblog');
	}

	public function createblog()
	{
		$this->load->view('blog/addblog');
	}

	public function insertblog()
	{
		$id_blog = $this->input->post('id_blog');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data_input = array('username' => $username,
						'password' => $password);
		if($id_blog==""){
			$this->User_model->insert($data_input);
			redirect(site_url('welcome/admin'));
		}else{
			$this->User_model->update($id_blog,$data_input);
			redirect(site_url('welcome/admin'));
		}
	}

	public function update($id)
	{
		$blog = $this->db->where('id_blog',$id)->get('blog')->row();
		$data['blog'] = $blog;
		$this->load->view('addblog',$data);
	}

	public function delete($id)
	{
		$this->User_model->delete($id);
		redirect(site_url('welcome/admin'));
	}

}
?>