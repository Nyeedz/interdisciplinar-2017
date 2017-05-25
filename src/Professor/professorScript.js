$(document).ready(function () {
  //Removendo loader
  setTimeout(function () {
    $('#loader-wrapper').hide();
  }, 1000);

  btEspacoVerificarListaChamadas
  btEspacoGerarPresencaAutomatica

  //Show/hide cards
  $('#btEspacoCadastrarAluno').click(function () {
    $('#espacoVerificarListaChamadas').slideUp();
    $('#espacoGerarPresencaAutomatica').slideUp();
    $('#espacoCadastrarAluno').slideDown();
  });

  $('#btEspacoVerificarListaChamadas').click(function () {
    $('#espacoCadastrarAluno').slideUp();
    $('#espacoGerarPresencaAutomatica').slideUp();
    $('#espacoVerificarListaChamadas').slideDown();
  });

  $('#btEspacoGerarPresencaAutomatica').click(function () {
    $('#espacoCadastrarAluno').slideUp();
    $('#espacoVerificarListaChamadas').slideUp();
    $('#espacoGerarPresencaAutomatica').slideDown();
  })


  //Verificando persistencia e recebendo dados do user
  var dadosUser = PERSISTENCIA.test("professor");

  //Preenchendo campos da view
  $('#nomeProfessor').html(dadosUser.nome);
  $('#codProfessor').html("Código: " + dadosUser.codigo);
  $('#nomeProfessorAside').html(dadosUser.nome.split(' ')[0] + '<i class="mdi-navigation-arrow-drop-down right"></i>');

  //Buscando disciplinas
  var dadosBuscarDisciplinas = {
    codigo: dadosUser.codigo
  }

  $.post('buscarDisciplinasProfessor.php', dadosBuscarDisciplinas, function (data) {
    var retorno = JSON.parse(data);
    if (retorno.erro) {
      ALERTA.falha(retorno.msg);
    } else {
      //Se encontrou alguma disciplina, listar
      if (retorno.dados) {
        var retornoDados = retorno.dados;
        //Limpa campos das disciplinas
        var campoDisciplinasAside = $('#listaTurmasAside');
        campoDisciplinasAside.html("");
        //Define variável final de concatenação aside 
        var resultadoDisciplinasAside = "";
        //Define variável final de concatenação selects
        var resultadoSelectDisciplinas = "";
        resultadoSelectLabelDisciplinas = "";
        //Adiciona um card por disciplina
        for (key in retornoDados) {
          var dadosDisciplina = retornoDados[key];
          //Concatenação para lista de desciplinas do aside
          var htmlAppendAside = `<li><a>${dadosDisciplina.nome_disciplina}</a></li>`
          resultadoDisciplinasAside = resultadoDisciplinasAside.concat(htmlAppendAside);
          //Concatenação para selectsA
          var htmlAppendSelectLabel = `<li class><span>${dadosDisciplina.nome_disciplina}</span></li>`;
          var htmlAppendSelect = `<option value="${dadosDisciplina.codigo}">${dadosDisciplina.nome_disciplina}</option>`;
          resultadoSelectDisciplinas = resultadoSelectDisciplinas.concat(htmlAppendSelect);
          resultadoSelectLabelDisciplinas = resultadoSelectLabelDisciplinas.concat(htmlAppendSelectLabel);
        }
        //Atualiza view
        campoDisciplinasAside.append(resultadoDisciplinasAside);
        //Atualizando todos selects de disciplina

        $("select.selectDisciplinas").each(function (idx, obj) {
          //console.log(obj);
          $(obj).append(resultadoSelectDisciplinas);
          $(obj).trigger('contentChanged');
        });
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

  //Evento de click para o botão de logout
  $('#btLogoutProfessor').click(function () {
    sessionStorage.clear();
    window.location = '../Login/login.php';
  });

  //Evento para select materialize
  $('select').on('contentChanged', function () {
    $(this).material_select();
  });
});
