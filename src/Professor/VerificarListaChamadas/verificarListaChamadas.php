 <!-- Lista de chamadas -->
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">Verificar Lista de Chamadas</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <!-- Select Disciplina -->
                        <div class="input-field col s8">
                            <div class="select-wrapper initialized">
                                <select class="initialized selectDisciplinas" id="selectVerificaListaChamadas"></select>
                            </div>
                            <label>Selecione a disciplina:</label>
                        </div>      

                        <div class="col s4">
                            <button type="button" class="btn waves-effect waves-light right" id="btBuscarChamadas">Buscar</button>
                        </div>

                    </div>

                    <!-- tabela chamadas -->
                    <div class="row">
                        <div class="col s12">
                            <h1>Chamadas</h1>
                        </div>
                        <div class="col s12">
                            <table class="resposive-table highlight striped">
                                <thead>
                                <tr>
                                    <th>Código disciplina</th>
                                    <th>Nome Disciplina</th>
                                    <th>Nome Aluno</th>
                                    <th>Status</th>
                                    <th>Data</th>
                                </tr>
                                </thead>
                                <tbody id="corpoTabelaChamadasProfessor"></tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
