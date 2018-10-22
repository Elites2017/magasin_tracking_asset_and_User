					<!--div class="col-md-6 col-sm-6 col-xs-12">
                        <p>Default grid slider with min and max values</p>
                        <input type="text" id="range" value=" " name="range" />
                    </div-->
					
					<!--Affichage horaire-->
					
					<?php
					if(empty($pro))	{$nom="Entreprise"; $id="HG001";}
					else{
						foreach($pro as $prf)
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
					
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Horaire<small><?php echo $nom;?></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
					
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Modifier Horaire</a>
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
					 <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
					<?php //var_dump ($jo);
					$ide;
					   if(empty($hor)) 
						{
						   echo '<h4 style="color:red;">Horaire non définit</h3><br/>';
						   echo '<h4>Définir l\'horaire</h4>
					<p class="text-muted font-13 m-b-30">
                      Cette fonctionnalité permet de définir l\'heure exacte de travail  de l\'entreprise et de ses employés.
                    </p>
						   <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						  <th>Lundi</th>
						  <th>Mardi</th>
                          <th>Mercredi</th>
                          <th>Jeudi</th>
                          <th>Vendredi</th>
						  <th>Samedi</th>
						  <th>Dimanche</th>
                        </tr>
                      </thead>
                      <tbody>
						<form method="post" action="'.base_url().'Comptes/inserer_horaire/'.$id.'" class="form-horizontal form-label-left"> 
						 <tr>
						  <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="1j" value="Lundi" placeholder="" hidden>
								<input type="time"  name="lud" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="luf" />
								</div>
								</div>
						  </td>
                          <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="2j" value="Mardi" placeholder="" hidden>
								<input type="time"  name="mad" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="maf" />
								</div>
								</div>
						  </td>
						  <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="3j" value="Mercredi" placeholder="" hidden>
								<input type="time"  name="med" />
								</div>
								
							<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="mef" />
								</div>
								</div>
						  </td>
						  <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="4j" value="Jeudi" placeholder="" hidden>
								<input type="time"  name="jed" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="jef" />
								</div>
								</div>
						  </td>
						  <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="5j" value="Vendredi" placeholder="" hidden>
								<input type="time"  name="ved" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="vef" />
								</div>
								</div>
						  </td>
						  <td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="6j" value="Samedi" placeholder="" hidden>
								<input type="time"  name="sad" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
								<input type="time"  name="saf" />
								</div>
								</div>
						  </td><td>
								<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Début</label><input type="text"  name="7j" value="Dimanche" placeholder="" hidden>
								<input type="time"  name="did" />
								</div>
								
								<div class="col-md-6 col-sm-6 col-xs-8">
								 <label class="control-label col-md-1 col-sm-1 ">Fin</label>
									<input type="time"  name="dif" />
								</div>
								</div>
						  </td>
						  
                       </tr>
                      </tbody>
                    </table>';
					
					if(empty($ide)){$tip="Générale"; $idev="HG001";}else{$tip="Employé";$idev=$ide;}
					
					echo '<input type="text"  name="ide" value="'.$idev.'" placeholder="" hidden>
							<input type="text"  name="tip" value="'.$tip.'" placeholder="" hidden>
					<Button type="submit" style="float:right;" class="btn">
                      <i class="fa fa-save"></i> Save
                    </Button>
					</form>';
						 
						}
					   else{
					   
					   echo '
                     Horaire definit pour...
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						  <th>Lundi</th>
						  <th>Mardi</th>
                          <th>Mercredi</th>
                          <th>Jeudi</th>
                          <th>Vendredi</th>
						  <th>Samedi</th>
						  <th>Dimanche</th>
                        </tr>
                      </thead>
                      <tbody>
						 <tr>';
						 foreach($hor as $horai)
					   {
					echo' 
						  <td>'.$horai->H_Debut.' - '.$horai->H_Fin.' <button type="button" style="float:right;" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm'.$horai->ID_hor_journalier.'">Modifier</button></td>
                        
						<div class="col-md-6 col-sm-6 col-xs-12"> 
						 ';  
							
					echo '<div class="modal fade bs-example-modal-sm'.$horai->ID_hor_journalier.'" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-sm">
						<div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Modifier horaire</h4>
                        </div>
                        <div class="modal-body"><p>Modifier l\'horaire du '.$horai->Jours.'</p>
						<div class="x_content">
                    <br />
                    <form method="post" action="'.base_url().'Comptes/updat_horaire/'.$id.'">
					 <div class="form-group">
								
								 <label class="control-label col-md-6 col-sm-6 ">Heure Début</label><input type="text"  name="2j" value="'.$horai->Jours.'" placeholder="" hidden/>
								 <input type="text"  name="idh" value="'.$horai->ID_hor_journalier.'" placeholder="" hidden/>
								 <input type="time"  name="h_debut" value="'.$horai->H_Debut.'"/>
								</br>
								 <label class="control-label col-md-6 col-sm-6 ">Heure Fin</label>
								 <input type="time"  name="h_fin" value="'.$horai->H_Fin.'"/>
								</div>
								';
					
                     echo '<div class="ln_solid"></div>
						</div>
						</div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button  type="Submit" class="btn btn-primary">Save changes</button>
						  </form>
                        </div>

                      </div>
                    </div>
                  </div>						
			</div>';
					   } echo '</tr>
                      </tbody>
                    </table>
					<a href="'.base_url().'Comptes/profil/'.$id.'" style="float:right;"><i class="fa fa-arrow-left"> Terminer </i></a>
                  </div>'; }?>
					<!--modifier horaire-->
					
                  
                  </div>
                </div>
              </div>
			</div>