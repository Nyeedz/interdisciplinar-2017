<?php
/**
 * @Author: Christian Fernandes <chr.alexfb@gmail.com>
 * @Date:   10/05/2017
 */
$util->checkLogin();
if ($_SESSION['tipo'] != 'professor') {
  header('Location: /');
}
require('public/misc/header.php');
?>
<!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="navbar-color">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
            <a href="index.html" class="brand-logo darken-1">
              <img src="images/materialize-logo.png" alt="materialize logo">
            </a> <span class="logo-text">Materialize</span>
          </h1>
            </li>
          </ul>
          <div class="col s2">
            <div class="header-search-wrapper hide-on-med-and-down">
              <h1 class="logo-wrapper">
            <div class="title-navbar">
              <span class="margin2"><?php echo $_SESSION['nome']; ?></span>
              <span><?php echo $_SESSION['codigo']; ?></span>
            </div>
          </h1>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
              </div>
              <div class="col col s8 m8 l8">
                <ul id="profile-dropdown" class="dropdown-content">
                  <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="index.php?p=logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                  <?php echo explode(' ', ucfirst($_SESSION['nome']))[0];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">
                  <?php echo $_SESSION['tipo']; ?>
                </p>
              </div>
            </div>
          </li>
          <li class="bold active">
            <a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home</a>
          </li>
          <li class="bold">
            <a href="app-email.html" class="waves-effect waves-cyan">
              <i class="mdi-communication-email"></i> Mensagem <span class="new badge">4</span></a>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Alunos</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="user-register.html">Cadastrar Alunos</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-work"></i> Turmas</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#">Eng. Comp</a></li>
                    <li><a href="#">Eng. Elétrica</a></li>
                    <li><a href="#">Eng. Eletrônica</a></li>
                    <li><a href="#">Ciência da Computação</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <div class="container">
          <!--card stats start-->
          <div id="card-stats">
            <div class="row">
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content green white-text">
                    <p class="card-stats-title"><i class="mdi-action-account-balance"></i>Cadastrar Disciplinas</p>
                    <li class="divider"></li>
                    <h4 class="card-stats-number">Editar</h4>
                  </div>
                  <div class="card-action  green darken-2">
                    <div id="clients-bar" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content pink lighten-1 white-text">
                    <p class="card-stats-title"><i class="mdi-av-my-library-books"></i> Verificar Lista de Chamadas</p>
                    <li class="divider"></li>
                    <h4 class="card-stats-number">Editar</h4>
                  </div>
                  <div class="card-action  pink darken-2">
                    <div id="invoice-line" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content blue-grey white-text">
                    <p class="card-stats-title"><i class="mdi-action-bookmark-outline"></i>Gerar Presença Automática</p>
                    <li class="divider"></li>
                    <h4 class="card-stats-number">Editar</h4>
                  </div>
                  <div class="card-action blue-grey darken-2">
                    <div id="profit-tristate" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-content purple white-text">
                    <p class="card-stats-title"><i class="mdi-action-account-circle"></i>Informações Pessoais</p>
                    <li class="divider"></li>
                    <h4 class="card-stats-number">Editar</h4>
                  </div>
                  <div class="card-action purple darken-2">
                    <div id="sales-compositebar" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m6 l4">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/user-bg.jpg" alt="user background">
                    </div>
                    <div class="card-content">
                      <img src="images/avatar.jpg" alt="" class="circle responsive-img activator card-profile-image">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-action-account-circle"></i>
                      </a>

                      <span class="card-title activator grey-text text-darken-4"> <?php echo ucfirst($_SESSION['nome']); ?></span>
                      <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> <?php echo ucfirst($_SESSION['tipo']); ?></p>
                      <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?php echo $_SESSION['telefone']; ?></p>
                      <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?php echo $_SESSION['email']; ?></p>

                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
                      <p>Here is some more information about this card.</p>
                      <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
                      <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                      <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                      <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                      <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!--card stats end-->
          <!--card widgets start-->
          <div id="card-widgets">
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large">
                <i class="mdi-action-stars"></i>
              </a>
              <ul>
                <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
              </ul>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
      </section>
      <!-- END CONTENT -->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- START FOOTER -->
    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
          Copyright © 2017 <a class="grey-text text-lighten-4" href="#" target="_blank">Engenharia da Computação Unisal Lorena/SP</a> All rights reserved.
          <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Christian Fernandes & Ruan Caetano</a></span>
        </div>
      </div>
    </footer>
<?php
  require('public/misc/footer.php');
?>
