<?php
require('../Padroes/header.php');
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
                <img src="../Imports/images/materialize-logo.png" alt="materialize logo">
              </a> <span class="logo-text">Materialize</span>
            </h1>
            </li>
          </ul>
          <div class="col s2">
            <div class="header-search-wrapper hide-on-med-and-down">
              <h1 class="logo-wrapper">
              <div class="title-navbar">
                <span class="margin2" id="nomeAluno"></span>
                <span id="raAluno"></span>
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
              <div class="col col s8 m8 l8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" 
                 href="#" 
                 data-activates="profile-dropdown"
                 id = "nomeAlunoAside"><i class="mdi-navigation-arrow-drop-down right"></i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                  <li id="btLogoutAluno"><a><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
                </ul>
                <p class="user-roal">
                  Aluno
                </p>
              </div>
            </div>
          </li>
          <li class="bold active">
            <a href="/" class="waves-effect waves-cyan">
              <i class="mdi-action-dashboard"></i> Dashboard</a>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-school"></i> Disciplinas</a>
                <div class="collapsible-body">
                  <ul id="listaDisciplinasAside">
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
          <!--chart dashboard start-->
          <!-- chart here -->
          <!--card stats start-->
          <div id="card-stats">
            <div class="row" id="espacoListaMaterias">
              <div class="col s12">
                <h1>Disciplinas</h1>
              </div>
            </div>
          </div>
          <!--card stats end-->
          <div class="row">
            <div class="col s12">
              <h1>Chamadas</h1>
            </div>
            <div class="col s12">
              <table class="resposive-table highlight striped">
                <thead>
                  <tr>
                    <th>Código disciplina</th>
                    <th>Nome Disciplina</th>
                    <th>Professor</th>
                    <th>Status</th>
                    <th>Data</th>
                  </tr>
                </thead>
                <tbody id="corpoTabelaChamadas"></tbody>
              </table>
            </div>
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
          Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
          <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
      </div>
    </footer>

  <!-- importação script da view -->
<script src="../Padroes/Persistencia.js"></script>
<script src="../Aluno/alunoScript.js"></script>
<?php
  require('../Padroes/footer.php');
?>
