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

```sql
CREATE TABLE freelancer(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,   
);
```

```sql
ALTER TABLE usuario
ADD CONSTRAINT fk_usuario_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria(id);

----
