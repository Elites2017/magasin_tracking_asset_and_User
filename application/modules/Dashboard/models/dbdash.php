<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbdash extends CI_Model {
 public function __construct()
    {
        parent::__construct();
    }
function Countusers()
	{
		$this -> db -> select('count(Id_user) AS Nmbr');
		$this -> db -> from('user');
		//$this -> db -> where('Life', '0' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}	/*
function Countemp()
	{
		$this -> db -> select('count(ID_Employe) AS Nmbr_emp');
		$this -> db -> from('employe');
		//$this -> db -> where('Etat_Service !=', '0' );
		//$this -> db -> where('Etat_Compte', '1' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function Countemp_act()
	{
		$this -> db -> select('count(ID_Employe) AS Nmbr_act');
		$this -> db -> from('employe');
		$this -> db -> where('Etat_Service', '1' );
		$this -> db -> where('Etat_Compte', '1' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function Countemp_inact()
	{
		$this -> db -> select('count(ID_Employe) AS Nmbr_act');
		$this -> db -> from('employe');
		$this -> db -> where('Etat_Service !=', '1' );
		$this -> db -> where('Etat_Compte', '1' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

function Countdep()
	{
		$this -> db -> select('count(ID_Departement) AS Nmbr_dep');
		$this -> db -> from('departement');
		//$this -> db -> where('ID_Departement', '100' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}	

function Countpost()
	{
		$this -> db -> select('count(ID_Poste) AS Nmbr_post');
		$this -> db -> from('poste');
		//$this -> db -> where('ID_Departement', '100' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}	

function Countpay()
	{
		$this -> db -> select('count(ID_Payroll) AS Nmbr_pay');
		$this -> db -> from('payroll');
		$this -> db -> where('Etat_Payroll', '1' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function max_paid(){
$this -> db -> select('*');
$this -> db -> from('poste');
$this -> db -> limit(5);
$this -> db -> order_by('Salaire_max', 'DESC');
$query = $this -> db -> get();
if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}

function pay()
	{
		$this -> db -> select('*');
		$this -> db -> from('fond_payroll');
		//$this -> db -> where('Etat_Payroll', '1' );
		$this -> db -> limit(1);
		$this -> db -> order_by('ID_Fond_payroll', 'DESC');
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}


function select_sal_emp(){
$this -> db -> select('*');
$this -> db -> from('salaire_de_base');
$this->db->join('employe', 'employe.ID_Employe = salaire_de_base.ID_E', 'inner');
$this -> db -> where('employe.Etat_Compte', '1' );
$this -> db -> limit(5);
$this -> db -> order_by('Salaire', 'DESC');
$query = $this -> db -> get();
if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}

public function Entreprise(){

		$this->db->select('*');
		$this->db-> from('mon_entreprise');
		$query = $this->db-> get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}	

public function budget(){

		$this->db->select('*');
		$this->db-> from('budget');
		$this -> db -> limit(1);
		$this -> db -> order_by('ID_budget', 'DESC');
		$query = $this->db-> get();

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}

function Countax()
	{
		$this -> db -> select('count(ID_Taxe) AS Nmbr_Tax');
		$this -> db -> from('taxe');
		//$this -> db -> where('ID_Departement', '100' );
		$query = $this -> db -> get();

		if($query -> num_rows() >=0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}	
*/

}
