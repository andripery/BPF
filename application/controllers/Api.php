<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: *");
	}
	//Menampilkan data user
	function user_get($id_login='')
	{
		if($id_login=='') 
			$login = $this->db->get('login')->result();
		else{
			$this->db->where('id_login', $id_login);
			$login = $this->db->get('login')->result();
		}
		$this->response($login, 200);
	}
	function kontak_get($id_kontak='')
	{
		if($id_kontak=='') 
			$kontak = $this->db->get('kontak')->result();
		else{
			$this->db->where('id_kontak', $id_kontak);
			$kontak = $this->db->get('kontak')->result();
		}
		$this->response($kontak, 200);
	}
	function user_post()
	{
		$data = array(
				'username' => $this->post('username'),
				'password' => $this->post('password'));
		$insert = $this->db->insert('login', $data);
		if($insert){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function kontak_post()
	{
		$data = array(
				'subject' => $this->post('subject'),
				'nama' => $this->post('nama'),
				'email' => $this->post('email'),
				'pesan' => $this->post('pesan'));
		$insert = $this->db->insert('kontak', $data);
		if($insert){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function user_put()
	{
		$id_login = $this->put('id_login');
		$data = array(
					'id_login' => $this->put('id_login'),
					'username' => $this->put('username'),
					'password' => $this->put('password'));
		$this->db->where('id_login', $id_login);
		$update = $this->db->update('login', $data);
		if($update){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function kontak_put()
	{
		$id_kontak = $this->put('id_kontak');
		$data = array(
					'id_kontak' => $this->put('id_kontak'),
					'subject' => $this->put('subject'),
					'nama' => $this->put('nama'),
					'email' => $this->put('email'),
					'pesan' => $this->put('pesan'));
		$this->db->where('id_kontak', $id_kontak);
		$update = $this->db->update('kontak', $data);
		if($update){
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	function user_delete()
	{
		$id_login = $this->delete('id_login');
		$this->db->where('id_login', $id_login);
		$delete = $this->db->delete('login');
		if($delete){
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail'), 502);
		}
	}
	function kontak_delete()
	{
		$id_kontak = $this->delete('id_kontak');
		$this->db->where('id_kontak', $id_kontak);
		$delete = $this->db->delete('kontak');
		if($delete){
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail'), 502);
		}
	}
}
?>