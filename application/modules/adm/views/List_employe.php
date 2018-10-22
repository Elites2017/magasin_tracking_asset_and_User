
<?php

                    $session_privilleges = $this->session->userdata('privillege');
                  $page='pgae_hm1b';
                  $section='pgae_hm2b';
                  $priv=NULL;
                  $priv2=NULL;
                 
                  $A511='B_lifePower';
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
      $action1='';
        }
    else{
      $action1='disabled';
      }


      
      }} ?>



<?php ?>
		<div class="col-md-12 col-sm-12 col-xs-12">

				<a href="<?php echo base_url();?>Comptes/Creer_comptes"><button <?php echo $action1; ?> type="button" class="btn btn-default btn-lg">Ajouter Employé</button></a>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des employés <small>Comptes</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Ce tableau affiche tous les employés actifs de votre entreprise.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nom & Prenom</th>
						  <th>Date Naissance</th>
						  <th>SID</th>
						  <th>Type</th>
                          <th>Poste</th>
						  <th>Salaire</th>
                          <th>Téléphone</th>
						  <th>E-mail</th>
						  <th>Adresse</th>
                          <th>Start date</th>
                        </tr>
                      </thead>


                      <tbody>
					   <?php 
					   //var_dump ($jo);
					   if(empty($jo)) {echo 'Pas de nouveau employé';}
					   else{
					   foreach($jo as $last_employe)
					   {
              if($action=='true')
              {
               echo  '<tr>
                          <td><a href="'.base_url().'Comptes/profil/'.$last_employe->ID_Employe.'"><b>'.$last_employe->Nom.'</b> '.$last_employe->Prenom.'</a></td>';
              }
              else
              {
                 echo  '<tr>
                          <td><b>'.$last_employe->Nom.'</b> '.$last_employe->Prenom.'</td>';
              }

					   
                       
						 echo ' <td>'.$last_employe->Date_naissance.'</td>
                          <td>'.$last_employe->SID.'</td>
						  <td>'.$last_employe->Type.'</td>
                          <td>'.$last_employe->Nom_poste.'</td>
						  <td>'.$last_employe->Salaire.' GDES</td>
                          <td>'.$last_employe->Telephone.'</td>
                          <td>'.$last_employe->Email.'</td>
                          <td>'.$last_employe->Adresse.'</td>
						  <td>'.$last_employe->Start_dat.'</td>
                        </tr>
							';
					   }}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
