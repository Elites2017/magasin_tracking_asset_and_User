<?php

class dbuser extends CI_Model
 {
	 public function __construct()
    {
        parent::__construct();
    }

function select_utilisateurs8($id){

$this -> db -> select('*');
		$this -> db -> from('utilisateur');
		$this -> db -> where('Life', 'NULL');
		$this -> db -> where('ID_Utilisateur', $id);
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