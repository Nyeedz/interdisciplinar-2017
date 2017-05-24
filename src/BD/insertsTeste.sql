USE inter;
/*Alunos*/
INSERT INTO tb_aluno (ra, nome,email,senha) 
	VALUES ('150002081','Ruan Caetano', 'ruansouza_caetano@hotmail.com','teste123');
/*Professores*/
INSERT INTO tb_professor (codigo, nome,email,senha) 
	VALUES ('812015000','Anibal', 'anibal@hotmail.com','teste123');
/* Disciplinas */
INSERT INTO tb_disciplina (codigo, nome_disciplina,area,carga_horaria,periodo,cod_professor) 
	VALUES ('1','Computação Gráfica', 'comp','40','N','812015000');
INSERT INTO tb_disciplina (codigo, nome_disciplina,area,carga_horaria,periodo,cod_professor) 
	VALUES ('2','Eletrônica Digital', 'eng','40','N','812015000');
INSERT INTO tb_disciplina (codigo, nome_disciplina,area,carga_horaria,periodo,cod_professor) 
	VALUES ('3','Banco de dados', 'comp','40','N','812015000');
/* Aluno Disciplina */
INSERT INTO tb_aluno_disciplina (ra_aluno,cod_disciplina,isAtivo) 
	VALUES ('150002081','1', 1);
INSERT INTO tb_aluno_disciplina (ra_aluno,cod_disciplina,isAtivo) 
	VALUES ('150002081','2', 1);
INSERT INTO tb_aluno_disciplina (ra_aluno,cod_disciplina,isAtivo) 
	VALUES ('150002081','3', 1);
/* Teste Chamadas */
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','1', 1);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','1', 0);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','1', 1);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','2', 0);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','2', 0);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','2', 1);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','3', 0);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','3', 0);
INSERT INTO tb_chamadas (ra_aluno,cod_disciplina,isPresente) 
	VALUES ('150002081','3', 0);