 <!-- Lista de chamadas -->
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">Verificar Lista de Chamadas</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <!-- Select Disciplina -->
                        <div class="input-field col s12">
                            <div class="select-wrapper initialized">
                                <select class="initialized selectDisciplinas">
                                    <option value="1">Manager</option>
                                    <option value="2">Developer</option>
                                    <option value="3">Business</option>
                                </select>
                            </div>
                            <label>Selecione a disciplina:</label>
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
                                    <th>Professor</th>
                                    <th>Status</th>
                                    <th>Data</th>
                                </tr>
                                </thead>
                                <tbody id="corpoTabelaChamadas"></tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
