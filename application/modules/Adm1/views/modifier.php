
<?php

                    $session_privilleges = $this->session->userdata('privillege');
                  $page='pgei_hm4b';
                  $section='pga/dc_hm5b';
                  $section2='pgeip_hm6b';
                 
                  $priv=NULL;
                  $priv2=NULL;
                  $priv1=NULL;
                  $priv3=NULL;
                
                 
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
         
          if ($symb1_indice== $section2)
          {
      ( $priv3=$symb1_indice);
          }                    
         }
      if ($priv2==$section) {
      $action='';
        }
    else{
      $action='disabled';
      }
        
      if ($priv3==$section2) {
      $action2='';
        }
    else{
      $action2='disabled';
      }
       
      
        if ($priv==$page ) {
      $action1='';
        }
    else{
      $action1='disabled';
      }


      
      }} ?>




<?php foreach($amodifi as $veri) {if($veri->Etat_Compte==0){$read='readonly="readonly"';$desac="disabled";}elseif($veri->Etat_Compte==1){$read="";$desac="";}}?>
<section class="panel">

                        <div class="x_title">
                         <?php
					if(empty($amodifi))	{$nom="Entreprise"; $id="HG001";}
					else{
						foreach($amodifi as $prf)
						{
							$id=$prf->ID_Employe;
							$nom=$prf->Prenom.' '.$prf->Nom;
						}
						echo '<div class="page-title">
					<div class="title_left">
					<a href="'.base_url().'Comptes/profil/'.$id.'"><i class="fa fa-arrow-left"> RETOUR</i></a>
					</div>
					</div>';
					}				
					
					?>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                          <h3 class="green"><i class="fa fa-paint-brush"></i> Modification </h3>

                          <p>Cet paramètre permet de modifier les informations personnelles des employés.</p>
                          <br />
<div class="col-md-6 col-sm-6 col-xs-12">
                      <?php    
				foreach($amodifi as $val1)
						{
							$sex=$val1->Sexe;
							$sexe="Masculin";
							if($sex!="M"){$sexe="Féminin";}
                         echo '	
						 <h3>Identifier</h3>
                           <ul>
							<li><p class="title">Nom : '.$val1->Nom.'</p></li>
							<li><p class="title">Prenom : '.$val1->Prenom.'</p></li>
							<li><p class="title">Sexe : '.$sexe.'</p></li>
                            <li><p>Date de naissance : '.$val1->Date_naissance.'</p></li>
							<li><p>SID : '.$val1->SID.'</p></li>
						  </ul>
                            <button type="button" class="btn btn-primary '.$action1.' " data-toggle="modal" '.$desac.' data-target=".bs-example-modal-sm">Modifier</button>
							';
						}
						?>	
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Identification</h4>
                        </div>
                        <div class="modal-body">
						<div class="x_content">
                    <br />
                    <form method="post" action="<?php echo base_url();?>Comptes/modifier_data1"class="form-horizontal form-label-left">
					<?php 
					foreach($amodifi as $val1)
					{
                     echo '<div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" name="id" hidden value="'.$val1->ID_Employe.'"/>
                          <input type="text" name="nom" class="form-control" value="'.$val1->Nom.'"/>
                        </div>
                      </div>  
					  <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="prenom" class="form-control" value="'.$val1->Prenom.'"/>
                        </div>
                      </div>
 					   <div class="form-group">
                     <p>
                       &nbsp; &nbsp;  M:
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>
					   </div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="sid" class="form-control" value="'.$val1->SID.'"/>
                        </div>
                      </div> 
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="dat_nai" id="autocomplete-custom-append" value="'.$val1->Date_naissance.'" class="form-control col-md-10" style="float: left;" />
                          <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                        </div>
                      </div>';                                                                                                                                              
					} ?>
                      <div class="ln_solid"></div>
                  </div>
                         </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
						  </form>
                        </div>

                      </div>
                    </div>
                  </div>
              </div>    
                         

                          <br />
           <div class="col-md-6 col-sm-6 col-xs-12">    
                                <?php    
				foreach($amodifi as $val1)
						{
                         echo '	
						 <h3>Contact</h3>
						 <ul>
                            <li><p class="title">Adresse : '.$val1->Adresse.'</p></li>
							<li><p class="title">E-mail : '.$val1->Email.'</p></li>
							<li><p class="title">Tel Mobile : '.$val1->Telephone.'</p></li>
                            <li><p>Tel Maison : '.$val1->Telephone_maison.'</p></li>
						 </ul>
                            <button type="button" class="btn btn-primary '.$action1.'" data-toggle="modal" '.$desac.' data-target=".bs-example-modal-sm2">Modifier</button>
							';
						}
						?>
				<div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Contact</h4>
                        </div>
                        <div class="modal-body">
						<div class="x_content">
                    <br />
                    <form method="post" action="<?php echo base_url();?>Comptes/modifier_data2"class="form-horizontal form-label-left">
					<?php
					foreach($amodifi as $val1)
						{
                      echo '<div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" name="id" hidden value="'.$val1->ID_Employe.'"/>
                          <input type="text" name="adres" class="form-control" value="'.$val1->Adresse.'">
                        </div>
                      </div>  
					  <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="mail" class="form-control" value="'.$val1->Email.'">
                        </div>
                      </div>
 					  
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="mobil" class="form-control" value="'.$val1->Telephone.'">
                        </div>
                      </div> 
                         
					<div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="telmaison" class="form-control" value="'.$val1->Telephone.'">
                        </div>
                      </div>';						 
						}?>
                      <div class="ln_solid"></div>
                  </div>
                         </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
						  </form>
                        </div>

                      </div>
                    </div>
                  </div>						
			</div>
<div class="clearfix"></div> 
</br> </br> 
<?php    
				foreach($amodifi as $val3)
						{
							$type=$val3->Type;
							$etacomp=$val3->Etat_Compte;
							$etaservi=$val3->Etat_Service;
							
                         
						}
						
						?>
<!--info Poste de l'employe-->  
<div class="x_title">
   <div class="clearfix"></div>
</div>                                     
<div class="col-md-9 col-xs-12">
<form method="post" action="<?php echo base_url();?>Comptes/activation">
  <div class="x_panel">
  <p>L'activation d'un compte permet d'effectuer des operations sur le compte pour le Payroll. La desactivation d'un compte le met hors des operations permettant le payroll. </p> 
<?php
foreach ($amodifi as $prf)
					  {
					  echo '<input type="text" name="id" hidden value="'.$prf->ID_Employe.'"/>';
						 $eta=$prf->Etat_Compte;
						 if($eta==1)
								{
									echo '<div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Statut de l\'employé
                          <br>
                          <small class="text-navy">Est ce qu\'il est activé ou non</small>
                        </label>
									<div class="col-md-9 col-sm-9 col-xs-12">
											<div class="radio">
											<label>
											<input '.$action.' type="radio" name="etacomp" value="1" checked="checked"/> Activer
											</label>
											</div>
											<div class="radio">
											<label>
											<input '.$action.'  type="radio" name="etacomp" value="0"> Désactiver
											</label>
											</div>                                                
										</div>';
										}
						 else
								{
									echo '<div class="col-md-9 col-sm-9 col-xs-12">
											<div class="radio">
											<label>
											<input '.$action.' type="radio" name="etcomp" value="1"> Activer
											</label>
											</div>
											<div class="radio">
											<label>
											<input '.$action.' type="radio" name="etcomp" value="0" checked="checked"> Désactiver
											</label>
											</div>                                                
											</div>';
								}}
?></br></br></br></br>
<button <?php echo $action; ?> type="submit" style="float:left;" class="btn btn-primary">Save</button>
</div>
</form>

<form method="post" action="<?php echo base_url();?>Comptes/modifier_data3">

<?php 		

foreach($amodifi as $valdi){
echo '<input type="text" name="id" hidden value="'.$valdi->ID_Employe.'"/>';}?>
                <div class="x_panel">
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select <?php echo $action2; ?> name="tip" class="form-control" <?php echo $desac;?>>
						  <?php foreach($amodifi as $valdi){
                            echo '<option value="'.$valdi->Type.'">'.$valdi->Type.'</option>';}?>
                            <option value='Stage'> Stage</option>
                            <option value='Emploi'> Emploi</option>
                            <option value='Contrat'> Contrat</option>
                            <option value='Benevole'> Benevole</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Départements</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select <?php echo $action2; ?> name="depart" class="form-control" <?php echo $desac;?>>
						  <?php
						  	if(empty($sal_poste)){}
						else{foreach($sal_poste as $val4)
						{
							echo '<option value="'.$val4->ID_Departement.'">'.$val4->Nom_Departement.'</option>';
							echo $min=$val4->Salaire_min;
                         
						}}
						  
						  foreach($depart as $deprt)
						  {
                            echo '<option value="'.$deprt->ID_Departement.'">'.$deprt->Nom_Departement.'</option>';
						  } ?>
                          </select>
                        </div>
                      </div></br>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Poste</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select <?php echo $action2; ?> name="pos" class="form-control" tabindex="-1" <?php echo $desac;?>>                      
							<?php
								if(empty($sal_poste)){}
						else{foreach($sal_poste as $val5)
						{
							echo '<option value="'.$val5->ID_Poste.'">'.$val5->Nom_poste.'</option>';
                         
						}}
							
						  foreach($poste as $pste)
						  {
                            echo '<option value="'.$pste->ID_Poste.'">'.$pste->Nom_poste.'</option>';
						  } ?>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salaire de base</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
						<?php if(empty($sal_poste)){ 
						echo '<input '.$action2.' type="number" class="form-control"  '.$read.' placeholder="0.0$"/>';
                        }
						else{foreach($sal_poste as $val6)
						{
                          echo '<input '.$action2.' type="number" '.$read.' min="'.$val6->Salaire_min.'" max="'.$val6->Salaire_max.'" class="form-control" name="salair" value="'.$val6->Salaire.'" placeholder="Entre 2000 à 7000"/>';
                        }}?>
						</div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quota Congé</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select  <?php echo $action2; ?> name="porata" class="form-control" <?php echo $desac;?>>
                            <?php foreach($amodifi as $valdi){
                            echo '<option value="'.$valdi->ID_Leave_day_porata.'">'.$valdi->Porata.' Jour/Mois</option>';}
							foreach($porata as $porat)
								{
									echo '<option>'.$porat->Porata.'</option>';
								}
							?>

                          </select>
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date d'embauche</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
						<?php foreach($amodifi as $valbau){
                            echo '<input '.$action2.' type="date" name="datembau" value="'.$valbau->Start_dat.'" '.$desac.' class="form-control">';}?>
                      </div>  					  
                      
					<?php 
							foreach ($amodifi as $prf)
				 {
					$etacompt=$prf->Etat_Service;
					if($etacompt==1)
					  {
						echo '<div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Etat de service employé
                          <br>
                          <small class="text-navy">ESt ce qu\'il est en service ou pas</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="1" class="flat" checked="checked" '.$desac.'> En service
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="2" class="flat" '.$desac.' > En congé
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="3" class="flat" '.$desac.' > Mise en disponibilibé
                            </label>
                          </div>                                                                                                                           
                        </div>
                      </div>'; 
					  } 
					elseif($etacompt==2)
						{
							echo '<div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Etat de service employé
                          <br>
                          <small class="text-navy">ESt ce qu\'il est en service ou pas</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="1" class="flat" '.$desac.'> En service
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="2" class="flat" checked="checked" '.$desac.'> En congé
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="3" class="flat" '.$desac.'> Mise en disponibilibé
                            </label>
                          </div>                                                                                                                           
                        </div>
                      </div>';
						}
					elseif($etacompt==3)
					{
						echo '<div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Etat de service employé
                          <br>
                          <small class="text-navy">ESt ce qu\'il est en service ou pas</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="1" class="flat" '.$desac.'/> En service
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="2" class="flat" '.$desac.'/> En congé
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="3" class="flat" checked="checked" '.$desac.'/> Mise en disponibilibé
                            </label>
                          </div>                                                                                                                           
                        </div>
                      </div>';
					}
					else
					{
						echo '<div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Etat de service employé
                          <br>
                          <small class="text-navy">ESt ce qu\'il est en service ou pas</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="1" class="flat" '.$desac.'/> En service
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="2" class="flat" '.$desac.'/> En congé
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="radio" '.$action2.' name="etservi" value="3" class="flat" '.$desac.'/> Mise en disponibilibé
                            </label>
                          </div>                                                                                                                           
                        </div>
                      </div>';
					}
					}
								
								
						?>
                        
                      </div>
					  <button <?php echo $action2; ?> type="submit" style="float:right;" class="btn btn-primary">Save changes</button>
 </div>
 </form>
 </div> 
 </div>
                      </section>