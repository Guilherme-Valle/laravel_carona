-- View que mostra modelos de carros ordenados por frequência de utilização em caronas

CREATE VIEW modelos_de_carros_mais_populares_view AS
	(SELECT modelo_carro.id,
	modelo_carro.nome,
	modelo_carro.marca,
	modelo_carro.ano,
	COUNT(carona.id) AS num_caronas
	FROM modelo_carro JOIN carro ON carro.modelo_id = modelo_carro.id
	JOIN carona ON carona.id_carro = carro.id
	ORDER BY num_caronas DESC);



-- View de usuário que concedem mais caronas

CREATE VIEW motoristas_mais_populares_view AS
	(SELECT usuario.id,
	usuario.nome,
	COUNT(carona.id) as num_caronas
	FROM usuario JOIN carro ON carro.id_proprietario = usuario.id
	JOIN carona ON	carona.id_carro = carro.id
	GROUP BY usuario.id ORDER BY num_caronas DESC);


-- View que retorna os usuários com maior números de caronas concedidas hoje

CREATE VIEW motoristas_mais_populares_hoje_view AS
	(SELECT usuario.id,
	usuario.nome,
	COUNT(carona.id) AS num_caronas
	FROM usuario JOIN carro ON carro.id_proprietario = usuario.id
	JOIN carona ON carona.id_carro = carro.id
	WHERE carona.data = CURRENT_DATE() GROUP BY usuario.id
	ORDER BY num_caronas DESC);

-- View que retorna caronas em progresso

CREATE VIEW caronas_em_progresso_view AS
	(SELECT motorista.nome AS motorista_nome,
	 GROUP_CONCAT(passageiro.nome) AS passageiros,
	modelo_carro.nome AS modelo_carro,
	 carro.placa
	FROM usuario AS motorista JOIN carro ON carro.id_proprietario = usuario.id
	JOIN carona ON carona.id_carro = carro.id
	JOIN carona_passageiro ON carona_passageiro.id_carona = carona.id
	JOIN usuario AS passageiro ON passageiro.id = carona_passageiro.id_passageiro
 	JOIN modelo_carro ON modelo_carro.id = carro.modelo_id
	WHERE carona.horario_final IS NULL GROUP BY motorista.id)

-- View que retorna destinos mais frequentes hoje

	CREATE VIEW destinos_frequentes_hoje AS
		(SELECT destino.endereco,
	 	cidade.nome AS cidade,
		estado.nome AS estado,
		COUNT(carona.id) AS numero_de_caronas
		FROM destino JOIN carona ON destino.id = carona.id_destino
		JOIN cidade ON cidade.id = destino.id_cidade
		JOIN estado ON estado.id = cidade.id_estado
		WHERE carona.data = CURRENT_DATE()
		GROUP BY carona.id);

-- Atualiza nota média do passageiro toda vez que uma nova carona é criada

delimiter //
	CREATE TRIGGER atualiza_nota_passageiro BEFORE UPDATE ON carona_passageiro
	FOR EACH ROW
		BEGIN
		DECLARE numero_avaliacoes int;
		SELECT COUNT(id_carona) FROM carona_passageiro WHERE id_passageiro = NEW.id_passageiro GROUP BY id_passageiro INTO numero_avaliacoes;
		UPDATE usuario SET avaliacao_passageiro = (avaliacao_passageiro + NEW.avaliacao_passageiro) / numero_avaliacoes
		WHERE usuario.id = NEW.id_passageiro;
END;//
delimiter ;

-- Stored procedure para busca de carros

GO
	CREATE PROCEDURE BuscaModeloCarro --- Declarando o nome da procedure
	@CampoBusca VARCHAR (20) --- Declarando variável
	AS
	SELECT nome --- Consulta
	FROM modelo_carro
	WHERE nome like ('%' + @CampoBusca + '%') --- Utilizando variável como filtro para a consulta

--
-- Index

CREATE INDEX index_carro ON carro(id);

CREATE INDEX index_carona ON carona(id);

CREATE INDEX index_modelo_carro ON modelo_carro(id);

CREATE INDEX index_usuario ON usuario(id);

CREATE INDEX index_carona_passageiro ON carona_passageiro(id_carona);

CREATE INDEX index_destino ON destino(id);

CREATE INDEX index_cidade ON cidade(id);

CREATE INDEX index_estado ON estado(id);


-- GERENCIAMENTO DE USUARIOS

CREATE USER 'admin'@'localhost' identified by 'admin';
CREATE USER 'motorista'@'localhost' identified by 'motorista';
CREATE USER 'passageiro'@'localhost' identified by 'passageiro';
CREATE USER 'dba'@'localhost' identified by 'dba';

GRANT CREATE, DROP ON carona.* TO 'dba'@'localhost';
GRANT ALL PRIVILEGES ON carona.* TO 'admin'@'localhost';
GRANT INSERT, UPDATE on carona.carro TO 'motorista'@'localhost';
GRANT INSERT on carona.carona TO 'motorista'@'localhost';
GRANT INSERT, UPDATE on carona.carona_passageiro TO 'motorista'@'localhost';
GRANT INSERT on carona.carona TO 'passageiro'@'localhost';
GRANT INSERT, UPDATE on carona.carona_passageiro TO 'passageiro'@'localhost';

ANALYZE TABLE carona;
ANALYZE TABLE carro;
ANALYZE TABLE modelo_carro;
ANALYZE TABLE usuario;
ANALYZE TABLE carona_passageiro;
ANALYZE TABLE destino;
ANALYZE TABLE estado;
ANALYZE TABLE cidade;
OPTIMIZE TABLE carona;
OPTIMIZE TABLE carro;
OPTIMIZE TABLE modelo_carro;
OPTIMIZE TABLE usuario;
OPTIMIZE TABLE carona_passageiro;
OPTIMIZE TABLE destino;
OPTIMIZE TABLE estado;
OPTIMIZE TABLE cidade;
