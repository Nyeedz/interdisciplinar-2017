<?php
/**
 * @Author: Christian Fernandes <chr.alexfb@gmail.com>
 * @Date:   10/05/2017
 */
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
              <span class="margin2" id="nomeProfessor"></span>
              <span id="codProfessor"></span>
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
                <ul id="profile-dropdown" class="dropdown-content">
                  <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
                  <li class="divider"></li>
                  <li id="btLogoutProfessor"><a><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" 
                  href="#" 
                  data-activates="profile-dropdown"
                  id="nomeProfessorAside">
                </a>
                <p class="user-roal">
                  Professor
                </p>
              </div>
            </div>
          </li>
          <li class="bold active">
            <a href="../Professor/professor.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home</a>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-work"></i> Turmas</a>
                <div class="collapsible-body">
                  <ul id="listaTurmasAside"></ul>
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
              <!-- Cards opções -->
              <div class="col s12 m6 l3">
                <div class="card" id="btEspacoCadastrarAluno">
                  <div class="card-content green white-text">
                    <p class="card-stats-title"><i class="mdi-action-account-balance"></i>Cadastrar Aluno</p>
                  </div>
                  <div class="card-action  green darken-2">
                    <div id="clients-bar" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card" id="btEspacoVerificarListaChamadas">
                  <div class="card-content pink lighten-1 white-text">
                    <p class="card-stats-title"><i class="mdi-av-my-library-books"></i> Verificar Lista de Chamadas</p>
                  </div>
                  <div class="card-action  pink darken-2">
                    <div id="invoice-line" class="center-align"></div>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l3">
                <div class="card" id="btEspacoGerarPresencaAutomatica">
                  <div class="card-content blue-grey white-text">
                    <p class="card-stats-title"><i class="mdi-action-bookmark-outline"></i>Gerar Presença Automática</p>
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
                  </div>
                  <div class="card-action purple darken-2">
                    <div id="sales-compositebar" class="center-align"></div>
                  </div>
                </div>
              </div>
            </div>

            <div id="espacoCadastrarAluno" class="invisivel">
              <?php require_once "CadastrarAluno/cadastrarAlunoCard.php" ?>
            </div>

             <div id="espacoVerificarListaChamadas" class="invisivel"> 
              <?php require_once "VerificarListaChamadas/verificarListaChamadas.php" ?>
            </div>

            <div id="espacoGerarPresencaAutomatica" class="invisivel">
              <?php require_once "PresencaAutomatica/gerarPresencaAutomatica.php" ?>
            </div>

          </div>
        </div>

  
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

<!-- importando scripts próprios -->
<script src="../Padroes/Persistencia.js"></script>
<script src="professorScript.js"></script>
<?php
  require('../Padroes/footer.php');
?>
