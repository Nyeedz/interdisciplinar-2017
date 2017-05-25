$(document).ready(function(){

   //Evento para o botão cadastrar disciplina
   $('#btCadastrarAlunoDisciplina').click(function(){
       var disciplina = $('#selectDisciplinaCadastrarAluno').val();
       var raAluno =  $('#raCadastrarAlunoDisciplina').val();
       //Verificação dos dados
       if (disciplina && raAluno.length === 9){
           var  dados = {
               codigoDisciplina : disciplina,
               ra : raAluno
           }
           $.post('CadastrarAluno/cadastrarAlunoAction.php', dados, function (data) {
                var retorno = JSON.parse(data);
                if (retorno.erro){
                    ALERTA.falha(retorno.msg);
                }else{
                    ALERTA.sucesso("Cadastro realizado com sucesso!");
                }
           });
       }else{
           ALERTA.falha('Dados inválidos!'); 
       }
   });

});