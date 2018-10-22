<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		//$this->load->library('Layouts');
		$this->load->model('Conekcompte');
		$this->load->model('dbuser');
		$this->load->library('form_validation');
		$this->load->library('upload');
		
	}
	

public function index()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$page="List_employe";
		$info=$this->Conekcompte->select_lastemploye();
		$data=array( 'contents'=>$page, 
					 'jo'=>$info );
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}
		
	}

public function Creer_comptes()
	{


                  $session_privilleges = $this->session->userdata('privillege');
                  $page='pgae_hm1b';
                  $section='pgae_hm2b';
                  $priv=NULL;
                  $priv2=NULL;
                 
                 if ($session_privilleges['info_curent_profil']!=NULL) {
       //($session_privilleges['info_curent_profil']);
        foreach ($session_privilleges['info_curent_profil'] as $key=>$value) {
        foreach ($value as $test) {
          $symb1_indice= $test->Indice_symb;
              
          if ($symb1_indice== $page)
          {
        $priv=$symb1_indice;
          } 
            if ($symb1_indice== $section)
          {
      ( $priv2=$symb1_indice);
          }           
         }
      if ($priv2==$section) {
      $action='true';
        }
    else{
      $action='false';
      }
        if ($priv==$page ) {
      $action1='true';
        }
    else{
      $action1='false';
      }


      
      }}
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
          
              if ($action1=='true') {
              	
              
		$page="Creer_compte";
		$info=$this->Conekcompte->select_lastemploye();
		$donne_depart=$this->Conekcompte->select_donne_depart();
		$donne_poste=$this->Conekcompte->select_donne_poste();
		$porata=$this -> Conekcompte-> select_porata();
		$data=array( 	'contents'=>$page, 
						'jo'=>$info,
						'depart'=>$donne_depart,
						'poste'=>$donne_poste,
						'porata'=>$porata
						);
		$this->load->view('template/tmp',$data);
		//$this->load->view('Creer_compte',$info);
	}
	else{
		redirect('DepartementetPoste/denied');

	}

}
	else{
		redirect("login");
	}
	}

public function Inserer_employe()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$this->form_validation->set_rules('prenom', 'prenom', 'required');
		$this->form_validation->set_rules('nom', 'nom', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('sid', 'sid', 'required');
		$this->form_validation->set_rules('tel', 'cod_e', 'required');
		$this->form_validation->set_rules('tel', 'tel', 'required');
		$this->form_validation->set_rules('telm', 'telm');
		$this->form_validation->set_rules('adres', 'adres', 'required');
		$this->form_validation->set_rules('mail', 'mail', 'required');
		$this->form_validation->set_rules('tip', 'tip', 'required');
		$this->form_validation->set_rules('dat', 'dat', 'required');
		$this->form_validation->set_rules('datembau', 'datembau', 'required');
		$this->form_validation->set_rules('porata', 'porata', 'required');
		//$this->form_validation->set_rules('etcomp', 'etcomp', 'required');
		$this->form_validation->set_rules('etservi', 'etservi', 'required');
		$this->form_validation->set_rules('salair', 'salair', 'required');
		$this->form_validation->set_rules('pos', 'pos', 'required');
		$this->form_validation->set_rules('depart', 'depart', 'required');
		if ($this->form_validation->run() == FALSE)
		{
		
		$page="Creer_compte";
		$mesaj="Veuillez remplir tous les champs SVP.";
		$info=$this->Conekcompte->select_lastemploye();
		$donne_depart=$this->Conekcompte->select_donne_depart();
		$donne_poste=$this->Conekcompte->select_donne_poste();
		$porata=$this -> Conekcompte-> select_porata();
		$data=array( 	'contents'=>$page, 
						'jo'=>$info,
						'Message'=>$mesaj,
						'depart'=>$donne_depart,
						'poste'=>$donne_poste,
						'porata'=>$porata
						);

		$this->load->view('template/tmp',$data);

		}
		else
		{
			$new=array(
						'Prenom'=>$this->input->post('prenom'),
						'Nom'=>$this->input->post('nom'),
						'Sexe'=>$this->input->post('gender'),
						'SID'=>$this->input->post('sid'),
						'Code_Employe'=>$this->input->post('cod_e'),
						'Telephone'=>$this->input->post('tel'),
						'Telephone_maison'=>$this->input->post('telm'),
						'Adresse'=>$this->input->post('adres'),
						'Email'=>$this->input->post('mail'),
						'Type'=>$this->input->post('tip'),
						'Date_naissance'=>$this->input->post('dat'),
						'Start_dat'=>$this->input->post('datembau'),
						'ID_Leave_day_porata'=>$this->input->post('porata'),
						'Etat_Compte'=>true,
						'Etat_Service'=>$this->input->post('etservi'),
						'ID_Poste'=>$this->input->post('pos'),
						'ID_Departement'=>$this->input->post('depart'),
											 );	
			$nif=$this->input->post('sid');	 
			$this->Conekcompte->inserer_new($new);
			$idsql=$this -> Conekcompte-> select_id_insertion($nif);
			foreach($idsql as $idn){$idni=$idn->ID_Employe;}
			$salair=array(
							'ID_Departement'=>$this->input->post('depart'),
							'ID_Poste'=>$this->input->post('pos'),
							'Salaire'=>$this->input->post('salair'),
							'ID_E'=>$idni
							);				
			$this->Conekcompte->inserer_salaire($salair);
			redirect("Comptes");

		}
		}
	else{
		redirect("login");
	}
		

	}
//Debut Partie Profil
public function profil($id)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
				$ids=$id;
				$page="profil";
				$entreprise=$this->Conekcompte->Entreprise();
				foreach($entreprise as $infoEn)
					{
						$datdebmoi=$infoEn->MStart;
						$datfinmoi=$infoEn->MEnd;
					}
				$datjodia=date('now');
				$joujodia= date('Y-m',strtotime($datjodia));
				$datdebmoisa=$joujodia.'-'.$datdebmoi;
				$datfinmoisa=$joujodia.'-'.$datfinmoi;
				
				$payrolinfo=$this->Conekcompte->select_lastpayrolfalse();
			   //var_dump($payrolinfo);
			   if(!empty($payrolinfo))
				{
			   foreach($payrolinfo as $p)
				   {
						$etapay=$p->Etat_Payroll;
						$idp=$p->ID_Payroll;
						$datde=$p->Debut_periode;
						$datfi=$p->Fin_periode;
				   }
				}
				$profi=$this->Conekcompte->select_profil($ids);
				$ajusdb=$this->Conekcompte->select_ajustement($ids);
				$resultpay=$this->Conekcompte->select_perso_pay($ids, $idp);
				$horaire=$this->Conekcompte->select_horaire($ids);
				$datemp=$this->Conekcompte->Listedate($id);
				$datcong=$this->Conekcompte->ListeDateConger();
				$tipconge=$this->Conekcompte->select_tipconge($ids);
				$conge=$this->Conekcompte->select_conge($id);
				$sal_poste=$this->Conekcompte->select_salairePoste($ids);
				$taxes=$this->Conekcompte->select_taxe();
				$revnuprojet=$this -> Conekcompte-> select_revenuProjet($ids, $datdebmoisa, $datfinmoisa);
				$jrtr=$this -> Conekcompte->select_jour_travail($ids);
				$taxes_E=$this->Conekcompte->select_taxe_employe($ids);
				$this->session->set_userdata('profil_sess',$profi);
				$ses=$this->session->userdata('profil_sess');
				$data=array( 'contents'=>$page, 
							 'pro'=>$ses,
							 'ajus'=>$ajusdb,
							 'hor'=>$horaire,
							 'sal_poste'=>$sal_poste,
							 'projet'=>$revnuprojet,
							 'tipconge'=>$tipconge,
							 'conge'=>$conge,
							 'tax'=>$taxes,
							 'tax_e'=>$taxes_E,
							 'jour_travay'=>$jrtr,
							 'date' => $datemp,
							 'dateconger' => $datcong
							 );
				$this->load->view('template/tmp',$data);
		 }
	else{
		redirect("login");
	}
		
}
	
public function modifier($id)
	{	
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$ide=$id;
		$page="modifier";
		$info=$this->Conekcompte->select_profil($ide);
		$sal_post=$this->Conekcompte->select_salairePoste($ide);
		//var_dump($sal_post);
		$donne_depart=$this->Conekcompte->select_donne_depart();
		$donne_poste=$this->Conekcompte->select_donne_poste();
		$porata=$this->Conekcompte->select_porata();
		$data=array( 	'contents'=>$page, 
						'amodifi'=>$info,
						'sal_poste'=>$sal_post,
						'depart'=>$donne_depart,
						'poste'=>$donne_poste,
						'porata'=>$porata
						);
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}
	}
public function modifier_data1()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$Ids=$this->input->post('id');
		$tem=time();
		$empl=array(
		'Nom'=>$this->input->post('nom'),
		'Prenom'=>$this->input->post('prenom'),
		'Sexe'=>$this->input->post('gender'),
		'Date_naissance'=>$this->input->post('dat_nai'),
		'SID'=>$this->input->post('sid')

		);	
		$this->Conekcompte->modifi_data($Ids, $empl);
		redirect("Comptes/modifier/$Ids");
		}
	else{
		redirect("login");
	}
	}
public function modifier_data2()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$Ids=$this->input->post('id');
		$tem=time();
		$empl=array(
		'Adresse'=>$this->input->post('adres'),
		'Email'=>$this->input->post('mail'),
		'Telephone'=>$this->input->post('mobil')

		);	
		$this->Conekcompte->modifi_data($Ids, $empl);
		redirect("Comptes/modifier/$Ids");
		}
	else{
		redirect("login");
	}
	}	
	
public function activation()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$Ids=$this->input->post('id');
		$tem=date('d/m/Y');
		$empl=array(
		'Etat_Compte'=>$this->input->post('etcomp'),
		'End_date'=>$tem
					);	
		$this->Conekcompte->modifi_data($Ids, $empl);
		
		$ide=$Ids;
		$page="modifier";
		$info=$this->Conekcompte->select_profil($ide);
		$sal_post=$this->Conekcompte->select_salairePoste($ide);
		//var_dump($sal_post);
		$donne_depart=$this->Conekcompte->select_donne_depart();
		$donne_poste=$this->Conekcompte->select_donne_poste();
		$data=array( 	'contents'=>$page, 
						'amodifi'=>$info,
						'sal_poste'=>$sal_post,
						'depart'=>$donne_depart,
						'poste'=>$donne_poste
						);
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}
	}	
public function modifier_data3()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$Ids=$this->input->post('id');
		$tem=time();
		$empl=array(
		'Etat_Service'=>$this->input->post('etservi'),
		'Type'=>$this->input->post('tip'),
		'Start_dat'=>$this->input->post('datembau'),
		'ID_Departement'=>$this->input->post('depart'),
		'ID_Poste'=>$this->input->post('pos'),
		'ID_Leave_day_porata'=>$this->input->post('porata'),
		);	
		$this->Conekcompte->modifi_data($Ids, $empl);
		$sal=array( 'Salaire'=>$this->input->post('salair'));
		$this->Conekcompte->modifi_sal($Ids, $sal);
		$ide=$Ids;
		$page="modifier";
		$info=$this->Conekcompte->select_profil($ide);
		$sal_post=$this->Conekcompte->select_salairePoste($ide);
		//var_dump($sal_post);
		$donne_depart=$this->Conekcompte->select_donne_depart();
		$donne_poste=$this->Conekcompte->select_donne_poste();
		$porata=$this -> Conekcompte-> select_porata();
		$data=array( 	'contents'=>$page, 
						'amodifi'=>$info,
						'sal_poste'=>$sal_post,
						'depart'=>$donne_depart,
						'poste'=>$donne_poste,
						'porata'=>$porata
						);
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}
	}	
/*
	public function delete($id)
	{
		echo "delete"; echo $id;
	$this->dbarticle->del_article($id);
	redirect("Articles");

	}*/
//additif
	
public function  inserer_prelev($id)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$ids=$id;
		$this->form_validation->set_rules('tipajus', 'tipajus', 'required');
		$this->form_validation->set_rules('val', 'val', 'required');
		$this->form_validation->set_rules('com', 'com');
		if ($this->form_validation->run() == FALSE)
		{

		$page="profil";
		$profi=$this->Conekcompte->select_profil($ids);
		$ajusdb=$this->Conekcompte->select_ajustement($ids);
		$this->session->set_userdata('profil_sess',$profi);
		$ses=$this->session->userdata('profil_sess');
		$data=array( 'contents'=>$page, 
					 'pro'=>$ses,
					 'ajus'=>$ajusdb );
		$this->load->view('template/tmp',$data);
			
		}
		else
		{
			$ids=$id;
			$newajus=array(
						'Type'=>$this->input->post('tipajus'),
						'Valeur'=>$this->input->post('val'),
						'ID_E'=>$ids,
						'Commentaire'=>$this->input->post('com'),
						'indis'=>'0'
											 );	
			$this->Conekcompte-> inserer_prelev($newajus);
		redirect("Comptes/profil/$ids");
		}
		}
	else{
		redirect("login");
	}
	}
//Ajustement
public function inse_ajus($id)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$ids=$id;
		$this->form_validation->set_rules('tipajus', 'tipajus', 'required');
		$this->form_validation->set_rules('val', 'val', 'required');
		$this->form_validation->set_rules('com', 'com');
		if ($this->form_validation->run() == FALSE)
		{

		$page="profil";
		$profi=$this->Conekcompte->select_profil($ids);
		$ajusdb=$this->Conekcompte->select_ajustement($ids);
		$this->session->set_userdata('profil_sess',$profi);
		$ses=$this->session->userdata('profil_sess');
		$data=array( 'contents'=>$page, 
					 'pro'=>$ses,
					 'ajus'=>$ajusdb );
		$this->load->view('template/tmp',$data);
			
		}
		else
		{
			$ids=$id;
			$newajus=array(
						'Type'=>$this->input->post('tipajus'),
						'Valeur'=>$this->input->post('val'),
						'ID_E'=>$ids,
						'Commentaire'=>$this->input->post('com'),
						'indis'=>'1'
											 );	
			$this->Conekcompte->inserer_ajus($newajus);
		redirect("Comptes/profil/$ids");
		}
		}
	else{
		redirect("login");
	}
	}
	
public function select_ajustement()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		$page="profil";
		$profi=$this->Conekcompte->select_profil($ids);
		$ajusdb=$this->Conekcompte->select_ajustement();
		$data=array( 'contents'=>$page,
					 'pro'=>$profi,
					 'ajus'=>$ajusdb );
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}
		
	}

//taxes{
public function affecter_taxe($id)	
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		
		$ids=$id;
		$nbr=$this->input->post('nbr');
		
		for($i=1; $i<=$nbr; $i++)
		{
			$vari='idt'.$i;
			$val=$this->input->post($vari);
			if(!empty($val))
			{
			 $Taxe=array(
						'ID_E'=>$this->input->post('ide'),
						'ID_Taxe'=>	$val				
											 );
			$this->Conekcompte->affect_taxe($Taxe);
			//var_dump($Taxe);
			}
		}
	redirect("Comptes/profil/$ids");
		
		}
	else{
		redirect("login");
	}
	}
//taxes}
	
//Horaire
Public function horaire($id)
	{
		if ($this->session->userdata('login') ) 
    	 {

    	 	 $session_privilleges = $this->session->userdata('privillege');
    
                  $section='pgghe_hm10b';
                  $priv=NULL;
                  $priv2=NULL;
                
                          if ($session_privilleges['info_curent_profil']!=NULL) {
       //($session_privilleges['info_curent_profil']);
        foreach ($session_privilleges['info_curent_profil'] as $key=>$value) {
        foreach ($value as $test) {
          $symb1_indice= $test->Indice_symb;
              
            if ($symb1_indice== $section)
          {
      ( $priv2=$symb1_indice);
          }           
         }
      if ($priv2==$section) {
      $action='true';
        }
    else{
      $action='false';
      }      
      }}

        if ($action=='true') {
       
		$ids=$id;
		$page="horaire";
		$profi=$this->Conekcompte->select_profil($ids);
		$horaire=$this->Conekcompte->select_horaire($ids);
		$data=array(  'contents'=>$page,
					  'hor'=>$horaire,
					  'pro'=>$profi,
					  'ide'=>$ids
					  );
		$this->load->view('template/tmp',$data);
		}else{
			redirect("DepartementetPoste/denied");
		} }
	else{
		redirect("login");
	}
	}
	
Public function inserer_horaire($idurl)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		
			$ids=$idurl;
						$tim1=$this->input->post('lud');
						$tim2=$this->input->post('luf');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
			$newhorairelu=array(
						'H_Debut'=>$this->input->post('lud'),
						'H_Fin'=>$this->input->post('luf'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('1j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						$tim1=$this->input->post('mad');
						$tim2=$this->input->post('maf');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhorairema=array(
						'H_Debut'=>$this->input->post('mad'),
						'H_Fin'=>$this->input->post('maf'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('2j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						$tim1=$this->input->post('med');
						$tim2=$this->input->post('mef');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhoraireme=array(
						'H_Debut'=>$this->input->post('med'),
						'H_Fin'=>$this->input->post('mef'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('3j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						$tim1=$this->input->post('jed');
						$tim2=$this->input->post('jef');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhoraireje=array(
						'H_Debut'=>$this->input->post('jed'),
						'H_Fin'=>$this->input->post('jef'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('4j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						$tim1=$this->input->post('ved');
						$tim2=$this->input->post('vef');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhoraireve=array(
						'H_Debut'=>$this->input->post('ved'),
						'H_Fin'=>$this->input->post('vef'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('5j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						$tim1=$this->input->post('sad');
						$tim2=$this->input->post('saf');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhorairesa=array(
						'H_Debut'=>$this->input->post('sad'),
						'H_Fin'=>$this->input->post('saf'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('6j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
						);
						
						
						$tim1=$this->input->post('did');
						$tim2=$this->input->post('dif');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;
						
						$newhorairedi=array(
						'H_Debut'=>$this->input->post('did'),
						'H_Fin'=>$this->input->post('dif'),
						'Duree'=>$tim,
						'Jours'=>$this->input->post('7j'),
						'Type'=>$this->input->post('tip'),
						'ID_E'=>$this->input->post('ide')
											 );	
						$newhoraireg=array(
											$newhorairelu,
											$newhorairema,
											$newhoraireme,
											$newhoraireje,
											$newhoraireve,
											$newhorairesa,
											$newhorairedi
											);
												//echo 'ok 2';
					$horaire=$this->Conekcompte->select_horaire($ids);
					if(empty($horaire))
					{
						foreach($newhoraireg as $tab)
							{

							$this->Conekcompte->inserer_horaire($tab);
								
							}
					}else
					{	//echo 'ok 3';
						$ids;
						$page="horaire";
						$horaire=$this->Conekcompte->select_horaire($ids);
						$data=array(  	'contents'=>$page,
										'hor'=>$horaire,
										'ide'=>$ids
												);
						$this->load->view('template/tmp',$data);
					}	
	//echo 'ok last';
						redirect("Comptes/horaire/$ids");
						}
	else{
		redirect("login");
	}
		
	}
	
public function updat_horaire($id)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {
		
						$jrs=$this->input->post('2j');
						$idh=$this->input->post('idh');
						$tim1=$this->input->post('h_debut');
						$tim2=$this->input->post('h_fin');
						$debut = new DateTime($tim1); 
						$fin = new DateTime($tim2);
						$interval = $debut->diff($fin);
						$dure=$interval->h;
		$updat=array(
						'H_Debut'=>$this->input->post('h_debut'),
						'H_Fin'=>$this->input->post('h_fin'),
						'Duree'=>$dure
						);
		
		$this->Conekcompte->update_horaire($updat, $idh);
		redirect("Comptes/horaire/$id");
		}
	else{
		redirect("login");
	}
	}
	
//Fin profil

//timesheet

public function timesheet($id)
	{
	if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		$ids=$id;
		if($ids!='HG001')
		{
		$dat=$this->input->post('jourT');
		//var_dump($dat);
		$page="timesheet";
						$datveri=$this -> Conekcompte->select_dat_timesheet($dat);
						if(empty($datveri))
							{
								$employe=$this->Conekcompte->select_lastemploye();
							}
						else
							{
								$employe=$this->Conekcompte->Emplotime($dat);
							}
						$profi=$this->Conekcompte->select_profil($ids);							
						$horai=$this->Conekcompte->select_horaire($ids);
						$tem=$this->Conekcompte->select_temp($ids);
						$ferier=$this->Conekcompte->select_jour_ferier();
						$jrst=$this->Conekcompte->select_jour_travail($ids);
						$JTE=$this->Conekcompte->select_JTE($ids);
							$data=array(  'contents'=>$page,
									  'emp' => $profi,
									  'dat' => $dat,
									  'hor'=>$horai,
									  'controller' => $this,
									  'tem'=>$tem,
									  'ferier'=>$ferier,
									  'jour_T'=>$jrst,
									  'JTE'=>$JTE
									  );
									  //var_dump($horai);
						$this->load->view('template/tmp',$data);
		}
		else
		{
			$dat=$this->input->post('jourT');
		//var_dump($dat);
		 $chek=false;
		if(!empty($dat)){ $chek=true;}
		$page="save_heure";
						$datveri=$this -> Conekcompte->select_dat_timesheet($dat);
						if(empty($datveri))
							{
								$employe=$this->Conekcompte->select_lastemploye();
							}
						else
							{
								$employe=$this->Conekcompte->Emplotime($dat);
							}
						$tem=$this->Conekcompte->select_temp($dat);
							$data=array( 	 'contents'=>$page,
											'emp' => $employe,
											'dat' => $dat,
											'check' => $chek
									  );
									  //var_dump($horai);
						$this->load->view('template/tmp',$data);
		}
		}
	else{
		redirect("login");
	}
		
	}
	
public function inserer_timesheet()
	{
	if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		$id=$this->input->post('ide');
		$datjour=$this->input->post('jourT');
		$this->form_validation->set_rules('jourT', 'jourT', 'required');
		$this->form_validation->set_rules('hin', 'hin', 'required');
		$this->form_validation->set_rules('hout', 'hout', 'required');
		$this->form_validation->set_rules('jourT', 'jourT', 'required');
		$this->form_validation->set_rules('ide', 'ide', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			//echo "No  ";
		$page="save_heure";
						$dat=$this -> Conekcompte->select_dat_timesheet($datjour);
						if(empty($dat))
							{
								$employe=$this->Conekcompte->select_lastemploye();
							}
						else
							{
								$employe=$this->Conekcompte->Emplotime($datjour);
							}						
						
						$data=array(  'contents'=>$page,
									  'emp'=>$employe,
									  'dat'=>$datjour
									  );
									  //var_dump($employe);
						$this->load->view('template/tmp',$data);
		}else
		{		
				$datin=$this->input->post('hin');
				$datout=$this->input->post('hout');
				$debut = new DateTime($datin); 
				$fin = new DateTime($datout);
				$interval = $debut->diff($fin);
				$tim=$interval->h;
				
				/*$tim1=$this->input->post('did');
						$tim2=$this->input->post('dif');
						$debut = new Time($tim1); 
						$fin = new Time($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;*/
				//var_dump($dure);
		$timesh=array(
							'H_in'=>$this->input->post('hin'),
							'H_out'=>$this->input->post('hout'),
							'Jours_T'=>$datjour,
							'ID_E'=>$this->input->post('ide'),
							'Duree'=>$tim
							);	
//var_dump($timesh);							
			$this->Conekcompte->inserer_heure($timesh);
			//echo "Ok  ";
			//redirect("Comptes/timesheet/$id");
			 $chek=false;
			if(!empty($datjour)){ $chek=true;}
			$page="save_heure";
			$employe=$this->Conekcompte->Emplotime($datjour);
			$data=array(  'contents'=>$page,
									  'emp'=>$employe,
									  'dat'=>$datjour,
									  'check'=>$chek
									  );
									  //var_dump($employe);
						$this->load->view('template/tmp',$data);
			}
			}
	else{
		redirect("login");
	}
		
	}

public function inserer_timesheet_indivi($id)
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		$ids=$id;
		$datjour=$this->input->post('jourT');
		$this->form_validation->set_rules('jourT', 'jourT', 'required');
		$this->form_validation->set_rules('hin', 'hin', 'required');
		$this->form_validation->set_rules('hout', 'hout', 'required');
		$this->form_validation->set_rules('ide', 'ide', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect("Comptes/timesheet/$id");
		}else
		{		
				$datin=$this->input->post('hin');
				$datout=$this->input->post('hout');
				$debut = new DateTime($datin); 
				$fin = new DateTime($datout);
				$interval = $debut->diff($fin);
				$tim=$interval->h;
				
				/*$tim1=$this->input->post('did');
						$tim2=$this->input->post('dif');
						$debut = new Time($tim1); 
						$fin = new Time($tim2);
						$interval = $debut->diff($fin);
						$tim=$interval->h;*/
				var_dump($dure);
		$timesh=array(
							'H_in'=>$this->input->post('hin'),
							'H_out'=>$this->input->post('hout'),
							'Jours_T'=>$datjour,
							'ID_E'=>$this->input->post('ide'),
							'Duree'=>$tim
							);	
var_dump($timesh);							
			$this->Conekcompte->inserer_heure($timesh);
			echo "Ok  ";
			redirect("Comptes/timesheet/$id");
			}
			}
	else{
		redirect("login");
	}
		
	}
	
/*public function time_sheet(){
		
		if (strcasecmp($_SERVER['REQUEST_METHOD'], 'post') === 0 && stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== FALSE) {
			// POST is actually in json format, do an internal translation
			$_POST += json_decode(file_get_contents('php://input'), true);
		}
		
		$this->Conekcompte->inserer_timesheet($_POST);
		//echo  "ok";
	}*/	
	
public function fichier()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	

		$config = array(
		'upload_path' => "./public/",
		'allowed_types' => "txt|xlsx|docx",
		'overwrite' => TRUE,
		
		);
		
		$this->load->library('upload', $config);

		if($this->upload->do_upload())
		{
			$datafi=$this->upload->data();
		echo $fichie = $datafi['file_name'];
			var_dump($datafi);
		}else{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		}

		$fil = array('Nom_fichier' => $fichie );
		
		$this->Conekcompte->ins_fichier($fil);
		//redirect("Redacteurs");
		}
	else{
		redirect("login");
	}
	}

public function inse_conge($id)	
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		
		$ids=$id;
		$this->form_validation->set_rules('id-tip', 'id-tip', 'required');
		$this->form_validation->set_rules('dat_out', 'dat_out', 'required');
		$this->form_validation->set_rules('dat_in', 'dat_in', 'required');
		$this->form_validation->set_rules('com', 'com');
		if ($this->form_validation->run() == FALSE)
		{

		$page="profil";
		$profi=$this->Conekcompte->select_profil($ids);
		$ajusdb=$this->Conekcompte->select_ajustement($ids);
		$this->session->set_userdata('profil_sess',$profi);
		$ses=$this->session->userdata('profil_sess');
		$data=array( 'contents'=>$page, 
					 'pro'=>$ses,
					 'ajus'=>$ajusdb );
		$this->load->view('template/tmp',$data);
			
		}
		else
		{
			$ids=$id;
			$newajus=array(
						'ID_Leave_day'=>$this->input->post('id-tip'),
						'Dat_out'=>$this->input->post('dat_out'),
						'Dat_in'=>$this->input->post('dat_in'),
						'ID_E'=>$ids,
						'Commentaire'=>$this->input->post('com')					
											 );	
			$this->Conekcompte->inserer_conge($newajus);
		redirect("Comptes/profil/$ids");
		}
		}
	else{
		redirect("login");
	}
		
	}
//Fin_timesheet

//$config = array(
		//'upload_path' => "./public/",
		//'allowed_types' => "gif|jpg|png|jpeg|pdf",
		//'overwrite' => TRUE,
		
			//			);
		//$this->load->library('upload', $config);
		//if($this->upload->do_upload())
			//{
				//$dataimg =$this->upload->data();
				//$imaj=$dataimg['file_name'];
			//	$new=array(
					//	'Titre'=>$this->input->post('titre'),
					//	'Text'=>$this->input->post('text'),
					//	'redacteur'=>$this->input->post('redac'),
					//	'image'=> $imaj
					 // );	
			//$this->dbarticle->inserer_new($new);
			//redirect("Articles");
				//$this->layouts->view('Articles', array(),$data_img);
			//}
		//else
			//{
			//	$error = array('error' => $this->upload->display_errors());
				//var_dump($error);
				//$this->load->view('file_view', $error);
			//}
			
//Debut Calendrier EMPLOYE
	
	//CalendarEmp lan c li kife affichaj lan.
public function CalendarEmp()
    {
    	if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		
		$data['date']=$this->Conekcompte->Listedate();
		$data['dateconger']=$this->Conekcompte->ListeDateConger();
		$data['contents']="profil"; //Nom page ki fe afichaj lan, A chanje.
		$this->load->view('template/tmp',$data);
		}
	else{
		redirect("login");
	}

	}
public function send()
	{
		if ($this->session->userdata('login') ) //AND $session_data['id']==$id AND $NPF==$nprof
    	 {	
		$data=$this->input->post('date');
		$ids=$this->input->post('id');
		if (empty($data)) {
			$data='';
		}
		$Id_appartenance=$ids; //Fe Id_appartenance lan resevwa ID employe pou ki wap fe l la.
		$infodate = array(
		'datecong' => $data,
		'Id_appartenance' => $Id_appartenance
		);
		$this->Conekcompte->addDateConger($infodate,$Id_appartenance);
		redirect("Comptes/profil/$ids");
		}
	else{
		redirect("login");
	}
		
	}
//Fin Calendrier			
}
