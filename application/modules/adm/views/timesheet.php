<?php
					if(empty($emp))	{$nom="Entreprise"; $id="HG001";}
					else{
						foreach($emp as $prf)
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
									<div class="x_panel">
									  <div class="x_title">
										<h2>Timesheet <?php echo $nom; ?> <small></small></h2>
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

										<table style="font-size:0.9em;" class="table table-bordered col-md-6" >
										  <thead>
											<tr>
											<th>Jours</th>
											<?php
											$date = date("m-Y"); 

														for ($i = 1; $i <= date('t'); $i++)
														{
															$datedate[]=$i.'-'.$date;
														}
														foreach ($datedate as $dt) {

													  	$dat0 = $dt;
								                          $dat1=date_create($dat0);
								                          $dat1=$dat1->format('D-M-Y');
													  	$dat1 = substr($dat1, 0, 3);
													  	echo '<th>'.$dat1.'</th>';
													  }
													  


											/*$i=0;
											for($i=1; $i<=4; $i++)
											{
												
											  echo '<th>Lu</th>
													<th>Ma</th>
													<th>Me</th>
													<th>Je</th>
													<th>Ve</th>
													<th>Sa</th>
													<th>Di</th>';
											  
											}*/
											?>
											  
											  <th>Total heure</th>
											   <th>Total jours</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>

											  <th scope="row">Horaire</th>

											 <?php 
												echo '<br>';
													  $dt=date('t');
													  $dt=$dt/7;
													  echo '<br>';
													  $dt1=number_format($dt,1);

													$sme=0;$nbj=0;
													foreach ($datedate as $dt) {

													  	$dat0 = $dt;
								                          $dat1=date_create($dat0);
								                          $dat1=$dat1->format('D-M-Y');
													  	$dat1 = substr($dat1, 0, 3);
													  	if(isset($hor)&&(!empty($hor))){
														foreach($hor as $heur)
															{
																$j=$heur->Jours;
																$d=$heur->Duree;
															if($j=='Lundi'){
																$j = 'Mon';
																}
															if($j=='Mardi'){
																$j = 'Tue';
																}
															if($j=='Mercredi'){
																$j = 'Wed';
																}
															if($j=='Jeudi'){
																$j = 'Thu';
																}
															if($j=='Vendredi'){
																$j = 'Fri';
																}
															if($j=='Samedi'){
																$j = 'Sat';
																}
															if($j=='Dimanche'){
																$j = 'Sun';
																}
																if ($j == $dat1) {
																	$sme=$sme+$d; 
																	echo '<td>'.$d.'</td>';
																	if ($d!='0') {
																		$nbj=$nbj+1;
																	}
																}
																
															}
														}else{echo '<td>'.'0'.'</td>';}
													  	
													  	}echo '<td>'.$sme.' hres'.'</td>';echo '<td>'.$nbj.' jrs'.'</td>';

											/*
											 $i=0;$sommehr=0;$jours=array();$t=0;
											 for($i=1; $i<=4; $i++)
												{
													if(!empty($hor))
														{
														foreach($hor as $heur)
															{
																if($heur->Duree!=0){$jours[]=$heur->Duree;}
																echo '<td>'.$heur->Duree.'</td>';
																$sommehr+=$heur->Duree;
															}
														}

													if ($i == 4 && $t == 0) {
														$i=4-1; $t=1;
													}
											  
												} */

												//$nbrjr=count($jours);
												//echo '<td>'.$sommehr.' hr</td>
												//	  <td>'.$nbrjr.' jours</td>';
												?>
											  
											</tr>
											<tr>

											  <th scope="row">Heure Travail</th>
											  <?php
											 if (isset($JTE)&&!empty($JTE)) {
											  	
											  foreach ($JTE as $key) {
											  	$k = explode(' ',$key->datecong);
												$f=implode("",$k);
												$k1 = explode(',',$f);
												
											  } 
											}
											if (isset($k1)&&!empty($k1)) {
											  foreach ($k1 as $keyK1) {

											  	$dat0 = $keyK1;
						                          $dat1=date_create($dat0);
						                          $dat1=$dat1->format('d-D-M-Y');
											  	//$dat1 = substr($dat1, 0, 3);
											  	//$dat[]=$dat1;
											  }
											}
											
											if (isset($jour_T)&&!empty($jour_T)) {

											  foreach ($jour_T as $keyJ) {
											  	$j=$keyJ->Jours_T;
											  	$j1=date_create($j);
						                          $j11=$j1->format('D-M-Y');
						                          $j12=$j1->format('d-D-M-Y');
											  	//$j11 = substr($j11, 0, 3);
											  	$j12 = substr($j12, 0, 6);
											  	//$jrA[]=$j11;
											  	$jrB[]=$j12;
											  }
											}
											  
													$sme=0;$nbj=0;
													foreach ($datedate as $dt) {

													  	  $dat18 = $dt;
								                          $dat20=date_create($dat18);
								                          $datTS=$dat20->format('Y-m-d');
								                          $datJours=$dat20->format('l');
								                          $dat21=$dat20->format('D-m-Y');
								                          $dat22=$dat20->format('d-D-m-Y');
													  	//$dat21 = substr($dat21, 0, 3);
													  	$dat22 = substr($dat22, 0, 6);
													  	//$datA[]=$dat21;
													  	$datB[]=$dat22;
													  	if (isset($jrB)&&(!empty($jrB))) {
																if (in_array($dat22, $jrB)) {
																	if($datJours=='Monday'){
																$datJours = 'Lundi';
																}
															if($datJours=='Tuesday'){
																$datJours = 'Mardi';
																}
															if($datJours=='Wednesday'){
																$datJours = 'Mercredi';
																}
															if($datJours=='Thursday'){
																$datJours = 'Jeudi';
																}
															if($datJours=='Friday'){
																$datJours = 'Vendredi';
																}
															if($datJours=='Saturday'){
																$datJours = 'Samedi';
																}
															if($datJours=='Sunday'){
																$datJours = 'Dimanche';
																}
																	$DureeH=$controller->Conekcompte->select_DureeH($datJours,$id);
																	$DureeT=$controller->Conekcompte->select_DureeT($datTS,$id);
																	$Duree=$DureeT-$DureeH;
																	if ($Duree==0) {
																		$Duree=$DureeT;
																	}else{$Duree=$DureeT-$Duree;}
																	echo '<td>'.$Duree.'</td>';$sme=$sme+$Duree;$nbj=$nbj+1;
																}else{echo '<td>'.'0'.'</td>';}
															}else{echo '<td>'.'0'.'</td>';}

														}echo '<td>'.$sme.' hres'.'</td>';echo '<td>'.$nbj.' jrs'.'</td>';
															
											  /*
											  if(!empty($ferier))
											  {
													foreach($ferier as $fer)
														{
															$feriers= explode(",",$fer->datecong);
														}
											  }
												$jrsF=array();

											  foreach($feriers as $key=>$value)
												{
													$jrsF[]=$value;
												}
											  if(empty($tem))
												{
													echo '<td>0</td>';
												}
											  else
												{
													$som=0;
													foreach($tem as $temp)
														{
															if(in_array($temp->Jours_T, $jrsF))
																{
																	echo '<td>0</td>';
														
																}
																else
																{
																		//$jours=$jrsF->Jours_T;
																		echo '<td>'.$temp->Duree.'</td>';
																		$som=$som + $temp->Duree;
																}
												  
														}
														
														echo '<td>'.$som.' hr</td>';
														echo '<td>0 Jours</td>';
												}*/
											  ?>
											</tr>
											<tr>
											  <th scope="row">Heure suplementaire</th>
											  <?php
											  	$sme=0;$nbj=0;
													foreach ($datedate as $dt) {

													  	  $dat18 = $dt;
								                          $dat20=date_create($dat18);
								                          $datTS=$dat20->format('Y-m-d');
								                          $datJours=$dat20->format('l');
								                          $dat21=$dat20->format('D-m-Y');
								                          $dat22=$dat20->format('d-D-m-Y');
													  	//$dat21 = substr($dat21, 0, 3);
													  	$dat22 = substr($dat22, 0, 6);
													  	//$datA[]=$dat21;
													  	$datB[]=$dat22;
													  	if (isset($jrB)&&(!empty($jrB))) {
																if (in_array($dat22, $jrB)) {
																	if($datJours=='Monday'){
																$datJours = 'Lundi';
																}
															if($datJours=='Tuesday'){
																$datJours = 'Mardi';
																}
															if($datJours=='Wednesday'){
																$datJours = 'Mercredi';
																}
															if($datJours=='Thursday'){
																$datJours = 'Jeudi';
																}
															if($datJours=='Friday'){
																$datJours = 'Vendredi';
																}
															if($datJours=='Saturday'){
																$datJours = 'Samedi';
																}
															if($datJours=='Sunday'){
																$datJours = 'Dimanche';
																}
																	$DureeH=$controller->Conekcompte->select_DureeH($datJours,$id);
																	$DureeT=$controller->Conekcompte->select_DureeT($datTS,$id);
																	$Duree=$DureeT-$DureeH;
																	$Duree=abs($Duree);
																	echo '<td>'.$Duree.'</td>';
																	if ($Duree!=0) {
																		$sme=$sme+$Duree;$nbj=$nbj+1;
																	}
																}else{echo '<td>'.'0'.'</td>';}
															}else{echo '<td>'.'0'.'</td>';}

														}echo '<td>'.$sme.' hres'.'</td>';echo '<td>'.$nbj.' jrs'.'</td>';
											  ?>
											  <!-- <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td> -->
											</tr>
											<tr hidden>
											  <th scope="row">Congé annuel</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
											<tr hidden>
											  <th scope="row">Congé maladie</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
											<tr style="color:green;" hidden>
											  <th scope="row">Heures payable</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
											<tr hidden>
											  <th scope="row">Autre congé</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
											<tr hidden>
											  <th scope="row">Congé payant</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
											<tr style="color:red;" hidden>
											  <th scope="row">Heures non payable</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
										  </tbody>
										  <tr style="color:green;" hidden>
											  <th scope="row">Total</th>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											  <td>0</td>
											</tr>
										</table>

									  </div>
									</div>
	
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Emploi du temps</h2>
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
                    <p>Ce tableau permet de definir l'emploi du temps pour une date de chaque compte employé de l'entreprise.</p>
                    <!--form action="<?phpecho base_url();?>Comptes/fichier" class="dropzone" name="fichier" method="post" enctype="multipart/form-data"></form-->
					
					<div class="x_content">
					<?php  $nbreemp=count($emp);
							$action=' ';
						if($nbreemp > 1){$action=' ';}elseif($nbreemp==1){$action='hidden'; }
					?>
					<div <?php echo $action;?>>
					<form method="post" action="<?php echo base_url();?>Comptes/timesheet/<?php echo $id?>">
					<input type="date" name="jourT" value="<?php echo $dat;?>"/>
					<button type="submit">GO</button>
					</form>
					</div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						  <th>Photo</th>
                          <th>Nom & Prenom</th>					  
						  <th>Date</th>
						  <th>Heure d'arrivé</th>
                          <th>Heure de sorti</th>
                          <th> Action </th>
                        </tr>
                      </thead>


                      <tbody>
					   <?php 
					   //var_dump ($jo);
					   $mesaj='';
					   if(empty($emp)) {$mesaj='0 Emploi du temps à definir pour les employés';}
					   elseif($nbreemp==1)
					   {
						   foreach($emp as $employe)
							{
								$id=$employe->ID_Employe;
								$nom=$employe->Nom;
								$prnom=$employe->Prenom; 
							}
						   ?>
						    <form method="post" action="<?php echo base_url();?>Comptes/inserer_timesheet_indivi/<?php echo $id;?>">
                        <tr>
						 <td><img src="#"/></td>
                          <td><a href="<?php echo base_url(); ?>Comptes/profil/<?php echo $employe->ID_Employe; ?>"><b><?php echo $nom; ?></b> <?php echo $prnom; ?></a></td>
                          <td><input type="date" name="jourT"/></td>
						  <td><input type="number" name="ide" hidden value="<?php echo $id; ?>" /><input type="time"  name="hin"/></td>
                          <td><input type="time" name="hout"></td>
						  <td><button type="submit"  class="btn btn-success">Enregistrer</button></td>
                        </tr>
						</form>	
					<?php	   
					   }
					   else{
					   foreach($emp as $employe)
					   {

                         ?>
					   <form method="post" action="<?php echo base_url();?>Comptes/inserer_timesheet">
                        <tr>
						 <td><img src="#"/></td>
                          <td><a href="<? echo base_url(); ?>Comptes/profil/<?php echo $employe->ID_Employe; ?>"><b><?php echo $employe->Nom; ?></b> <?php echo$employe->Prenom; ?></a></td>
                          <td><?php echo $employe->SID; ?></td>
						  <td><input type="number" name="ide" hidden value="<?php echo $employe->ID_Employe; ?>" /><input type="time"  name="hin"/></td>
                          <td><input type="time" name="hout"><input type="date" hidden name="jourT" value="<?php echo $dat;?>" /></td>
						  <td><button type="submit"  class="btn btn-success">Enregistrer</button></td>
                        </tr>
						</form>	
					   <?php }}?>
                      </tbody>
                    </table>
					<?php echo $mesaj;?>
                  </div>
					
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>	
			<!--form ng-controller="timeshet" action="<? echo base_url(); ?>Comptes/insere_timesheet" name="tem">
                        <tr>
						 <td><img src="#"/></td>
                          <td><a href="<? //echo base_url(); ?>Comptes/profil/<?php// echo $employe->ID_Employe; ?>"><b><?php// echo $employe->Nom; ?></b> <?php //echo$employe->Prenom; ?></a></td>
                          <td><?php //echo $employe->SID; ?></td>
						  <td><input type="time" ng-model="timesh.ide" name="ide" value="<?php //echo $employe->ID_Employe; ?>" hidden/><input type="time" ng-model="timesh.hin" name="hin"/></td>
                          <td><input type="time"  ng-model="timesh.hout" name="hout"></td>
						  <td><button type="submit" ng-click="formtime()"  class="btn btn-success">Enregistrer</button></td>
                        </tr>
						</form-->	