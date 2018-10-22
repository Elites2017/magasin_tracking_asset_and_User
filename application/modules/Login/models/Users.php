<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Users extends CI_Model
{
	  public function __construct()
    {
        parent::__construct();
    }
	public function newcommance($data){
		$this->db->insert('recuid', $data);
		return $this->db->insert_id();
	}
	function login($username, $final_encode)
	{
		$this -> db -> select('*');
		$this -> db -> from('user');
		$this -> db -> where('name = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . $final_encode . "'"); 
		$this -> db -> limit(1);

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
	function delete_personne($id){
		$this->db->where('IdPersonne', $id);
		$this->db->delete('personne');
	}
		
			function update_personne($id,$data){
		$this->db->where('IdPersonne', $id);
		$this->db->update('personne', $data);
	}
		public function personne_object($data){
			$this->db->insert('personne_object', $data);
	}
		
		public function Selectregister()
	{
		$this -> db -> select('*');
		$this -> db -> from('register');
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