$(document).ready(function () {
  //Ação para o botão logar
  $("#btLogar").click(function (event) {
    //Recebendo dados do formulário
    var dados = {
      email: $('#loginEmail').val(),
      senha: $('#loginSenha').val(),
      tipoConta: $('input[name=tipoConta]:checked', '#formLogin').val()
    }
    $.post('loginAction.php',dados, function (data) {
      var retorno = JSON.parse(data);
      if (retorno.erro){
        ALERTA.falha(retorno.msg);
      } else {
      //Se encontrou usuário, armazena na sessão e direciona
        if (retorno.dados){
          var retornoDados = retorno.dados[0];
          sessionStorage.dadosUser = JSON.stringify(retornoDados);
          sessionStorage.status = true;
          //Define redirecionamento
          if (dados.tipoConta === "aluno"){
            var redirectUrl = "../Aluno/aluno.php";
          } else {
            var redirectUrl = "../Professor/professor.php";
          }
          //Imprime alerta de sucesso e redireciona
          ALERTA.sucesso("Login realizado com sucesso!");
          setTimeout(function(){
            window.location = redirectUrl;
          }, 3000);
        }
        //Se não encontrar usuário
        else {
          ALERTA.falha("Usuário não encontrado, tente novamente!");
        }
      }
    });
  });
});
