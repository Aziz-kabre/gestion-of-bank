<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from pratikborsadiya.in/vali-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 00:37:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="http://localhost/banque/assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="http://localhost/banque/assets/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <?php require "config/dashboard.php"; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Saisie des utilisateurs</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Utilisateur</li>
          <li class="breadcrumb-item"><a href="#">Enregistrement</a></li>
        </ul>
      </div>
      <div class="row">
        
        
        <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <?php echo $message; ?>
            <div class="tile-body">
              <form class="row" action="" method="POST" enctype="multipart/form-data">

                <div class="form-group col-md-6" hidden="">
                  <label class="control-label">ID</label>
                  <input readonly="" class="form-control" name="sai_id"> 
                  </div>

                  <div class="form-group col-md-6">
                  <label class="control-label">Login</label>
                  <input class="form-control" name="sai_login"> 
                  </div>


                <div class="form-group col-md-6">
                  <label class="control-label">Nom </label>
                  <input class="form-control" type="text" name="sai_nom">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Prenom </label>
                  <input class="form-control" type="text" name="sai_prenom">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Mot de passe</label>
                  <input class="form-control" type="password" name="sai_mdp">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Telephone</label>
                  <input class="form-control" name="sai_telephone">

                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Email</label>
                  <input class="form-control" name="sai_email"> 
                  </div>
                  <div class="form-group col-md-6">
                  <label class="control-label">Role</label>
                  <select class="form-control" name="sai_role">
                    <option value=></option>
                    <option value="Administrateur">Administrateur</option>
                    <option value="Membre">Membre</option>
                  </select> 
                  </div>
                  <div class="form-group col-md-6">
                  <label class="control-label">Photo</label>
                  <input class="form-control" type="file" name="sai_photo"> 
                  </div>
                  
                  <div class="form-group col-md-6">
                  <label class="control-label">Matricule</label>
                  <input class="form-control" name="sai_matricule"> 
                  </div>

                  <div class="form-group col-md-6">
                  <label class="control-label">Etat</label>
                  <input class="form-control" name="sai_etat"> 
                  </div>
          	
                  </div>
                  <center> 
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary" name="btn_ajouter"><i class="fa fa-fw fa-lg fa-check-circle"></i>Ajouter</button>&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-warning" name="btn_annuler"><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</button>&nbsp;&nbsp;&nbsp;
                  <button class="btn btn-danger" name="btn_supprimer"><i class="fa fa-fw fa-lg fa-times-circle"></i>Supprimer</button>
                </div>
              </div>
            </div>
            </center>
          </div>
        </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="http://localhost/banque/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/banque/assets/js/popper.min.js"></script>
    <script src="http://localhost/banque/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/banque/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="http://localhost/banque/assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/form-samples.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 00:38:00 GMT -->
</html>