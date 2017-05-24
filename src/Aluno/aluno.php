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
              <div class="col col s4 m4 l4">
                <img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
              </div>
              <div class="col col s8 m8 l8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                  <?php //echo explode(' ', ucfirst($_SESSION['nome']))[0];?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                  <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="index.php?p=logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
                </ul>
                <p class="user-roal">
                  <?php //echo ucfirst($_SESSION['tipo']); ?>
                </p>

              </div>
            </div>
          </li>
          <li class="bold active">
            <a href="/" class="waves-effect waves-cyan">
              <i class="mdi-action-dashboard"></i> Dashboard</a>
          </li>
          <li class="bold">
            <a href="#" class="waves-effect waves-cyan">
              <i class="mdi-communication-email"></i> Mensagem <span class="new badge">4</span></a>
          </li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-school"></i> Disciplinas</a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#">Rede de Computadores</a></li>
                    <li><a href="#">Eletrônica Digital</a></li>
                    <li><a href="#">Telecomunicações</a></li>
                    <li><a href="#">Engenharia de Software</a></li>
                    <li><a href="#">Computação Gráfica</a></li>
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
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
          <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
              <form class="col s12">
                <div class="input-field">
                  <i class="mdi-action-search prefix"></i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Search</label>
                </div>
              </form>
            </div>
          </li>
          <li class="li-hover">
            <ul class="chat-collapsible" data-collapsible="expandable">
              <li>
                <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                <div class="collapsible-body recent-activity">
                  <div class="recent-activity-list chat-out-list row">
                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#">just now</a>
                      <p>Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row">
                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#">Yesterday</a>
                      <p>Your Next flight for USA will be on 15th August 2015.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row">
                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#">5 Days Ago</a>
                      <p>Natalya Parker Send you a voice mail for next conference.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row">
                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#">Last Week</a>
                      <p>Jessy Jay open a new store at S.G Road.</p>
                    </div>
                  </div>
                  <div class="recent-activity-list chat-out-list row">
                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#">5 Days Ago</a>
                      <p>Natalya Parker Send you a voice mail for next conference.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                <div class="collapsible-body sales-repoart">
                  <div class="sales-repoart-list  chat-out-list row">
                    <div class="col s8">Target Salse</div>
                    <div class="col s4"><span id="sales-line-1"></span>
                    </div>
                  </div>
                  <div class="sales-repoart-list chat-out-list row">
                    <div class="col s8">Payment Due</div>
                    <div class="col s4"><span id="sales-bar-1"></span>
                    </div>
                  </div>
                  <div class="sales-repoart-list chat-out-list row">
                    <div class="col s8">Total Delivery</div>
                    <div class="col s4"><span id="sales-line-2"></span>
                    </div>
                  </div>
                  <div class="sales-repoart-list chat-out-list row">
                    <div class="col s8">Total Progress</div>
                    <div class="col s4"><span id="sales-bar-2"></span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                <div class="collapsible-body favorite-associates">
                  <div class="favorite-associate-list chat-out-list row">
                    <div class="col s4"><img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                    </div>
                    <div class="col s8">
                      <p>Eileen Sideways</p>
                      <p class="place">Los Angeles, CA</p>
                    </div>
                  </div>
                  <div class="favorite-associate-list chat-out-list row">
                    <div class="col s4"><img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                    </div>
                    <div class="col s8">
                      <p>Zaham Sindil</p>
                      <p class="place">San Francisco, CA</p>
                    </div>
                  </div>
                  <div class="favorite-associate-list chat-out-list row">
                    <div class="col s4"><img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                    </div>
                    <div class="col s8">
                      <p>Renov Leongal</p>
                      <p class="place">Cebu City, Philippines</p>
                    </div>
                  </div>
                  <div class="favorite-associate-list chat-out-list row">
                    <div class="col s4"><img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                    </div>
                    <div class="col s8">
                      <p>Weno Carasbong</p>
                      <p>Tokyo, Japan</p>
                    </div>
                  </div>
                  <div class="favorite-associate-list chat-out-list row">
                    <div class="col s4"><img src="../Imports/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                    </div>
                    <div class="col s8">
                      <p>Nusja Nawancali</p>
                      <p class="place">Bangkok, Thailand</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->
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
