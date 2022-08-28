<?php
namespace Projeto;
use PDO, Exception;

final class ControleDeAcesso {
    public Usuario $usuario;
    public function __construct() {
        if( !isset($_SESSION) ){
            session_start();
        }
    }     



 public function verificaAcesso():void {

     if (!isset($_SESSION['id'])) {
         session_destroy();
        header("location:../login.php");
        die();
             } }



public function login (int $id, string $nome, string $email, string $perfil, ): void {
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['perfil'] = $perfil;
    $_SESSION['email'] = $email;
}

public function loginDois (int $id, string $nome, string $email, string $perfil, int $profissaoId): void {
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['perfil'] = $perfil;
    $_SESSION['email'] = $email;
    $_SESSION['profissao_id'] = $profissaoId;
}

public function loginTres (int $usuarioId, string $nome, string $email, string $perfil, int $categoriaId, string $titulo): void {
    $_SESSION['usuario_id'] = $usuarioId;
    $_SESSION['nome'] = $nome;
    $_SESSION['perfil'] = $perfil;
    $_SESSION['email'] = $email;
    $_SESSION['categoria_id'] = $categoriaId;
    $_SESSION['titulo'] = $titulo;
  
}



public function logout():void {
    session_start();
    session_destroy();
    header("location:./login.php?logout");
    die(); // exit;
}

}