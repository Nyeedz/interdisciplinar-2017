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
              <a href="" class="brand-logo darken-1">
                <img src="../Imports/images/unisal.jpg" alt="materialize logo">
              </a> <span class="logo-text">Unisal</span>
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
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-school"></i> Lista Disciplinas</a>
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
          <!--card stats start-->
          <div id="card-stats">
            <div class="row" id="espacoListaMaterias">
              <div class="col s12">
                <h1>Disciplinas</h1>
              </div>
            </div>
          </div>
          <!--card stats end-->
          <div class="row" id="tabela">
            <div class="col s12">
              <h1>Chamadas</h1>
            </div>
            <div class="col s12">
              <table class="resposive-table highlight striped centered">
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
          <div id="chart-dashboard" class="grafico">
            <div class="row">
              <!-- Gráfico -->
              <div class="col s7">
                <div class="card">
                  <div class="card-move-up waves-effect waves-block waves-light">
                    <div class="move-up cyan darken-1">
                      <div>
                        <span class="chart-title white-text">Graficos</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="col s12 m8 l8">
                      <div id="doughnut-chart-wrapper">
                        <canvas id="doughnut-chart" height="130"></canvas>
                      </div>
                    </div>
                    <div class="col s12 m2 l4">
                      <ul class="doughnut-chart-legend">
                        <li class="home ultra-small"><span class="legend-color"></span>Carga horária Total</li>
                        <li class="mobile ultra-small"><span class="legend-color"></span> Faltas</li>
                        <li class="kitchen ultra-small"><span class="legend-color"></span> Presença</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Dados professor -->
              <div class="col s5">
                <div id="profile-card" class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="../Imports/images/user-bg.jpg" alt="user background">
                  </div>
                  <div class="card-content">
                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                      <i class="mdi-action-account-circle"></i>
                    </a>

                    <span class="card-title activator grey-text text-darken-4" id="professorCardNome"></span>
                    <p>
                      <i class="mdi-action-perm-identity cyan-text text-darken-2" ></i>
                      Professor
                    </p>
                    <p>
                      <i class="mdi-action-perm-phone-msg cyan-text text-darken-2" id="professorCardTelefone"></i>
                      </p>
                    <p>
                      <i class="mdi-communication-email cyan-text text-darken-2" id="professorCardEmail"></i>
                    </p>

                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Descrição:<i class="mdi-navigation-close right"></i></span>
                    <p id="professorCardDescricao"></p>
                  </div>
                </div>
              </div>
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
    <footer class="page-footer" id="footer">
      <div class="footer-copyright">
        <div class="container">
          Copyright © 2017 <a class="grey-text text-lighten-4" href="#" target="_blank">Engenharia da Computação Unisal Lorena/SP</a> <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a> rights reserved.
          <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Christian Fernandes & Ruan Caetano</a></span>
        </div>
      </div>
    </footer>

  <!-- importação script da view -->
<script src="../Padroes/Persistencia.js"></script>
<script src="../Aluno/alunoScript.js"></script>
<?php
  require('../Padroes/footer.php');
?>
