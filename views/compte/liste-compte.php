<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    
    <title>Banque - Liste des comptes</title>
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
          <h1><i class="fa fa-th-list"></i> Liste des comptes</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Compte</li>
          <li class="breadcrumb-item active"><a href="#">Liste</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Numero de compte</th>
                    <th>Type de compte</th>
                    <th>Date de creation</th>
                    <th>Solde du compte</th>
                    <th>Matricule</th>
                    <th>Etat du compte</th>
                  </tr>
                </thead>
                <tbody>
                	<?php if(!empty($sol)){ foreach ($sol as $key => $value) {
                		?>
                	
                  <tr>
                    <td><?php echo $value['numero_compte']; ?></td>
                    <td><?php echo $value['type_compte']; ?></td>
                    <td><?php echo $value['date_creation']; ?></td>
                    <td><?php echo $value['solde_compte']; ?></td>
                    <td><?php echo $value['matricule']; ?></td>
                    <td><?php echo $value['etat_compte']; ?></td>
                  </tr>
                  <?php } }  ?>
                </tbody>
              </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="http://localhost/banque/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://localhost/banque/assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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

<!-- Mirrored from pratikborsadiya.in/vali-admin/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 00:38:02 GMT -->
</html>