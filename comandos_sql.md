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
    categoria_id TINYINT NOT NULL
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
    id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
    id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
     categoria_id TINYINT NOT NULL
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
    profissao VARCHAR(45) NOT NULL,
    categoria_id TINYINT NOT NULL
);
```

---
### Relacionamento da tabela freelancer e categoria
```sql
ALTER TABLE freelancer
ADD CONSTRAINT
fk_freelancer_categoria
FOREIGN KEY(categoria_id)
REFERENCES categoria(id);
```
---

### Criando a tabela Porftfólio
```sql 
CREATE TABLE portfolio(
    id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    link VARCHAR(45) NULL,
    freelancer_id INT NOT NULL
);
```

---
### Relacionamento entre tabela Portfólio e Freelancer
```sql
ALTER TABLE portfolio(
ADD CONSTRAINT 
fk_portfolio_freelancer
FOREIGN KEY(freelancer_id)
REFERENCES freelancer(id);
);
```
---


