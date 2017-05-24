//Verifica se user está logado
var PERSISTENCIA = (function () {
  var dados = sessionStorage.dadosUser;
  var objDados = JSON.parse(dados);
  return {
    test: function () {
      if (sessionStorage.status) {
        return objDados;
      } else {
        window.location = "../Login/login.php";
        return null;
      }
    }
  }
})();
