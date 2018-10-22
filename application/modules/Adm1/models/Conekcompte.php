<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conekcompte extends CI_Model {
 public function __construct()
    {
        parent::__construct();
    }
	
public function	Entreprise()
	{
	
		$this -> db -> select('*');
		$this -> db -> from('mon_entreprise');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}	
Public function select_donne_depart()
	{
	    $this -> db -> select('*');
		$this -> db -> from('departement');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
public function select_lastpayrolfalse()
	{
	
		$this -> db -> select('*');
		$this -> db -> from('payroll');
		//$this -> db -> join('fond_payroll', 'payroll.ID_Fond_payroll=fond_payroll.ID_Fond_payroll', 'inner');
		$this -> db -> where('Etat_payroll', false);
		$this -> db -> where('Annuler', false);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
Public function select_perso_pay($ids, $idp)
	{
	    $this -> db -> select('*');
		$this -> db -> from('deja_paye');
		$this -> db -> where('ID_Employe', $ids);
		$this -> db -> where('ID_Payroll', $idp);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
Public function select_donne_poste()
	{
	    $this -> db -> select('*');
		$this -> db -> from('poste');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
Public function select_porata()
	{
	    $this -> db -> select('*');
		$this -> db -> from('leave_day_porata');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
Public function select_salairePoste($ide)
	{
	    $this -> db -> select('*');
		$this -> db -> from('salaire_de_base');
		$this -> db -> join('poste', 'salaire_de_base.ID_Poste=poste.ID_Poste', 'inner');
		$this -> db -> join('departement', 'salaire_de_base.ID_Departement=departement.ID_Departement', 'inner');
		$this -> db -> where('salaire_de_base.ID_E', $ide);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
	
public function select_lastemploye()
	{
		
		$this -> db -> select('*');
		$this -> db -> from('employe');
		$this -> db -> join('poste', 'employe.ID_Poste=poste.ID_Poste', 'inner');
		$this -> db -> join('salaire_de_base', 'employe.ID_Employe=salaire_de_base.ID_E', 'inner');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	
public function select_profil($id)
	{
		
		$this -> db -> select('*');
		$this -> db -> from('employe');
			$this -> db -> join('poste', 'employe.ID_Poste=poste.ID_Poste', 'inner');
		$this -> db -> join('salaire_de_base', 'employe.ID_Employe=salaire_de_base.ID_E', 'inner');
		$this -> db ->join('leave_day_porata', 'employe.ID_Leave_day_porata=leave_day_porata.ID_Leave_day_porata', 'inner');
		$this -> db ->where ('ID_Employe', $id);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
public function inserer_new($new)
	{
		$this->db->insert('Employe', $new);
	}
	public function select_id_insertion($nif)
	{
		
		$this -> db -> select('ID_Employe');
		$this -> db -> from('Employe');
		$this -> db ->where ('SID', $nif);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
Public function	inserer_salaire($salair)
		{
			$this->db->insert('salaire_de_base', $salair);
		}
		
public function modifi_data($Ids, $empl)
	{
		
		$this->db->where('Id_Employe', $Ids);
		$this->db->update('Employe', $empl);	
	}
public function modifi_sal($Ids, $sal)
	{
		
		$this->db->where('ID_E', $Ids);
		$this->db->update('salaire_de_base', $sal);	
	}
/*
	public function del_article($id){

		$this->db->where('Id_article', $id);
$this->db->delete('article');
	}
	
public function update_article($id){

		$this->db->where('Id_article', $id);
$this->db-> update('article');
	}

public function select_article_id($id)
{
	$this->db->where('Id_article', $id);
	$this -> db -> select('*');
		$this -> db -> from('article');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}*/
//addi
public function inserer_prelev($newajus)
	{
		$this->db->insert('Ajustement', $newajus);
	}
	
//Ajustement
public function inserer_ajus($newajus)
	{
		$this->db->insert('Ajustement', $newajus);
	}
	
public function select_ajustement($id)
	{
		
		$this -> db -> select('*');
		$this -> db -> from('Ajustement');
		$this -> db ->where ('ID_E', $id);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
//Taxes
public function select_taxe()
	{
		$this -> db -> select('*');
		$this -> db -> from('taxe');
		//$this -> db ->where ('ID_E', $id);
		//$this -> db ->order_by ('ID_hor_journalier','ASC' );
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function select_taxe_employe($id)
	{
		$this -> db -> select('*');
		$this -> db -> from('employe_taxe');
		$this->db->join('taxe', 'employe_taxe.ID_Taxe=taxe.ID_Taxe');
		$this -> db ->where ('ID_E', $id);
		//$this -> db ->order_by ('ID_hor_journalier','ASC' );
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
public function affect_taxe($Taxe)
	{
		$this->db->insert('employe_taxe', $Taxe);
	}
//Taxes
//projet
public function select_revenuProjet($ids, $datde, $datfi)
	{
		$this -> db -> select('*');
		$this -> db -> from('projet_employer');
		$this -> db ->where ('ID_Employe', $ids);
		$this -> db ->where ('Date_fin >=', $datfi);
		//$this -> db ->where ('Date_fin <=', $datfin);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
//Horaire	
public function inserer_horaire($tab)
	{

			$this->db->insert('hor_journalier', $tab);
		
	}

public function	update_horaire($ho, $idh)
	{	
		$this->db->where('ID_hor_journalier', $idh);
		$this->db->update('hor_journalier', $ho);
		
	}
public function select_horaire($id)
	{
		
		$this -> db -> select('*');
		$this -> db -> from('hor_journalier');
		$this -> db ->where ('ID_E', $id);
		$this -> db ->order_by ('ID_hor_journalier','ASC' );
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
//fin_horaire

//conge
public function inserer_conge($tab)
	{

			$this->db->insert('leave_day_taken', $tab);
		
	}
public function select_tipconge()
	{
		
		$this -> db -> select('*');
		$this -> db -> from('leave_day');
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
public function select_conge($id)
	{
		
		$this -> db -> select('*');
		$this -> db -> from('leave_day_taken');
		$this -> db ->join('leave_day', 'leave_day_taken.ID_Leave_day=leave_day.ID_Leave_day', 'inner');
		$query = $this -> db -> get();
		$this -> db ->where ('ID_E', $id);
		//$this -> db ->order_by ('ID_Leave_day_taken', 'DESC');
		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

//timesheet
public function select_jour_ferier()
	{
			$this -> db -> select('*');
		$this -> db -> from('date');
		$this -> db -> where('Id_appartenance',0);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function select_JTE($Id)
	{
			$this -> db -> select('*');
		$this -> db -> from('date');
		$this -> db -> where('Id_appartenance',$Id);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
public function select_jour_travail($id)
	{
			$this -> db -> select('*');
		$this -> db -> from('time_sheet');
		$this -> db -> where('ID_E',$id);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
public function ins_fichier($data)
	{
	
		$this -> db ->insert('fichier_temps',$data);
	
	}
	
public function inserer_heure($heur)	
	{
		$this -> db -> insert('time_sheet',$heur);
	}
	
public function Emplotime($dat)
	{
	
		$this -> db -> select('*');
		$this -> db -> from('employe');
		$this -> db -> join ('time_sheet','employe.ID_Employe != time_sheet.ID_E ', 'inner');
		$this -> db ->where('Jours_T', $dat);
		//$this -> db ->order_by ('ID_hor_journalier','ASC' );
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	
	}
public function select_dat_timesheet($dat)
	{
		$this -> db -> select('*');
		$this -> db -> from('time_sheet');
		$this -> db ->where ('Jours_T', $dat);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
public function select_temp($ids)
	{
		$this -> db -> select('*');
		$this -> db -> from('time_sheet');
		$this -> db ->where ('ID_E', $ids);
		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function select_DureeT($j,$id){
		$this -> db -> select('Duree');
		$this -> db -> from('time_sheet');
		$this -> db ->where ('ID_E', $id);
		$this -> db ->where ('Jours_T', $j);
		$query = $this -> db -> get();
		$D=$query->result();
		
		if($query -> num_rows() > 0)
		{
			foreach ($D as $Dk) {
				$Duree=$Dk->Duree;
			}
			return $Duree;
		}
		else
		{
			return false;
		}
	}
	public function select_DureeH($j,$id){
		$this -> db -> select('Duree');
		$this -> db -> from('hor_journalier');
		$this -> db ->where ('ID_E', $id);
		$this -> db ->where ('Jours', $j);
		$query = $this -> db -> get();
		$DJ=$query->result();
		
		if($query -> num_rows() > 0)
		{
			foreach ($DJ as $Dk) {
				$DureeJ=$Dk->Duree;
			}
			return $DureeJ;
		}
		else
		{
			return false;
		}
	}
//fin_timesheet	


//calendrier

//# Sa yo c pou model lan.

public function adddate($infodate){
	$this->db->insert('date', $infodate);
}
public function addDateConger($infodate,$Id_appartenance){
	$this->db->select('Id_appartenance');
	$this->db->from('date');
	$query=$this->db-> get();
	$test = $query->result();
	$id_test=true;
	foreach ($test as $key) {
		$id = $key->Id_appartenance;
		if($id == $Id_appartenance){
			$id_test = false;
		}
	}
	if($id_test == true){
	$this->db->insert('date', $infodate);
	}elseif ($id_test == false) {
		
		$this->db->where('Id_appartenance', $Id_appartenance);
		$this->db->update('date', $infodate);
	}
		
}

public function Listedate($id)
{

		$this->db->select('*');
		$this->db->from('date');
		$this->db->where('Id_appartenance',$id);
		$query=$this->db-> get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}

public function ListeDateConger()
{

		$this->db->select('*');
		$this->db->from('date');
		$this->db->where('Id_appartenance',0);
		$query=$this->db-> get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}
//Fin calendrier

}
