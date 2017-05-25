$(document).ready(function () {

    $('#btGerarPresenca').click(function () {
        var disciplinaSelecionada = $('#selectDisciplinaGerarPresenca').val();
        $.post('PresencaAutomatica/gerarPresencaAutomaticaAction.php', { codigoDisciplina: disciplinaSelecionada }, function (data) {
            var retorno = JSON.parse(data);
            
            if (retorno.erro) {
                ALERTA.falha(retorno.msg);
            } else {
                ALERTA.sucesso(retorno.msg);
            }
            
        });
    });
});