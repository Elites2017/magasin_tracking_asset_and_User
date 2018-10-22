<?php

                    $session_privilleges = $this->session->userdata('privillege');
                  $page='pggce_hm9b';
                  $section='pgaat_hm11b';
                  $section1='pggce_hm12b';
                  $section2='pgma_hm8b';
                  $section3='pgmt_hm3b';
                  $section4='pggp_hm13b';

                  $priv=NULL;
                  $priv2=NULL;
                  $priv1=NULL;
                  $priv3=NULL;
                  $priv4=NULL;
                  $priv5=NULL;
                 
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
          if ($symb1_indice== $section1)
          {
      ( $priv1=$symb1_indice);
          }  
          if ($symb1_indice== $section2)
          {
      ( $priv3=$symb1_indice);
          }  
           if ($symb1_indice== $section3)
          {
      ( $priv4=$symb1_indice);
          }
          if ($symb1_indice== $section4)
          {
      ( $priv5=$symb1_indice);
          }                             
         }
      if ($priv2==$section) {
      $action='';
        }
    else{
      $action='hidden';
      }
        if ($priv1==$section1) {
      $action2='';
        }
    else{
      $action2='hidden';
      }
      if ($priv3==$section2) {
      $action3='';
        }
    else{
      $action3='hidden';
      }
       if ($priv4==$section3) {
      $action4='';
        }
    else{
      $action4='hidden';
      }
      if ($priv5==$section4) {
      $action5='';
        }
    else{
      $action5='hidden';
      }
        if ($priv==$page ) {
      $action1='';
        }
    else{
      $action1='disabled';
      }


      
      }} ?>

<?php

                    $session_privilleges = $this->session->userdata('privillege');
                  $pageb='pgei_hm4b';
                  $sectionb='pga/dc_hm5b';
                  $sectionb2='pgeip_hm6b';
                 
                  $privb=NULL;
                  $privb1=NULL;
                  $privb3=NULL;
                
                 
                          if ($session_privilleges['info_curent_profil']!=NULL) {
       //($session_privilleges['info_curent_profil']);
        foreach ($session_privilleges['info_curent_profil'] as $key=>$value) {
        foreach ($value as $test) {
          $symb1_indice= $test->Indice_symb;
              
          if ($symb1_indice== $pageb)
          {
        $privb=$symb1_indice;
          } 
            if ($symb1_indice== $sectionb)
          {
      ( $privb1=$symb1_indice);
          } 
         
          if ($symb1_indice== $sectionb2)
          {
      ( $privb3=$symb1_indice);
          }                    
         }
      if ($privb1==$sectionb || $privb3==$sectionb2 || $privb==$pageb ) {
      $actionb='';
        }
    else{
      $actionb='disabled';
      }
              
      }} ?>



<!-- page content -->
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profile Employé</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Rapport Employé <small></small></h2>
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

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                      <div class="profile_img">

                        <!-- end of image cropping -->
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url();?>public/images/picture.jpg" alt="Avatar" title="Change the avatar">

                          <!-- Cropping modal -->
                          <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                  <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                                    <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar-body">

                                      <!-- Upload image and data -->
                                      <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">Local upload</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                      </div>

                                      <!-- Crop and preview -->
                                      <div class="row">
                                        <div class="col-md-9">
                                          <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="avatar-preview preview-lg"></div>
                                          <div class="avatar-preview preview-md"></div>
                                          <div class="avatar-preview preview-sm"></div>
                                        </div>
                                      </div>

                                      <div class="row avatar-btns">
                                        <div class="col-md-9">
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                          </div>
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                  </div> -->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal -->

                          <!-- Loading state -->
                          <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                        </div>
                        <!-- end of image cropping -->

                      </div>
					  <?php 
					  foreach ($pro as $prf)
					  {
						 $etac=$idprofl=$prf->Etat_Compte;
						 $etas=$idprofl=$prf->Etat_Service;
						 if($etas==1){$etatservi="En service";}elseif($etas==2){$etatservi="En congé";}elseif($etas==3){$etatservi="Mise en disponibilité";}elseif($etas==0){$etatservi='<p style="color:red;">N\'est pas encore en service</p>';}
						 if($etac!='0'){$etat='<h5 style="color:green;">Activé / '.$etatservi.'</h5>';}
						 else{$etat='<h5 style="color:red;">Désactivé</h5>';}
						  $idprofl=$prf->ID_Employe;
						echo '<h3>
								'.$prf->Nom.' '.$prf->Prenom.'
							 </h3>'.$etat.'
                      

                      <ul class="list-unstyled user_data">
					  <li><i class="fa fa-briefcase user-profile-icon"></i> Developpeur
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> '.$prf->Adresse.' 
                        </li>

                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> '.$prf->Telephone.'
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-envelope-o user-profile-icon"></i>
                          '.$prf->Email.'
                        </li>
                      </ul>'; 
					  $idempl=$prf->ID_Employe;
					  }
                        
                      echo '<a href="'.base_url().'Comptes/modifier/'.$idempl.'" class="btn btn-success '.$actionb.' " ><i class="fa fa-edit m-right-xs "></i>Edit Profile</a>';?>
                      <br />

                      <!-- start skills -->
                     <div class="hidden"> <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul></div>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Emploi du temps</h2>
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
					   <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1t" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Semaine</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2t" role="tab" id="profile-tab1" data-toggle="tab" aria-expanded="false">Mois</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3t" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Année</a>
                          </li>

						  <li role="presentation" class="<?php echo $action; ?>"><a href="<?php echo base_url();?>Comptes/timesheet/<?php echo $idempl;?>">Timesheet</a>
                          </li>
						   <li role="presentation" class=""><a href="#tab_content4t" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Congé</a>
                          </li>
						   <li role="presentation" class=""><a href="#tab_content6t" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Horaire</a>
                          </li>
						   <li role="presentation" class=""><a href="#tab_content5t" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Calendrier</a>
                          </li>
                        </ul>
                        <div id="myTabContent" style="max-height:550px;" class="tab-content">
						  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1t" aria-labelledby="home-tab">
									<div id="graph_bar2" style="width:100%; height:280px;"></div>	
                          </div>
                          <div role="tabpanel" class="tab-pane fade active " id="tab_content2t" aria-labelledby="profile-tab">
								<div id="graph_bar1" style="width:100%; height:280px;"></div>
                          </div>
						  
                          <div role="tabpanel" class="tab-pane fade active " style="width:100%;" id="tab_content3t" aria-labelledby="profile-tab">
							<div id="graph_bar" style="width:100%; height:280px;"></div>
                          </div>
						  
                          <div role="tabpanel" class="tab-pane fade " id="tab_content4t" aria-labelledby="profile-tab">
                          
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Congé <small>Voir / Enregistrer</small></h2>
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

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Congé</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>#</th>
								  <th>Type Congé</th>
								  <th>Date de sortie</th>
								   <th>Date retour</th>
								  <th>Jours</th>
								   <th>Jours epuisé</th>
								   <th>Jours restant</th>
                                  <th>Description</th>
								  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                               
								<?php if(!empty($conge)){foreach($pro as $fil){$porata=$fil->Porata;}
										$i=0;
										foreach($conge as $conj)
										{
										
										    $i++;
											$nbrjcg=$porata*12;
											
												$debut = new DateTime($conj->Dat_out); 
												$fin = new DateTime($conj->Dat_in);
												$interval = $debut->diff($fin);
												 $cge=$interval->d;
												 $cgr=$nbrjcg-$cge;
												
											echo ' <tr><td scope="row">'.$i.'</td>
													<td>'.$conj->Type.'</td>
													<td>'.$conj->Dat_out.'</td>
													<td>'.$conj->Dat_in.'</td>
													<td>'.$nbrjcg.' Jours</td>
													<td>'.$cge.'</td>
													<td>'.$cgr.'</td>
													<td>'.$conj->Commentaire.'</td>
													<td><a href="'.base_url().'/Comptes/annuller/'.$conj->ID_Leave_day_taken.'">Annuller</a></td></tr>';
								}}
								?>
                                  
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel <?php echo $action2; ?>">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Enregistrer Congés</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                   <div class="x_panel ">
                  <div class="x_title">
                    <h2>Congé <small>Enregistrer les congés</small></h2>
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
                    <br />
                    <form method="post" action="<?php echo base_url();?>Comptes/inse_conge/<?php echo $idprofl;?>"class="form-horizontal form-label-left">
					
					<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12">Type de congé</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="id-tip" class="form-control">
                            <option>Choisir type de congé</option>
							<?php foreach($tipconge as $cong)
									{
										
										echo '<option value="'.$cong->ID_Leave_day.'">'.$cong->Type.'</option>';

									}
								?>
                            
                          </select>
                        </div>
                      </div>

					 <div class="form-group">
					  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de sortie</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="dat_out" class="form-control" placeholder="Valeur Ajustements">
                        </div>
                      </div> 
					
                      <div class="form-group">
					   <label class="control-label col-md-3 col-sm-3 col-xs-12">Date retour</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="dat_in" class="form-control" placeholder="Valeur Ajustements">
                        </div>
                      </div>                                                                
                      
                      <div class="form-group">
					   <label class="control-label col-md-3 col-sm-3 col-xs-12">Commentaire</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="com" id="autocomplete-custom-append" placeholder="Commentaire..." class="form-control col-md-10" style="float: left;" />
                          <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                        </div>
                      </div>                                                                                                                                              

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                          </div>
                        </div>
                      </div>                   
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
			</div>
			
			                            <!-- Horaire -->
			<div role="tabpanel" class="tab-pane fade" id="tab_content6t" aria-labelledby="profile-tab">
			 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Horaire<small>Employé</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="<?php echo base_url();?>Comptes/horaire/<?php echo $idprofl;?>">Modifier Horaire</a>
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
					<?php //var_dump ($jo);
					   if(empty($hor)) {echo '<h4 style="color:red;">Horaire non définit</h3><br/><a href="'.base_url().'Comptes/horaire/'.$idprofl.'" class="btn btn-success" ><i class="fa fa-edit m-right-xs"></i>Définir Horaire</a>';}
					   else{
					   
					   echo '
                     Horaire definit pour cet emplyé.
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
					   echo '
						  <td>'.$horai->H_Debut.' - '.$horai->H_Fin.'</td>
                        
							';
					   }}?></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			</div>
						  
<div role="tabpanel" class="tab-pane fade active" id="tab_content5t" aria-labelledby="profile-tab">
						
		
		<!-- loads jquery and jquery ui -->
		<!-- -->
		<script type="text/javascript" src="<?php echo base_url();?>public/date/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/date/js/jquery-ui-1.11.1.js"></script>
		<!--
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		-->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="<?php echo base_url();?>public/date/jquery-ui.multidatespicker.js"></script>
		
		<!-- mdp demo code -->
		<script type="text/javascript">
		<!--
			var latestMDPver = $.ui.multiDatesPicker.version;
			var lastMDPupdate = '2014-09-19';
			
			$(function() {
				// Version //
				//$('title').append(' v' + latestMDPver);
				$('.mdp-version').text('v' + latestMDPver);
				$('#mdp-title').attr('title', 'last update: ' + lastMDPupdate);
				
				// Documentation //
				$('i:contains(type)').attr('title', '[Optional] accepted values are: "allowed" [default]; "disabled".');
				$('i:contains(format)').attr('title', '[Optional] accepted values are: "string" [default]; "object".');
				$('#how-to h4').each(function () {
					var a = $(this).closest('li').attr('id');
					$(this).wrap('<'+'a href="#'+a+'"></'+'a>');
				});
				$('#demos .demo').each(function () {
					var id = $(this).find('.box').attr('id') + '-demo';
					$(this).attr('id', id)
						.find('h3').wrapInner('<'+'a href="#'+id+'"></'+'a>');
				});
				
				// Run Demos
				$('.demo .code').each(function() {
					eval($(this).attr('title','NEW: edit this code and test it!').text());
					this.contentEditable = true;
				}).focus(function() {
					if(!$(this).next().hasClass('test'))
						$(this)
							.after('<button class="test">test</button>')
							.next('.test').click(function() {
								$(this).closest('.demo').find('.hasDatepicker').multiDatesPicker('destroy');
								eval($(this).prev().text());
								$(this).remove();
							});
				});
			});
		// -->
		</script>
		
		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/date/css/mdp.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/date/css/prettify.css">
		<script type="text/javascript" src="<?php echo base_url();?>public/date/js/prettify.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/date/js/lang-css.js"></script>

		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>
			

<li class="demo full-row">
						<h3>Calendrier employer</h3>
						<form method="post" action="<?php echo base_url();?>Comptes/send">
						<div style="max-height:290px; overflow:auto;" id="withAltField">
							<div id="full-year"></div>
							<input  type="text" name="id" value="<?php echo $idprofl; ?>" hidden />
							<input  type="text" name="date" class="form-control hidden" id="altField" >
						</div>
						</br>
						<input <?php echo $action1; ?> type="submit" class="btn btn-primary" value="save date ">
					</form></br>
<div class="code-box">	
<script>
var today = new Date();
var y = today.getFullYear();
	
			
$('#full-year').multiDatesPicker({
	altField: '#altField',
	<?php if(!empty($dateconger)){
	foreach($dateconger as $key){ 
		$k = explode(' ',$key->datecong);
		$f=implode("",$k);
		$k1 = explode(',',$f);
	 ?>
	
	addDisabledDates: [ <?php foreach ($k1 as $keyK1) {
			$G = substr($keyK1, 0, 6);  echo "'".$G."'+y, "; } ?>],
	<?php } } ?>

	<?php if(!empty($date)){
	foreach($date as $key){ 
		$k = explode(' ',$key->datecong);
		$f=implode("",$k);
		$k1 = explode(',',$f);
	 ?>
	
	addDates: [ <?php foreach ($k1 as $keyK1) {
			$G = substr($keyK1, 0, 6);  echo "'".$G."'+y, "; } ?>],
	<?php } } ?>






	numberOfMonths: [3,4],
	defaultDate: '1/1/'+y


});
</script>
</div>
</li>


	

 
                          </div>
                          </div>
						  
                        </div>
                      </div>


</div>
                  
             
					  
					  <!--ffdf-->
					  
					  <div class="col-md-12 col-sm-12 col-xs-12">
					   <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Additif</a>
                          </li>
						  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Remboursement</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Taxes</a>
                          </li>
						  <li role="presentation" class="<?php echo "$action5"; ?>"><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Payroll</a>
                          </li>
                          <li role="presentation" class="<?php echo "$action5"; ?>"><a href="#tab_content6" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Archive</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              
                              <li>						  
							  
										<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="x_panel">
											<div class="x_title">
												<h2>Additif <small></small></h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
											  
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
														<ul class="dropdown-menu" role="menu">
														  <li><a href="#">Settings 1</a>
														  </li>
														  <li><a href="#">Settings 2</a>
														  </li>
														</ul>
													  </li>
													<li><a class="close-link"><i class="fa fa-close"></i></a></li>
											  
												</ul>
											<div class="clearfix"></div>
										  </div>
										  <div class="x_content">
						<?php
												if(empty($ajus))
												{Echo "0 Additif";}else
													{
											echo '<table class="table table-bordered">
											  <thead>
												<tr>
												  <th>Additif</th>
												  <th>Commentaire</th>
												  <th>Quantité</th>
												  <th>Date</th>
												</tr>
											  </thead>
											  <tbody>';
												foreach($ajus as $val)
												{
													$indis='1'; $adi=$val->indis;
												if($indis==$adi)
													{
														echo '	
														<tr>
														<td>'.$val->Type.'</td>
														<td>'.$val->Commentaire.'</td>
														<td>'.$val->Valeur.'</td>
														<th scope="row">'.$val->Dat.'</th>
														</tr>';
													}
													}}
												?>
												
												
											  </tbody>
											</table>
										  </div>
										</div>            			  
											  </div>
											  
									<div class="col-md-6 col-xs-12 <?php echo $action3; ?> ">
										<div class="x_panel">
										  <div class="x_title">
											<h2>Additif <small>Ajouter un additif</small></h2>
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
											<br />
											<form method="post" action="<?php echo base_url();?>Comptes/inse_ajus/<?php echo $idprofl;?>"class="form-horizontal form-label-left">
											
											<div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <select name="tipajus" class="form-control">
													<option>Additif</option>
													<option>PBE </option>
													<option>Bonus</option>
													<option>Prime</option>
												  </select>
												</div>
											  </div>

											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <input type="number" name="val" class="form-control" placeholder="Valeur Ajustements">
												</div>
											  </div>                                                                
											  
											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <input type="text" name="com" id="autocomplete-custom-append" placeholder="Commentaire..." class="form-control col-md-10" style="float: left;" />
												  <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
												</div>
											  </div>                                                                                                                                              

											  <div class="ln_solid"></div>
											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
												  <button type="submit" class="btn btn-primary">Cancel</button>
												  <button type="submit" class="btn btn-success">Submit</button>
												</div>
											  </div>

											</form>
										  </div>
										</div>
									  </div>
												  </li>
					</ul>
             </div>
              
			  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
			  
				<div class="col-md-6 col-sm-6 col-xs-12 ">
											<div class="x_panel">
											<div class="x_title">
												<h2>Remboursement <small></small></h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
											  
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
														<ul class="dropdown-menu" role="menu">
														  <li><a href="#">Settings 1</a>
														  </li>
														  <li><a href="#">Settings 2</a>
														  </li>
														</ul>
													  </li>
													<li><a class="close-link"><i class="fa fa-close"></i></a></li>
											  
												</ul>
											<div class="clearfix"></div>
										  </div>
										  <div class="x_content">
						<?php
												if(empty($ajus))
												{Echo "0 Remboursement";}else
													{
											echo '<table class="table table-bordered">
											  <thead>
												<tr>
												  <th>Prélevement</th>
												  <th>Commentaire</th>
												  <th>Quantité</th>
												  <th>Date</th>
												</tr>
											  </thead>
											  <tbody>';
												foreach($ajus as $val)
												{
													$indis='0'; $adi=$val->indis;
													if($indis==$adi)
													{
														echo '	
														<tr>
														<td>'.$val->Type.'</td>
														<td>'.$val->Commentaire.'</td>
														<td>'.$val->Valeur.'</td>
														<th scope="row">'.$val->Dat.'</th>
														</tr>';
													}
												 
													}}
												?>
												
												
											  </tbody>
											</table>
										  </div>
										</div>            			  
											  </div>
											  
									<div class="col-md-6 col-xs-12 <?php echo $action3; ?>">
										<div class="x_panel">
										  <div class="x_title">
											<h2>Remboursement <small></small></h2>
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
											<br />
											<form method="post" action="<?php echo base_url();?>Comptes/inserer_prelev/<?php echo $idprofl;?>"class="form-horizontal form-label-left">
											
											<div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <select name="tipajus" class="form-control">
													<option>Remboursements</option>
													<option>Crédit </option>
													<option>AVSS</option>
													<option>DPS</option>
												  </select>
												</div>
											  </div>

											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <input type="number" name="val" class="form-control" placeholder="Valeur Ajustements">
												</div>
											  </div>                                                                
											  
											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12">
												  <input type="text" name="com" id="autocomplete-custom-append" placeholder="Commentaire..." class="form-control col-md-10" style="float: left;" />
												  <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
												</div>
											  </div>                                                                                                                                              

											  <div class="ln_solid"></div>
											  <div class="form-group">
												<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
												  <button type="submit" class="btn btn-primary">Cancel</button>
												  <button type="submit" class="btn btn-success">Submit</button>
												</div>
											  </div>

											</form>
										  </div>
										</div>
									  </div>
			  
			  </div>
			  
		<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
		
				<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-money"></i> Taxes <small></small></h2>
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

                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Taxes</h4>
                        </a>
                        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Taxes</th>
                                  <th>Poucentage Taxes</th>
                                  <th>Description</th>
								  <th>Date</th>
                                </tr>
                              </thead>
                              <tbody>
							  <?php
							  $no=0;
							  if(empty($tax_e))
							  {$messaj='0 Taxe';}else{ $messaj='';
							  foreach($tax_e as $taxe)
									{
										$no++;
										$taxe_em[]=$taxe->ID_Taxe;
										echo '<tr>
												<td>'.$no.'</td>
												<td >'.$taxe->Nom_Taxe.'</td>
												<td>'.$taxe->Value.' %</td>
												<td>'.$taxe->Commentaire.'</td>
												<td>'.$taxe->Dat.'</td>
											</tr>';

									}}
								?>
                              </tbody>
                            </table><?php echo $messaj;?>
                          </div>
                        </div>
                      </div>
                      <div class="panel <?php echo $action4; ?>">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Ajouter Taxes</h4>
                        </a>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
						  <form method="post" action="<?php echo base_url();?>Comptes/affecter_taxe/<?php echo $idprofl;?>"class="form-horizontal form-label-left">
						  <Button type="submit" style="float:left;" class="btn">
                      <i class="fa fa-save"></i> Save
                    </Button>
					<input type="text" name="ide" value="<?php echo $idprofl;?>" hidden />
								 <table class="table table-striped">
                              <thead>
                                <tr>
								 <th>Action</th>
                                  <th>#</th>
                                  <th>Taxes</th>
                                  <th>Poucentage Taxes</th>
                                  <th>Description</th>
								  <th>Date</th>
                                </tr>
                              </thead>
                              <tbody>
							  <?php
							  $no=0;
							  if(!empty($tax))
							  {
							  foreach($tax as $taxe)
									{ 
									if(empty($taxe_em))
									{  
										$no++;
										echo '<tr class="headings">
												<th><input type="checkbox" name="idt'.$no.'" value="'.$taxe->ID_Taxe.'" id="check-all" class="flat"></th>
												<td>'.$no.'</td>
												<td >'.$taxe->Nom_Taxe.'</td>
												<td>'.$taxe->Value.' %</td>
												<td>'.$taxe->Commentaire.'</td>
												<td>'.$taxe->Dat.'</td>
											</tr>';
									}
									else{
										if(in_array($taxe->ID_Taxe, $taxe_em)){ }
										else{
										$no++;
										echo '<tr class="headings">
												<th><input type="checkbox" name="idt'.$no.'" value="'.$taxe->ID_Taxe.'" id="check-all" class="flat"></th>
												<td>'.$no.'</td>
												<td >'.$taxe->Nom_Taxe.'</td>
												<td>'.$taxe->Value.' %</td>
												<td>'.$taxe->Commentaire.'</td>
												<td>'.$taxe->Dat.'</td>
											</tr>';
											}

									}
									}}
									echo '<input type="text" name="nbr" value="'.$no.'" hidden />';
								?>
                              </tbody>
                            </table>
							</form>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
		
		</div>			  
			
			<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Payroll <small>Etat Financier</small></h2>
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

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Salaire Brut </th>
							<th class="column-title">Projet</th>
                            <th class="column-title">Taxes </th>
                            <th class="column-title">Prélevements </th>
                            <th class="column-title">Salaire Net </th>
                            <th class="column-title">Additif</th>
                            <th class="column-title">Over-time </th>
                            <th class="column-title no-link last"><span class="nobr">Cash</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="odd pointer"> 
						<?php	
						//salaire brut
						if(empty($sal_poste)){echo '<td class=" ">0 GDS</td>';}
						else{
						foreach($sal_poste as $salai)
						{ echo '<td class=" ">'.$salai->Salaire.' GDS</td>';}}
						
						//Projet
						if(empty($projet)){echo '<td class=" ">0 GDS</td>';$idproj=0; $somproj=0;}else
						{ $somproj=0; foreach($projet as $proj)
						{  $somproj= $somproj + $proj->Value;
						  $idproj=$proj->ID_prjet_employer;}
						  echo '<td class=" ">'.$somproj.' GDS</td>';}
						//Taxes
						$tax=0;
						if(empty($tax_e)){echo '<td class=" ">0 %</td>';}else
						{foreach($tax_e as $taxem)
						{$tax =$tax + $taxem->Value;}
						echo '<td class=" ">'.$tax.' %</td>';}
						
						//Prelevement
						if(empty($ajus)){echo '<td class=" ">0 GDS</td>';}else
						{$sompre=0; foreach($ajus as $ajuste)
						{ if($ajuste->indis==0){$sompre=$sompre + $ajuste->Valeur;}}echo '<td class=" ">'.$sompre.' GDS</td>';}
						
						//salaire net
						if(empty($salnet)){echo '<td class=" ">0 GDS</td>';}else
						{foreach($ajus as $ajuste)
						{ echo '<td class=" ">'.$ajuste->Valeur.' GDS</td>';}}
						
						//Additif
						if(empty($ajus)){echo '<td class=" ">0 GDS</td>';}else
						{$somajou=0; foreach($ajus as $ajuste)
						{if($ajuste->indis==1){$somajou=$somajou + $ajuste->Valeur;}} echo '<td class=" ">'.$somajou.' GDS</td>';}
						
						//over time
						if(empty($hor)){echo '<td class=" ">0 HR</td>';}else
						{
							$heu_se=0;
							foreach($hor as $heur)
						{
							 $heu_se=$heu_se + $heur->Duree;
						}
						$heur_trav=0;
						if(empty($jour_travay))
						{$heur_trav=0;}else{
						foreach($jour_travay as $heur_travay)
							{
								$heur_trav =$heur_trav + $heur_travay->Duree;
							}
						}
						  $heur_repui= 4 * $heu_se;
						if($heur_repui < $heur_trav)
						{
							$som=$heur_trav - $heur_repui;
						}
						else 
						{
							$som=0;
						}
						$over=abs($som);
						echo '<td class=" ">'.$over.' hr</td>';
						}
						
						//Cash valide
						if(empty($cash)){echo '<td class=" ">0 GDS</td>';}else
						{foreach($ajus as $ajuste)
						{ echo '<td class=" ">'.$ajuste->Valeur.' GDS</td>';}}
						
						?>                         
                            
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
				 <a href="<?php echo base_url();?>Payroll/payroll_indivi/<?php echo $idprofl;?>/<?php echo $idproj;?>"><button type="button" style="float:right;" class="btn btn-success btn-lg"> <b> Payroll </b> </button></a>
                </div>
              </div>
             </div>        
                          
            <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
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

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Invoice </th>
                            <th class="column-title">Invoice Date </th>
                            <th class="column-title">Order </th>
                            <th class="column-title">Bill to Name </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>                        
                          </tr>                         
                          <tr class="odd pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 28, 2014 11:30:12 PM</td>
                            <td class=" ">121000208</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                          </div>
                        </div>
                      </div>
					  </div>
					  <!----fgdsgd--->
					</div>
                </div>  
              </div>       
            </div>
          </div>
        <!-- /page content -->
		
		


   
