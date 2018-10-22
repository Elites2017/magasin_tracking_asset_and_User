<?php

class dbuser extends CI_Model
 {
	 public function __construct()
    {
        parent::__construct();
    }

function select_produit($id){

$this -> db -> select('*');
		$this -> db -> from('produit');
		$this -> db -> where('Id_produit', $id);
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

function select()
{

		$this -> db -> select('*');
		$this -> db -> from('produit');
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

function ajouter($data)
{
	$this->db->insert('vente', $data);
}


}