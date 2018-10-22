<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('form');
		$this->load->model('users');
		$this->load->model('Dbadmin');
		$this->load->helper('url');
		$this->load->library('form_validation');
    }
	
	public function index()
    {
    	if($this->session->userdata('login'))
		{
			
		   
		  redirect('GestionUser');

		}
			else
			{
				if ($this->session->userdata('privillege')) {
				 $this->session->unset_userdata('privillege');
                   session_destroy();
			}
			$this->load->view('index');
	   	    }
    }
	
	public function verify()
    {
		$this->form_validation->set_rules('identity', 'identity', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == False)
		{
			$this->load->view('index');
			echo "not ok";
        }
        	else
        	{
			//	$encode ="cd897f6d12f1382840cbf2c020331ef4";   
				$username = $this->input->post('identity');
				$password = $this->input->post('password');
               //$final_encode = $encode.sha1($password); 
                //query the database
        		$result = $this->users->login($username,$password);
       						if ($result) 
       						   {
           						 $sess_array = array();
            						foreach ($result as $row)
            						{
											$sess_array = array(
												'name' => $row->name,
												'id' => $row->Id_user,
												'Password' => $row->password,
												//'Etat' => $row->Etat,
												//'Life' => $row->Life,
											//	'Nom' => $row->Nom,
											//	'Prenom' => $row->Prenom
												//'idpro' => $row->ID_Pro
										);

											$this->session->set_userdata('login', $sess_array);
                					}
                          redirect('Dashboard', 'refresh'); 
                			
            							//redirect('login/login_fonction', 'refresh');
      		     			    }
       					    	else 
       						    	{
									   $data['erreur'] ="Erreur verification !  nom utilisateur ou mot de passe . . .";
			 						   $this->load->view('index', $data); 
        					        }
		    }
 	}
	
	public function Login_fonction()
	{
	
		$session_data = $this->session->userdata('login');
	 var_dump($session_data);
	   if($this->session->userdata('login'))
						{	
							redirect('Dashboard', 'refresh');	
						}
						else
							{
		$this->session->unset_userdata('login');
       // $this->session->unset_userdata('privillege');
   
        session_destroy();
        $data['erreur'] ="Ce compte n'est pas Activé . . .";
		$this->load->view('index', $data); 		
							}
	}

	public function logout() 
	{
		$session_data = $this->session->userdata('login');
	                          
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('privillege');
        session_destroy();
        redirect('Login', 'refresh');
    }
		
}