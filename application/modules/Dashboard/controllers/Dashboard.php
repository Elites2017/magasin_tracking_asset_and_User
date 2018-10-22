<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->helper('form');
		$this->load->model('dbdash');
		$this->load->library('form_validation');
		$this->load->library('curl');
		$this->load->model('dbuser');
		
    }
	
	public function index()
    {
    	$page= "index";
    	$va = $this->dbuser->select();
		$data= array(
			'contents' => $page,
			'va' => $va
			);
		$this->load->view('template/tmp',$data);
    }

    public function vente($id)
    {
    	$page= "vente";

    	$val = $this->dbuser->select_produit($id);
		$data= array(
			'contents' => $page,
			'val' => $val
			);
		$this->load->view('template/tmp',$data);

		////////////////**************************************************/////

	

		/////////*********************************************************888///////////
    }

    public function ajouter_Produit()
	{
				$this->form_validation->set_rules('txtName', 'txtName',  'required|max_length[25]');
				$this->form_validation->set_rules('txtID', 'txtID',  'required|max_length[35]');
				$this->form_validation->set_rules('id', 'id',  'required');
				$this->form_validation->set_rules('mail', 'mail', 'required|max_length[15]');
				$this->form_validation->set_rules('code', 'code',  'required|max_length[4]');
						   
				$data = array(
					'nom_client'=>$this->input->post('txtName'),
					'ssid '=>$this->input->post('txtID'),
					'Id_produit'=>$this->input->post('id'),
					'mail'=>$this->input->post('mail'),
					'code_produit'=>$this->input->post('code'),
						     );
                 $id=$this->input->post('id');
				//$this->dbuser->ajouter($data);
				$email=$this->input->post('mail');
				$val = $this->dbuser->select_produit($id);
				//var_dump($val);
				foreach ($val as $key) {
				$Nom_produit=$key->Nom_produit;
				$code_produit=$key->code_produit;
				$prix=$key->prix_produit;
				$devise='USD';

	}
				//*****************************************************************
					
$service_url = '127.0.0.1:8080/api/secrak/get/user/login/'.$email;
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
var_dump($curl_response);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
//var_dump($decoded);

$result = json_decode($curl_response, true);
//print_r($result);
$Iduser=$result['userId'];

//var_dump($Iduser);


					//***************************************************						

     	if (isset($Iduser))
     	{
     	$service_url = '127.0.0.1:8080/api/secrak/save/asset';
		$curl = curl_init($service_url);
		$curl_post_data = array(
        'mark' => $Nom_produit,
        'idNumber' => $code_produit,
        'price' => $prix,
        'currency' => $devise,
        'assetStatus' => '1',
        'shop' => '4'
       );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		$curl_response1 = curl_exec($curl);
		//var_dump($curl_response1);
		if ($curl_response1 === false) {
   		 $info = curl_getinfo($curl);
   		 curl_close($curl);
   		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response1);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		echo 'response ok!';

     		echo "obbbsss";

     		//invoice

     		$service_url = '127.0.0.1:8080/api/secrak/get/asset/idnumber/'.$code_produit;
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
var_dump($curl_response);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
//var_dump($decoded);

$result = json_decode($curl_response, true);
//print_r($result);
$Iproduit=$result['assetId'];


$service_url = '127.0.0.1:8080/api/secrak/user/'.$Iduser.'/asset/'.$Iproduit.'/save/invoice';
					$curl = curl_init($service_url);
					$curl_post_data = array(
       				
     				    );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		$curl_response1 = curl_exec($curl);
		//var_dump($curl_response1);
		if ($curl_response1 === false) {
   		 $info = curl_getinfo($curl);
   		 curl_close($curl);
   		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response1);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		echo 'response ok!';



     	}
     	else
     	{

     		//ajouter user
     			$nom=$this->input->post('txtName');
				$ssid=$this->input->post('txtID');
     			$mail=$this->input->post('mail');


     				$service_url = '127.0.0.1:8080/api/secrak/save/user/';
					$curl = curl_init($service_url);
					$curl_post_data = array(
       				 'userName' => $nom,
       				 'userNumber' => $ssid,
       				 'userLogin' => $mail,
       				 'userPassword' => $nom,
     				    );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		$curl_response1 = curl_exec($curl);
		//var_dump($curl_response1);
		if ($curl_response1 === false) {
   		 $info = curl_getinfo($curl);
   		 curl_close($curl);
   		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response1);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		echo 'response ok!';
		//execution

		$service_url = '127.0.0.1:8080/api/secrak/get/user/login/'.$mail;
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
//var_dump($curl_response);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
var_dump($decoded);

$result = json_decode($curl_response, true);
//print_r($result);
$Iduserr1=$result['userId'];
//save
		
     				$service_url = '127.0.0.1:8080/api/secrak/save/asset/';
					$curl = curl_init($service_url);
					$curl_post_data = array(
       				 'mark' => $Nom_produit,
       				 'idNumber' => $code_produit,
       				 'assetStatus' => '1',
       				 'price' => $prix,
       				 'shop' => '4',
       				 'currency' => $devise,


     				    );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		$curl_response1 = curl_exec($curl);
		//var_dump($curl_response1);
		if ($curl_response1 === false) {
   		 $info = curl_getinfo($curl);
   		 curl_close($curl);
   		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response1);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		echo 'response ok!';

	var_dump($code_produit);
		$kl=$code_produit;
$ise=$Iduserr1;
$service_url = '127.0.0.1:8080/api/secrak/user/'.$ise.'/asset/'.$code_produit.'/save/invoice';
					$curl = curl_init($service_url);
					$curl_post_data = array(
       				
     				    );
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		$curl_response1 = curl_exec($curl);
		//var_dump($curl_response1);
		if ($curl_response1 === false) {
   		 $info = curl_getinfo($curl);
   		 curl_close($curl);
   		 die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
		$decoded = json_decode($curl_response1);
		if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		    die('error occured: ' . $decoded->response->errormessage);
		}
		echo 'response ok!';




     	}
				

				//*****************************************************************
				redirect("Dashboard");
       		  		
	}


public function testapi()
	{	

		$page= "index1";
		
		$service_url = '127.0.0.1:8080/api/secrak/getshop/?id=1';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
var_dump($curl_response);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
//var_dump(expression)

$result = json_decode($curl_response, true);
//print_r($result);
print_r($result['shopEmail']);

//var_dump($result);
    
    //****************************************************************************

			     
    
$service_url = '127.0.0.1:8080/api/secrak/save/asset/';
$curl = curl_init($service_url);
$curl_post_data = array(
        'mark' => 'iphone',
        'idNumber' => '4',
        'assetStatus' => '1',
        
);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response1 = curl_exec($curl);
var_dump($curl_response1);
if ($curl_response1 === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response1);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
//var_export($decoded->response);


				//******************

		$data= array(
			'contents' => $page,
			
			
			);
		
		//$this->load->view('template/tmp',$data);
	}

}