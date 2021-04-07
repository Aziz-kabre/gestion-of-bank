  <?php if(!empty($_SESSION['role']) and $_SESSION['role']=="Administrateur"){ ?>
  <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index-2.html">Banque</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="recherche">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Paramètre</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="http://localhost/banque/search/utilisateur/deconnexion"><i class="fa fa-sign-out fa-lg"></i>Deconnexion</a></li>
          </ul>
        </li>
      </ul>
    </header>

    
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <?php if(empty($_SESSION['photo'])){  ?>
        <img class="app-sidebar__user-avatar" src="http://localhost/banque/assets/img/48.jpg" alt="Photo profil">
        <?php  } else{  ?>
       <img width="48" height="48" class="app-sidebar__user-avatar" src="data:image;base64,<?php echo base64_encode($_SESSION['photo']); ?>" alt="Photo profil">
        <?php } ?>
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href=""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"><i>Menu General</i></span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gestion des utilisateurs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="http://localhost/banque/search/utilisateur/profil-utilisateur"><i class="icon fa fa-circle-o"></i> Profil utilisateur</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/utilisateur/enregistrement"><i class="icon fa fa-circle-o"></i> Saisie des utilisateurs</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/utilisateur/liste"><i class="icon fa fa-circle-o"></i> Liste des utilisateurs</a></li>
            
          </ul>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Gestion des comptes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="http://localhost/banque/search/compte/enregistrement"><i class="icon fa fa-circle-o"></i> Saisie des comptes</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/compte/liste"><i class="icon fa fa-circle-o"></i> Liste des comptes</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/compte/activite"><i class="icon fa fa-circle-o"></i> Activites des comptes</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Gestion des transactions</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="http://localhost/banque/search/transaction/depot"><i class="icon fa fa-circle-o"></i> Depot de fonds</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/transaction/retrait"><i class="icon fa fa-circle-o"></i> Retrait de fonds</a></li>
            <li><a class="treeview-item" href="http://localhost/banque/search/transaction/Transfert"><i class="icon fa fa-circle-o"></i> Transfert de fonds</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> Toutes les transactions</a></li>
            
          </ul>
        </li>
      </ul>
    </aside>
    <?php } ?>