<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{
		$this->load->view('index_view');
	}
	//prikazuje login_view
	public function show_loginn(){
		$this->load->library('form_validation');
		

		$this->load->view('index_view');
	}
	//prosledjujem red za koji hotel zelim da ucitam .. on se u view povecava za 1 na next a smanjuje za 1 u prev // u sustini stranicenje za 1 unos 
	public function show_hotels($red){
		$this->load->model('hotel_model');
		$data['hotel']=$this->hotel_model->get_hotel($red);
		$data['red']=$red;
		$this->load->view('hotel-single',$data);
	}


	//Metode za pozivanje view-a
	public function show_rooms(){

		$this->load->view('rooms');
	}
	public function show_room(){

		$this->load->view('room');
		
	}
	public function show_contact(){

		$this->load->view('contact');
	}
	public function show_register(){
		$this->load->view('register');

	}
	public function show_login(){
		$this->load->view('login');

	}
	public function show_moderator(){
		$this->load->model('hotel_model');
		$data['svi_hoteli_od_usera']=$this->hotel_model->svi_hoteli_po_id($this->session->userdata['id_usera']);
		$this->load->view('moderator',$data);

	}
	public function show_admin(){
		if($this->session->userdata['uloga']!=1){
		redirect('/main/restricted');}
else{
$this->load->view('admin');	
}
		
	}
	//validacija forme
	public function form_valid(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_proveri_zapise');
		//callback function mora da vrati true da bi se ceo form_validation ispunio a ako vrati false onda se ispisuje $this->form_validation->set_message('proveri_zapise','Wrong username//password');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run()){

			$this->load->model('users_model');
			//prosledjuje get_id() username kako bi dohvatio id_usera
			$id=$this->users_model->get_id($this->input->post('username'));
			$uloga=$this->users_model->get_uloga($this->input->post('username'));

			$data=array(
				'username' =>$this->input->post('username'),
				'je_logovan' =>1,
				'id_usera' =>$id,
				'uloga'=>$uloga,
				);
			$this->session->set_userdata($data);

			redirect('/main/redirecting');


		}
		else{
			
			$this->load->view('login');

		}

	}
	//validacija unosa hotela
	public function form_hotel_valid(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('hotel_name', 'Hotel name', 'required|min_length[6]|callback_proveri_zapise_hotela');
		$this->form_validation->set_rules('hotel_text', 'About hotel', 'required|min_length[10]');

		$hotelime=$this->input->post('hotel_name');

		// $this->form_validation->set_rules('prva_slika', 'Hotel picture', "callback_do_upload");
		// ovako ne treba da se radi.. mnogo problema
		
		if($this->form_validation->run()){
			
			if(!$this->do_upload()){
				$data['hotel_stanje']="<p>Error at uploading hotel picture. Check type and size</p>";
				$this->load->view('moderator',$data);
			}
			else{
				$data['hotel_stanje']="<p>Succesfully added hotel, you should add some pictres to hotel too.<br></p>";
				$this->load->model('hotel_model');
				$this->hotel_model->unesi_hotel_ceo($this->input->post('hotel_name'),$this->input->post('hotel_text'),$this->session->userdata['id_usera']);

				$data['svi_hoteli_od_usera']=$this->hotel_model->svi_hoteli_po_id($this->session->userdata['id_usera']);
				// $this->do_upload();
		
				$this->load->view('moderator',$data);
	    	}
		}
		else{

			$this->show_moderator();
		}

	}
	

	//metoda za upload slike
	 function do_upload()
	{

		$field_name="prva_slika";
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		// $config['max_width']  = '10240';
		// $config['max_height']  = '7680';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($field_name))
		{
			 

			// $this->form_validation->set_message('do_upload','Error at uploading hotel picture. Check type and size');


			return false;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$fajl=$this->upload->data();
			$this->load->model('hotel_model');
			$this->hotel_model->unesi_hotel_sliku($fajl['file_name']);

			return true;
		}
	}
	
	
	public function redirecting(){
		$uloga=$this->session->userdata['uloga'];
		if($uloga==1){

			$this->load->view('admin');
		}
		if($uloga==2){

			$this->show_moderator();
		}
		if($uloga==3){

			$this->load->view('korisnik');
		}
	}
	//
	public function valja(){
		
		if($this->session->userdata('je_logovan')){
			$this->load->view('valja_view');

		}
		else{
			redirect('main/restricted');
		}
		
		

	}
	//proverava da li postoji korisnik sa zadatim username-om i passwordom u bazi
	public function proveri_zapise(){

		$this->load->model('users_model');
		if($this->users_model->valja_zapis()){
			return true;

		}
		else{
			$this->form_validation->set_message('proveri_zapise','Wrong username or password');
			return false;
		}
	}
	//logout metoda - brisanje sesije
	public function logout(){
		$this->session->sess_destroy();
		redirect('main');

	}
	// proverava da li vec postoji hotel sa tim imenom
	public function proveri_zapise_hotela(){

		$this->load->model('hotel_model');
		if($this->hotel_model->valja_zapis()){
			return true;

		}
		else{
			$this->form_validation->set_message('proveri_zapise_hotela','That hotel already exists!');
			return false;
		}
	}

}

