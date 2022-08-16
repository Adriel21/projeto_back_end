<?php
namespace Projeto;
use PDO, Exception;

final class ControleDeAcesso {
    
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



public function login (int $id, string $nome, string $email, string $perfil, string $telefone): void {
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['perfil'] = $perfil;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['email'] = $email;
}



public function logout():void {
    session_start();
    session_destroy();
    header("location:./usuario_insere.php?logout");
    die(); // exit;
}

}