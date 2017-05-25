<?php
  require_once '../../BD/bdConfig.php';
  //Recebendo dados da req
  $nome = $_POST['nome'] ?? null;
  $email = $_POST['email'] ?? null;
  $telefone = $_POST['telefone'] ?? "";
  $descricao = $_POST['descricao'] ?? "";


  //Se query for vazia, envia mensagem com erro
  if (empty($nome) || empty($email)){
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
    $query = "UPDATE tb_professor 
        SET nome = '$nome', email = '$email', telefone = '$telefone', descricao = '$descricao'";
               
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

    //Se tudo correr bem, enviar resultado positivo
    echo json_encode (
      array (
        'erro' => false,
        'msg' => "Dados atualizados com sucesso!"
      )
    );
    $mysqli->close();
  }
