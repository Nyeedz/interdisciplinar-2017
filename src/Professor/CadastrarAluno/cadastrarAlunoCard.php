 <!-- Cadastrar aluno -->
<div class="row">
    <div class="col s12 m12 l12">
    <div class="card-panel">
        <h4 class="header2">Cadastrar aluno na disciplina</h4>
        <div class="row">
        <form class="col s12" id="teste">
            <div class="row">
            <!-- Select Disciplina -->
            <div class="input-field col s6">
                <div class="select-wrapper initialized">
                <select class="initialized selectDisciplinas" id="selectDisciplinaCadastrarAluno"></select>
                </div>
                <label>Selecione a disciplina:</label>
            </div>                        
            <!-- RA -->
            <div class="input-field col s6">
                <input id="raCadastrarAlunoDisciplina" type="text">
                <label for="raCadastrarAlunoDisciplina">RA do aluno</label>
            </div>
            </div>
        
            <div class="row">
                <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="button" name="action" id="btCadastrarAlunoDisciplina">Cadastrar
                    <i class="mdi-content-send right"></i>
                </button>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
