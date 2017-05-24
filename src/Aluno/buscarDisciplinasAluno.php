<?php
  require_once '../BD/bdConfig.php';

  //Recebendo dados da req
  $ra = $_POST['ra'] ?? null;
  //Se query for vazia, envia mensagem com erro
  if (empty($ra)) {
    echo json_encode (
      array (
          'erro' => true,
          'msg' => "RA inválido!!!"
      )
    );
  }
  //Caso contrário executa Consulta
  else {
    $mysqli = new mysqli(HOST,USER,PASSW,DB);

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
    $query = " SELECT * FROM tb_aluno_disciplina
               INNER JOIN tb_disciplina
               ON tb_aluno_disciplina.cod_disciplina = tb_disciplina.codigo
               INNER JOIN tb_professor
               ON tb_disciplina.cod_professor = tb_professor.codigo
               WHERE tb_aluno_disciplina.ra_aluno = '$ra'
               AND isAtivo = '1'";
    //Se conexão for estabelecida, executa consulta
    $respostaConsulta = $mysqli->query($query);
      //Verifica se ocorreu erro na consula
    if (!$respostaConsulta) {
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
    for($i = 0; $dados[$i] = $respostaConsulta->fetch_assoc(); $i++) ;
    array_pop($dados);
    // $dados = array();
    // while ($row = $respostaConsulta->fetch_assoc()) {
    //   $dados[] = $row;
    // }
    echo json_encode (
      array (
        'erro' => false,
        'dados' => $dados
      )
    );
    $mysqli->close();
  }
