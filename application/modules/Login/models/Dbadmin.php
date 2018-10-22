<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Dbadmin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function Countfour()
	{
		$this -> db -> select('count(company_name) AS Name');
		$this -> db -> from('supplier');
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	function CountCategorie()
	{
		$this -> db -> select('count(Name) AS Name');
		$this -> db -> from('categorie');
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
				function Countproduit()
	{
		$this -> db -> select('count(NomProduit) AS Name');
		$this -> db -> from('produit');
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	public function Sommesaleday()
	{
		$date=(strftime("%m/%d/%Y"));
		$this->db->select_sum('somme');
		$this->db->where('datesale', $date);
		$query = $this->db->get('sale');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}


	}
		public function sommecre()
	{
		$date=(strftime("%m/%d/%Y"));
		$this->db->select_sum('somme');
		$this->db->where('Date', $date);
		$query = $this->db->get('cashcredit');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}


	}
	function Countusers($idpro)
	{
		$this -> db -> select('count(ID_Pro) AS Name');
		$this -> db -> from('utilisateur');
		$this -> db -> where('ID_Pro', $idpro );
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}



	function Countindice($idpro)
	{
		$this -> db -> select('count(ID_Ind) AS Nbr');
		$this -> db -> from('asso');
		$this -> db -> where('ID_Prof', $idpro );
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}



	function select_user($idpro){

  $this -> db -> select('*');
		$this -> db -> from('asso2');
		//$this -> db -> from('asso');		
		$this->db->join('utilisateur', 'utilisateur.ID_Utilisateur = asso2.IDU', 'inner');
		//$this->db->join('indice', 'indice.ID_Indice = asso.ID_Ind', 'inner');
		$this->db->join('profil', 'profil.ID_Profil = asso2.IDG', 'inner');
		//$this -> db -> where('Life', 0);
		$this -> db -> where('IDU', $idpro);
        //$this -> db -> order_by('', 'DESC');
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


function select_profinfo($idpro){

  $this -> db -> select('*');
		$this -> db -> from('asso');
		//$this -> db -> from('asso');		
		//$this->db->join('utilisateur', 'utilisateur.ID_Utilisateur = asso2.IDU', 'inner');
		$this->db->join('indice', 'indice.ID_Indice = asso.ID_Ind', 'inner');
		$this->db->join('profil', 'profil.ID_Profil = asso.ID_Prof', 'inner');
		//$this -> db -> where('Life', 0);
		$this -> db -> where('ID_Prof', $idpro);
        //$this -> db -> order_by('', 'DESC');
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

function select_prof($idpro){

  $this -> db -> select('*');
		$this -> db -> from('asso');
		//$this -> db -> from('asso');		
		//$this->db->join('utilisateur', 'utilisateur.ID_Utilisateur = asso2.IDU', 'inner');
		$this->db->join('indice', 'indice.ID_Indice = asso.ID_Ind', 'inner');
		$this->db->join('profil', 'profil.ID_Profil = asso.ID_Prof', 'inner');
		//$this -> db -> where('Life', 0);
		$this -> db -> where('ID_Prof', $idpro);
        //$this -> db -> order_by('', 'DESC');
		
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

	function ajouter_id_indice($key)
{

$this->db->insert('Asso', $key);
}

function select_maxid(){
$this -> db -> select_max('ID_Profil');
$this -> db -> from('profil');
$query = $this -> db -> get();
if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

}


function selectinfoPro($id){


        $this -> db -> select('*');
		$this -> db -> from('asso2');
		
		$this->db->join('utilisateur', 'utilisateur.ID_Utilisateur = asso2.IDU', 'inner');
		//$this->db->join('indice', 'indice.ID_Indice = asso.ID_Ind', 'inner');
		$this->db->join('profil', 'profil.ID_Profil = asso2.IDG', 'inner');
		//$this -> db -> where('Life', 0);
		$this -> db -> where('IU', $idpro);
        //$this -> db -> order_by('ID_Utilisateur', 'DESC');
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


}
?>