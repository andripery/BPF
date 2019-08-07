<?php 
/**
 * 
 */
class User_model extends CI_Model
{
	public function login($username_user,$password_user){
		return $this->db->query("select * from login where 
							username='".$username_user."' 
							and password='".$password_user."'")->row();
	}

	public function insert($data)
	{
		$this->db->insert('login',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_login',$id);
		$this->db->delete('login');
	}

	public function update($id,$data)
	{
		$this->db->where('id_login',$id);
		$this->db->update('login',$data);
	}

	public function select($select)
	{
		return $this->db->get($select)->result();
	}
	// public function register($username_user,$email_user,$password_user){
	// 	return $this->db->query("insert into tib(	nama_user,email_user,password_user)
	// 		values ('$username_user','$email_user','$password_user')");
	// }
}
 ?>