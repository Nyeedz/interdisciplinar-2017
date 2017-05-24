<?php
/**
 * @Author: Christian Fernandes <chr.alexfb@gmail.com>
 * @Date:   10/05/2017
 */
require('../Padroes/header.php');
?>

<div class="login-box">
  <div class="card-mobile">
    <div class="card card-tamanho">
      <div class="card-image">
        <img src="../Imports/images/login.png">
        <span class="card-title">Login</span>
      </div>
      <div class="card-content">
        <form id="formLogin">
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">email</i>
              <input id="loginEmail" type="email" class="validate" required >
              <label for="email" data-error="email invalido" data-success="correto">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input id="loginSenha" type="password" class="validate" name="senha" required>
              <label for="senha">Senha</label>
            </div>
          </div>
          <div class="row">
            <div class="centralizar">
              <input class="with-gap" id="1" type="radio" name="tipoConta" value="aluno" checked>
              <label for="1" class="margin2">Aluno</label>
              <input class="with-gap" id="2" type="radio" name="tipoConta" value="professor">
              <label for="2">Professor</label>
            </div>
          </div>
          <div class=" card-action centralizar">
            <button type="button" class="btn waves-effect waves-light" id="btLogar">Logar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- importação script da view -->
<script src="../Login/loginScript.js"></script>
<?php
require('../Padroes/footer.php');
?>
