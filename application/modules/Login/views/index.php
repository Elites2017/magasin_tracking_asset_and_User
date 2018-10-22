<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page de Connexion</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>public/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <?php echo form_open('Login/Verify'); ?>
              <h1>Page de Connexion</h1>
              <div>
            <?php
echo "<div class='error_msg red' >";
if (isset($erreur)) {
echo $erreur;
}
echo validation_errors();
echo "</div>";
?>

                <input type="text" name="identity" class="form-control" placeholder="Nom Utilisateur" required="required" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mot de Passe" required="required" />
              </div>
              <div>
                <input style=" margin-left:255px "  class="btn btn-default submit" type="submit" value=" Connecter " name="submit"/><br />
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div>
                  <h1><img style=" width:40px; margin-top:-5px " src="<?php echo base_url();?>public/images/logo.png" alt="..." class="img-circle ">Alpha</h1>
                  <p> Alpha Project © 2016 Tous droits reservés.</p>
                </div>
              </div>
           <?php echo form_close(); ?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>