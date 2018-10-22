


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
				<?php
					$hid='hidden';
					$go=' ';
					if($check==true)
					{
						$hid='';
						$go='hidden';
					}
							
					
					?>
				 <center ><div <?php echo $go;?>> <form method="post" action="<?php echo base_url();?>Comptes/timesheet/HG001">
					<input type="date" name="jourT" value="<?php echo $dat;?>"/>
					<button type="submit">GO</button>
					</form></div>
					</center>
<div <?php echo $hid;?>>					
		<p><h2><?php $datt=date_create($dat); $date=$datt->format('d-M-Y'); echo $date;?>&nbsp;&nbsp;&nbsp;&nbsp;<small class="fa fa-edit"><a href="<?php echo base_url();?>Comptes/timesheet/<?php echo "HG001";?>" >   Modifier la date</a></small></h2> </p>			
<table id="datatable-buttons" class="table table-striped table-bordered" >
                      <thead>
                        <tr>
						  <th>Photo</th>
                          <th>Nom & Prenom</th>					  
						  <th>NIF/CIN</th>
						  <th>Heure d'arrivé</th>
                          <th>Heure de sorti</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody> 
					  <?php
					  if(!empty($emp ))
					  {
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
					</div>
					</div>
					</div>
					</div>