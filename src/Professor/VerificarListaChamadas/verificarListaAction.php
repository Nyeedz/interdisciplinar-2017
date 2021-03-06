<?php
  require_once '../../BD/bdConfig.php';
  //Recebendo dados da req
  $idDisciplina = $_POST['idDisciplina'] ?? null;

  //Se query for vazia, envia mensagem com erro
  if (empty($idDisciplina)){
    echo json_encode (
      array (
        'erro' => true,
        'msg' => "Dados inválidos!!!"
      )
    );
  }
  //Caso contrário executa Consulta
  else {
    $mysqli = new mysqli(HOST,USER,PASSW,DB);
    $mysqli->set_charset("utf8");
    //Verifica se ocorreu erro na conexão
    if (mysqli_connect_errno()) {
      echo json_encode (
        array (
          'erro' => true,
          'msg' => "Falha ao realizar conexão com o banco de dados",
          'descricao' => mysqli_connect_error()
        )
      );
      exit();
    }
    $query = " SELECT * FROM tb_chamadas
               INNER JOIN tb_disciplina
               ON tb_chamadas.cod_disciplina = tb_disciplina.codigo
               INNER JOIN tb_aluno
               ON tb_chamadas.ra_aluno = tb_aluno.ra
               WHERE tb_chamadas.cod_disciplina = '$idDisciplina'";
               
    //Se conexão for estabelecida, executa consulta
    $respostaConsulta = $mysqli->query($query);

    //Verifica se ocorreu erro na consula
    if (!$respostaConsulta){
      echo json_encode (
        array (
          'erro' => true,
          'msg' => 'Falha ao executar consulta!',
          'descricao' => $mysqli->error
        )
      );
      exit();
    }

    //Se tudo correr bem, enviar resultado da consulta e fechar conexão
    while ($row = $respostaConsulta->fetch_assoc()) {
      $dados[] = $row;
    }
    echo json_encode (
      array (
        'erro' => false,
        'dados' => $dados
      )
    );
    $mysqli->close();
  }
