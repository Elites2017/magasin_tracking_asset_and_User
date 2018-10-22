<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm1 extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		//$this->load->library('Layouts');
		//$this->load->model('Conekcompte');
		$this->load->model('DB_adm');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
	}
	

public function index()
	{
		//if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	// {
		$page="Creer_compte";
		//$info=$this->Conekcompte->select_lastemploye();
		$data=array( 'contents'=>$page);
		$this->load->view('template/tmp',$data);
		//}
	//else{
	//	$d=$this->session->userdata('login');
	//	var_dump($d);
		//redirect("login");
	}
		
	
public function ajouter_Produit()
	{
				$this->form_validation->set_rules('txtName', 'txtName',  'required|max_length[15]');
				$this->form_validation->set_rules('txtcode', 'txtcode',  'required|max_length[70]');
				$this->form_validation->set_rules('txtprix', 'txtprix', 'required|max_length[15]');
				$this->form_validation->set_rules('txtdescrip', 'txtdescrip', 'required|max_length[200]');   
		

		   
				$data = array(
					'Nom_produit'=>$this->input->post('txtName'),
					'code_produit'=>$this->input->post('txtcode'),
					'prix_produit'=>$this->input->post('txtprix'),
					'description'=>$this->input->post('txtdescrip'),
						     );
                 
				$this->DB_adm->ajouter($data);
				redirect("Dashboard");
       		  		
	}
}