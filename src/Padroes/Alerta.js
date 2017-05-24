//Configuração do Toast
var ALERTA = (function () {
    toastr.options = {
        'closeButton': true,
        'progressBar': true,
        'preventDuplicates': true,
        'timeOut': 3000
    }
    return {
        sucesso : function (msg){
            toastr.success(msg,'Sucesso');
        },
        falha : function (msg){
            toastr.error(msg,'Erro');
        } 
    }
})();