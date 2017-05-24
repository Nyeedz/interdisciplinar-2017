$(document).ready(function () {
  //Removendo loader
  setTimeout(function () {
    $('#loader-wrapper').hide();
  }, 1000);

  //Verificando persistencia e recebendo dados do user
  var dadosUser = PERSISTENCIA.test();

  //Preenchendo campos da view
  $('#nomeAluno').html(dadosUser.nome);
  $('#raAluno').html("RA: " + dadosUser.ra);

  //Buscando disciplinas
  var dadosBuscarDisciplinas = {
    ra: dadosUser.ra
  }
  $.post('buscarDisciplinasAluno.php', dadosBuscarDisciplinas, function (data) {
    var retorno = JSON.parse(data);
    if (retorno.erro) {
      ALERTA.falha(retorno.msg);
    } else {
      //Se encontrou alguma disciplina, listar
      if (retorno.dados) {
        var retornoDados = retorno.dados;
        //Limpa campos das disciplinas
        var campoDisciplinas = $('#espacoListaMaterias');
        campoDisciplinas.html("");
        //Define variável final de concatenação
        var resultadoDisciplinas =
          ` <div class="col s12">
              <h1>Disciplinas</h1>
            </div> `
        //Adiciona um card por disciplina
        for (key in retornoDados) {
          var dadosDisciplina = retornoDados[key];
            var htmlAppend = `
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-content blue white-text">
                  <p class="card-stats-title" id="${dadosDisciplina.cod_disciplina}"><i class="mdi-editor-insert-drive-file"></i>${dadosDisciplina.nome_disciplina}</p>
                  <li class="divider"></li>
                  <h4 class="card-stats-number">${dadosDisciplina.nome}</h4>
                </div>
                <div class="card-action blue darken-2">
                  <div id="sales-compositebar" class="center-align"></div>
                </div>
              </div>
            </div>`;
          resultadoDisciplinas = resultadoDisciplinas.concat(htmlAppend);
        }
        //Atualiza view
        campoDisciplinas.append(resultadoDisciplinas);
      }
    }
  });

  //Evento para o click no nome da disciplina, atualizar tabela de chamdas
  $('#espacoListaMaterias').on("click", ".card-stats-title", function () {
    var idDisciplina = $(this).attr('id');
    var dadosAtualizarTabela = {
      idDisciplina: idDisciplina,
      ra: dadosUser.ra
    }
    $.post('atualizarTabelaChamada.php', dadosAtualizarTabela, function (data) {
      var retorno = JSON.parse(data);
      if (retorno.erro) {
        ALERTA.falha(retorno.msg);
      } else {
        var retornoDados = retorno.dados;
        //Atualiza tabela
        var corpoTabela = $('#corpoTabelaChamadas');
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
});
