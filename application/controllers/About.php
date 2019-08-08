<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$data_about = $this->User_model->select("about");
		$about['about'] = $data_about;
		$this->load->view('tabelabout', $about);
	}

	public function createabout()
	{
		$this->load->view('about/addabout');
	}

	public function insertabout()
	{
		$id_about = $this->input->post('id_about');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');

		$data_input = array('judul' => $judul,
						'deskripsi' => $deskripsi);
		if($id_about==""){
			$this->User_model->insert($data_input,'about');
			redirect(site_url('about'));
		}else{
			$this->User_model->update($id_about,$data_input,'about','id_about');
			redirect(site_url('about'));
		}
	}

	public function update($id)
	{
		$about = $this->db->where('id_about',$id)->get('about')->row();
		$data['about'] = $about;
		$this->load->view('about/addabout',$data);
	}

	public function delete($id)
	{
		$this->User_model->delete($id,'about','id_about');
		redirect(site_url('about'));
	}

}
?>