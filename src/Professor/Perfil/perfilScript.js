$(document).ready(function(){
    
    var dadosUser = JSON.parse(sessionStorage.dadosUser);
    //Atualizando dados do form
    $('#perfilNome').val(dadosUser.nome);
    $('#perfilEmail').val(dadosUser.email);
    $('#perfilTelefone').val(dadosUser.telefone);
    $('#perfilDescricao').val(dadosUser.descricao);

    //Ação para salvar dados
    $('#btSalvarAlteracoes').click(function(){
        var atualizacaoDados = {
            nome : $('#perfilNome').val(),
            email : $('#perfilEmail').val(),
            telefone : $('#perfilTelefone').val(),
            descricao : $('#perfilDescricao').val()
        }

        $.post('Perfil/perfilAction.php',atualizacaoDados,function(dados){
            console.log(dados);
        });
    });

});