 <div class="">
<div class="row tile_count">
			  <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Enregistrer Employé <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox hidden">
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
                    <br />
                    <?php if(!empty($Message)){echo '<p style="color:red;">'.$Message.'</p>';}?>
					<form method="post" action="<?php echo base_url('Comptes/Inserer_employe');?>" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prenom</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="ord" onkeyup="filtreAlpha('ord', 'afi')" onkeydown="filtreAlpha('ord', 'afi')"  class="form-control" name="prenom" placeholder="">
							<span id='afi'></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="ord1" onkeyup="filtreAlpha('ord1', 'afi1')" onkeydown="filtreAlpha('ord1', 'afi1')"  class="form-control" name="nom"  placeholder="">
                       <span id='afi1'></span>
					   </div>
                      </div>
					  <div class="form-group">
                     <p>
                       &nbsp; &nbsp; &nbsp; 
					  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexe</label> M:
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>
					   </div>
                        <div class="form-group">
                          
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label> &nbsp; &nbsp; &nbsp; 
                              <input id="radiocash" onclick="TypeDedChoix('cash2','lajan2')" type="radio" checked="" value="" name="TypeRetrait"/>CIN
                              <input id="radioprctg" onclick="TypeDedChoix('prctg2','pousan2')" type="radio" value="" name="TypeRetrait"/> NIF
  
                      </div>

                      <div id="cash2" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">CIN </label>
                       
                        <div class="col-md-5 col-sm-9 col-xs-12 chp">
                          <input id="rdd" onkeyup="fsal('rdd','sid1')" onkeydown="fsal('rdd','sid1')" type="text" class="form-control"  name="sid" value="<?php echo set_value('rdd'); ?>" pattern="\d{2}[\-]\d{2}[\-]\d{2}[\-]\d{4}[\-]\d{2}[\-]\d{5}" title="Ex: 00-11-00-1950-11-00111"><span class="red"><?php echo form_error('sid'); ?></span>
                           <?php
echo "<div  class='error_msg red' >";
if (isset($error)) 
{
 echo $error;
}
echo "</div>";
?> 
                           <span id='sid1'></span>
                          <span class=" form-control-feedback right" aria-hidden="true">*</span>
                        </div>
                      </div>
                      <div id="prctg2" class="form-group hidden ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIF </label>
                        <div class="col-md-5 col-sm-9 col-xs-12 chp">
                          <input id="prc" disabled="disabled" onkeyup="fsal('prc','sid2')" onkeydown="fsal('prc','sid2')" type="text" class="form-control"  name="sid" value="<?php echo set_value('prc'); ?>"
                          pattern="\d{3}[\-]\d{3}[\-]\d{3}[\-]\d{1}" title="Ex: 000-111-000-1" ><span class="red"><?php echo form_error('sid'); ?></span>
                            <?php
echo "<div  class='error_msg red' >";
if (isset($error)) 
{
 echo $error;
}
echo "</div>";
?> 
                           <span id='sid2'></span>
                          <span class="form-control-feedback right" aria-hidden="true">*</span>
                        </div>
                      </div>     
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Code de l'employé</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="ord3"  onkeyup="filtreAlphaNum('ord3', 'afi3')" onkeydown="filtreAlphaNum('ord3', 'afi3')" class="form-control" name="cod_e" placeholder="000-000-000-0">
                        <span id="afi3"></span>
						</div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de naissance</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="dat" class="form-control" placeholder=" ">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone Mobile</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="tel" id="tel1" onkeyup="filtreTel('tel1', 'msg')" onkeydown="filtreTel('tel1', 'msg')" class="form-control" name="tel" placeholder="">
                        <span id="msg"></span>
						</div>
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone Maison</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="tel" id="tel" onkeyup="filtreTel('tel', 'msg2')" onkeydown="filtreTel('tel', 'msg2')" class="form-control" name="telm" placeholder="">
						   <span id="msg2"></span>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="mail" class="form-control" name="mail" placeholder="">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adresse</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" name="adres" placeholder=" ">
						  <span class="ng-hide" style="color: red" ng-show="frm.val.$dirty && frm.val.$error.required">required !</span>
							<span class="ng-hide" style="color: red" ng-show="frm.val.$dirty && frm.val.$error.email"> not email !</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Commentaire<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" name="com" placeholder='Commentaire'></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="tip" class="form-control">
                            <option>Selectionner type</option>
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
                          <select name="depart" class="form-control">
						  <option>Selectionner Département</option>
						  <?php
						  foreach($depart as $deprt)
						  {
                            echo '<option value="'.$deprt->ID_Departement.'">'. $deprt->Nom_Departement.'</option>';
						  } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Poste</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pos" class="form-control" tabindex="-1">                      
                            <option>Poste</option>
							<?php
						  foreach($poste as $pste)
						  {
                            echo '<option value="'.$pste->ID_Poste.'">'.$pste->Nom_poste.'</option>';
							$min=$pste->Salaire_min; $max=$pste->Salaire_max;
						  } ?>
                          </select>
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salaire de base</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number"  class="form-control" name="salair"/>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quota Congé</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="porata" class="form-control">
                            <option>----Quota Congé----</option>
                           <?php foreach($porata as $porat)
									{
										echo '<option value="'.$porat->ID_Leave_day_porata.'">'.$porat->Porata.'</option>';
									}
							?>
							
                          </select>
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date d'embauche</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="datembau" class="form-control" placeholder=" ">
                        </div>
                      </div>              
                      <div hidden class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Statut de l'employé
                          <br>
                        </label>

                        <div hidden class="col-md-9 col-sm-9 col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" name="etcomp" value="1" selected> Activer
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="etcomp" value="0"> Désactiver
                            </label>
                          </div>                                                
                        </div>
                      </div>

                      <div class="form-group hidden">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Etat de service employé
                          <br>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="etservi" value="En Service" class="flat" checked="checked"> En service
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="etservi" class="flat" disabled="disabled"> En congé
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="etservi" class="flat" disabled="disabled"> Mise en disponibilibé
                            </label>
                          </div>                                                                                                                           
                        </div>
                      </div> 
 <?php if(!empty($Message)){echo '<p style="color:red;">'.$Message.'</p>';}?>					  
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?php echo base_url()?>Comptes/" type="button"  class="btn btn-primary">Cancel</a href="<?php echo base_url()?>GestionUser/ajouter/" type="button">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
		</div>
<!--fin creation employe-->
  <div class="col-md-6 col-sm-6 col-xs-12">
                <div   class="x_panel">
                  <div class="x_title">
                    <h2>Nouveau employé <small>Employé enregistré</small></h2>
                    <ul class="nav navbar-right panel_toolbox hidden">
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

                    <table class="table table-striped">
                      <thead>
                        <tr>                        
                          <th>Prenom</th>
                          <th>Nom</th>
                          <th>NIF / CIN</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
					   //var_dump ($jo);
					   if(empty($jo)) {echo 'Pas de nouveau employé';}
					   else{
					   foreach($jo as $last_employe)
					   {
					   echo '<tr>
                          <td>'.$last_employe->Prenom.'</td>
                          <td>'.$last_employe->Nom.'</td>
                          <td>'.$last_employe->SID.'</td>
                        </tr>';
					   }}
                       ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>			

</div>

