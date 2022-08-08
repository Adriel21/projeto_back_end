<?php
namespace Projeto;
use PDO, Exception;

final class Freelancer {
    private int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $perfil;
    private string $tipo;
    private int $categoriaId;
}