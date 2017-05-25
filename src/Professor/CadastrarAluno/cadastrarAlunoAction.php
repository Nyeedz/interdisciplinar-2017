<?php
  require_once '../../BD/bdConfig.php';

  //Recebendo dados da req
  $codigoDisciplina = $_POST['codigoDisciplina'] ?? null;
  $ra = $_POST['ra'] ?? null;
  //Se query for vazia, envia mensagem com erro
  if (empty($codigoDisciplina) || empty($ra)) {
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

    $queryConsulta = "SELECT * FROM tb_aluno_disciplina WHERE ra_aluno='$ra' AND cod_disciplina='$codigoDisciplina'";

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
    if (mysqli_num_rows($respostaConsulta) > 0){
        echo json_encode (
            array (
            'erro' => true,
            'msg' => 'Aluno já cadastrado!'
            )
        );
      exit();
    }

    //Se não existe cadastro, cadastrar
    $query = " INSERT INTO tb_aluno_disciplina(ra_aluno,cod_disciplina,isAtivo) 
                VALUES ('$ra','$codigoDisciplina','1')";

    //Se conexão for estabelecida, executa consulta
    $respostaConsulta = $mysqli->query($query);
      //Verifica se ocorreu erro na consula
    if (!$respostaConsulta) {
      echo json_encode (
        array (
          'erro' => true,
          'msg' => 'Falha ao realizar cadastro!',
          'descricao' => $mysqli->error
        )
     );
      exit();
    }

    
    //Se tudo correr bem, enviar resultado da consulta e fechar conexão    
    echo json_encode(
            array(
                'erro' => false,
                'msg' => "Cadastro realizado com sucesso!"
            )
        );
    
    $mysqli->close();
  }
