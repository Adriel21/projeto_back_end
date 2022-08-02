# Comandos de SQL

- Criando Banco de Dados
```sql
CREATE DATABASE projeto_back_end CHARA
CTER SET utf8mb4;
```

- Criando tabela cliente

```sql
CREATE TABLE cliente(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil VARCHAR(45) NULL
);
```

- Criando tabela Projeto
```sql 
CREATE TABLE projeto(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    imagem VARCHAR(45),
    descricao VARCHAR(246) NULL,
    cliente_id INT NOT NULL,
    categoria_id INT NOT NULL
);
```
---
### Relacionamento da tabela Cliente e Projeto

- Criando relacionamento

```sql
ALTER TABLE projeto 
ADD CONSTRAINT fk_projeto_cliente
FOREIGN KEY (cliente_id) REFERENCES cliente(id);
```

----
- Criando tabela de categorias

```sql
CREATE TABLE categoria(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL
);
```

---
### Relacionamento da tabela de projeto e categoria

```sql
ALTER TABLE projeto
ADD CONSTRAINT fk_projeto_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria(id); 
# Para fazer o relacionamento, a tabela não pode possuir dados. 
Caso tenha dados e precise esvaziá-la para criar o relacionamento, utilize o trunkate
```

---
- Criando tabela de subcategorias
```sql
CREATE TABLE subcategorias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL
);
```

---
### Relacionamento da tabela de subcategorias com categorias
```sql 
ALTER TABLE subcategorias
ADD CONSTRAINT fk_subcategorias_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria (id);
```

---
- Criando tabela de freelancer
```sql
CREATE TABLE freelancer(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    perfil VARCHAR(45) NULL,
    profissao_id INT NOT NULL
);
```

- Criando tabela de profissão

```sql
CREATE TABLE profissao(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    categoria_id INT NOT NULL
);
```

---
### Relacionamento da tabela de profissão com categorias
```sql
ALTER TABLE profissao
ADD CONSTRAINT fk_profissao_categoria
FOREIGN KEY (categoria_id) REFERENCES categoria (id);
```




