<?php
  require_once '../../BD/bdConfig.php';

  //Recebendo dados da req
  $codigoDisciplina = $_POST['codigoDisciplina'] ?? null;
  //Se query for vazia, envia mensagem com erro
  if (empty($codigoDisciplina)) {
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

    $queryConsulta = "SELECT * FROM tb_aluno_disciplina WHERE cod_disciplina='$codigoDisciplina'";

    $respostaConsulta = $mysqli->query($queryConsulta);

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

    //Verifica se já existe esse cadastro
    if (mysqli_num_rows($respostaConsulta) <= 0){
        echo json_encode (
            array (
            'erro' => true,
            'msg' => 'Disciplina sem alunos!'
            )
        );
      exit();
    }

    

    //Se existe cadastros, realizar concatenações
    $query = "";
    while ($row = $respostaConsulta->fetch_assoc()) {
        $query .= "INSERT INTO tb_chamadas(ra_aluno,cod_disciplina,isPresente) 
            VALUES ('$row[ra_aluno]','$codigoDisciplina', '1');";
    }

    //Se conexão for estabelecida, executa consulta
    $respostaConsulta = $mysqli->multi_query($query);
      //Verifica se ocorreu erro na consula
    if (!$respostaConsulta) {
      echo json_encode (
        array (
          'erro' => true,
          'msg' => 'Falha ao realizar chamadas!',
          'descricao' => $mysqli->error
        )
     );
      exit();
    }

    
    //Se tudo correr bem, enviar resultado da consulta e fechar conexão    
    echo json_encode(
            array(
                'erro' => false,
                'msg' => "Chamada realizada com sucesso!"
            )
        );
    $mysqli->close();
  }
