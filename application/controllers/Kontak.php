<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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
		$data_blog = $this->User_model->select("kontak");
		$blog['kontak'] = $data_blog;
		$this->load->view('tabelblog', $blog);
	}

	public function insertkontak()
	{
		$id_kontak = $this->input->post('id_blog');
		$subject = $this->input->post('judul');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data_input = array('subject' => $subject,
						'nama' => $nama,
						'email' => $email,
						'pesan' => $pesan);
		if($id_kontak==""){
			$this->User_model->insert($data_input,'kontak');
			redirect(site_url('kontak'));
		}else{
			$this->User_model->update($id_kontak,$data_input,'kontak','id_kontak');
			redirect(site_url('kontak'));
		}
	}

	public function update($id)
	{
		$blog = $this->db->where('id_kontak',$id)->get('kontak')->row();
		$data['kontak'] = $blog;
		$this->load->view('kontak/addkontak',$data);
	}

	public function delete($id)
	{
		$this->User_model->delete($id,'kontak','id_kontak');
		redirect(site_url('kontak'));
	}

}
?>