<?php

class Hotel_model extends CI_Model{


	

 public function get_hotel($red){
		$upit=$this->db->query("SELECT * FROM hotel");
		$red = $upit->row_array($red);
		return $red;

	 }
 public function valja_zapis(){

		// ovo mu je isto kao select * from users where username=$username and password=$password
		$this->db->where('ime',$this->input->post('hotel_name'));
		
		$query=$this->db->get('hotel');
		if($query->num_rows()==0){
			return true;

		}
		else{

			return false;
		}
	}
public function unesi_hotel_sliku($slika){


        $sql = "INSERT INTO hotel
        (slika1) VALUES ('$slika')";


$this->db->query($sql);

}
//mmoram da promenim

public function unesi_hotel_ceo($ime,$tekst,$id_user){
$last_id=$this->db->insert_id();
$sql = "UPDATE hotel
        SET ime='$ime',tekst='$tekst' WHERE id_hotel='$last_id'";
// $sql = "INSERT INTO hotel (ime,tekst) 
//         VALUES ('$ime','$tekst')";

$this->db->query($sql);

$sql2 = "INSERT INTO users_hotel (id_user,id_hotel) 
        VALUES ('$id_user','$last_id')";
$this->db->query($sql2);

}
public function svi_hoteli_po_id($id_user){

$query = $this->db->query("SELECT * FROM hotel h JOIN users_hotel uh ON h.id_hotel=uh.id_hotel WHERE uh.id_user='$id_user'");


return $query->result_array();

}


	
	
}