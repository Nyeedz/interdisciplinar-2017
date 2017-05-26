$(document).ready(function () {
    var dadosUser = JSON.parse(sessionStorage.dadosUser);
    $('#chamadas').hide();
    //Evento para o click no nome da disciplina, atualizar tabela de chamdas
    $('#btBuscarChamadas').on("click", function () {
        var idDisciplina = $('#selectVerificaListaChamadas').val();
        $.post('VerificarListaChamadas/verificarListaAction.php', { idDisciplina: idDisciplina }, function (data) {
            var retorno = JSON.parse(data);
            if (retorno.erro) {
                ALERTA.falha(retorno.msg);
            } else {
                $('#chamadas').show();
                var retornoDados = retorno.dados;
                //Atualiza tabela
                var corpoTabela = $('#corpoTabelaChamadasProfessor');
                corpoTabela.html("");
                //Define variável final de concatenação
                var resultadoChamadas = "";

                for (key in retornoDados) {
                    dadoChamada = retornoDados[key];
                    //Verificando do status da chamada
                    var isPresente = dadoChamada.isPresente == 1 ? "Presente" : "Ausente";
                    //Formatando data para o padrão dd/mm/yyyy
                    var separacaoDataHora = dadoChamada.horario.split(" ");
                    var dataSemFormato = separacaoDataHora[0];
                    var divisaoDataSemFormato = dataSemFormato.split('-');
                    var dataFormatada = divisaoDataSemFormato[2] + '/' + divisaoDataSemFormato[1] + '/' + divisaoDataSemFormato[0];
                    //Concatenando nossa linha
                    var htmlAppend =
                        `<tr>
                            <td>${dadoChamada.cod_disciplina}</td>
                            <td>${dadoChamada.nome_disciplina}</td>
                            <td>${dadoChamada.nome}</td>
                            <td>${isPresente}</td>
                            <td>${dataFormatada}</td>
                        </tr>`;
                    resultadoChamadas = resultadoChamadas.concat(htmlAppend);
                }
                corpoTabela.append(resultadoChamadas);
            }

        });
    });

    //Evento de click para o botão de logout
    $('#btLogoutAluno').click(function () {
        sessionStorage.clear();
        window.location = '../Login/login.php';
    })
});
