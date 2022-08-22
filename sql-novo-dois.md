- Criando Banco de Dados
```sql
CREATE DATABASE tentativa CHARA
CTER SET utf8mb4;
```

```sql
CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (45) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    profissao VARCHAR(45) NULL,
    descricao_profissao varchar(255) NULL,
    telefone VARCHAR(20),
    perfil varchar(45)
);
```

- Criando tabela Projeto
```sql 
CREATE TABLE projeto_cliente(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(45) NOT NULL,
    imagem VARCHAR(45),
    descricao VARCHAR(255) NULL,
    usuario_id INT NOT NULL,
    categoria_id TINYINT NOT NULL
);
```

```sql
ALTER TABLE usuario
ADD CONSTRAINT fk_usuario_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria(id);

```

```sql
ALTER TABLE projeto
ADD CONSTRAINT fk_projeto_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria(id);

```

```sql
ALTER TABLE projeto
ADD CONSTRAINT fk_projeto_usuario
FOREIGN KEY (usuario_id) REFERENCES usuario(id);

```
