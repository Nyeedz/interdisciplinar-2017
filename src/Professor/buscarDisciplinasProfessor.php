<?php
  require_once '../BD/bdConfig.php';

  //Recebendo dados da req
  $codigo = $_POST['codigo'] ?? null;
  //Se query for vazia, envia mensagem com erro
  if (empty($codigo)) {
    echo json_encode (
      array (
          'erro' => true,
          'msg' => "Código professor inválido!!!"
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
    $query = " SELECT * FROM tb_disciplina
               WHERE tb_disciplina.cod_professor = '$codigo'";

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
    for($i = 0; $dados[$i] = $respostaConsulta->fetch_assoc(); $i++);
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
