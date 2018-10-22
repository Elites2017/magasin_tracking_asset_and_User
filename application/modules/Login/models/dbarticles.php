<?php

class dbarticles extends CI_Model {
	 public function __construct()
    {
        parent::__construct();
    }

public function del_user($id){

$this->db->where('Id', $id);
$this->db->delete('utilisateur');

 }

function select_user(){

$this -> db -> select('*');
		$this -> db -> from('utilisateur');
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

function sel_user($id){

$this -> db -> select('*');
		$this -> db -> from('utilisateur');
		$this -> db -> where('Id',$id);
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

public function login($data) {

$condition = "username =" . "'" . $data['UserName'] . "' AND " . "Password =" . "'" . $data['Password'] . "'";
$this->db->select('*');
$this->db->from('utilisateur');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

function update_user1($id,$data)
{
$this->db->where('Id', $id);
$this->db->update('utilisateur','Password', $data);
}


 function update_user($id,$data)
{
$this->db->where('Id', $id);
$this->db->update('utilisateur', $data);
}

function user2($id,$data)
{
$this->db->where('Id', $id);
$this->db->update('utilisateur', $data);
}

function user1($id,$data)
{
$this->db->where('Id', $id);
$this->db->update('utilisateur', $data);
}
}