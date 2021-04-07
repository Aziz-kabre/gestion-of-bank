<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="http://localhost/banque/assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="http://localhost/banque/assets/css/font-awesome.min.css">
    <title>Banque - Connexion</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Banque</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>CONNEXION</h3>
          <div class="form-group">
            <label class="control-label">Nom utilisateur</label>
            <input name="sai_login" class="form-control" type="text" placeholder="Email ou Login ou Telephone" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Mot de passe</label>
            <input name="sai_mdp" class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Retenir</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Mot de passe oublié ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button name="btn_connexion" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Se connecter</button>
          </div>
        </form>
        <form class="forget-form" action="http://pratikborsadiya.in/vali-admin/index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="http://localhost/banque/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/banque/assets/js/popper.min.js"></script>
    <script src="http://localhost/banque/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/banque/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="http://localhost/banque/assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 00:37:57 GMT -->
</html>