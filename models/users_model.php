<?php

class Users_model extends CI_Model{


	public function valja_zapis(){

		// ovo mu je isto kao select * from users where username=$username and password=$password
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query=$this->db->get('users');
		if($query->num_rows()==1){
			return true;

		}
		else{

			return false;
		}
	}
	
	// public function o_useru(){
	// 	$this->db->where('username',$this->input->post('username'));
	// 	$svi_useri=$this->db->get('users');
	// 	return $svi_useri->result_array();
	// }
	public function get_id($username){
		// ovo vraca vrednost id_user ali samo ako upit vraca jednu vrednost
		$query = $this->db->query("SELECT id_user FROM users WHERE username='$username'");
		$row = $query->row_array();
		return $row['id_user'];
		



	}
	public function get_uloga($username){

		$query=$this->db->query("SELECT uloga FROM users WHERE username='$username'");
		$row=$query->row_array();
		return $row['uloga'];
	}
}