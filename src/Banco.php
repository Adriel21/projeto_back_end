<?php
namespace Projeto;
use PDO, Exception;

abstract class Banco {
    private static string $servidor = "localhost";
    private static string $usuario = "root";
    private static string $senha = "";
    private static string $banco = "testando";
    private static PDO $conexao;

    public static function conecta():PDO {
        try {
            self::$conexao = new PDO(
                "mysql:host=".self::$servidor."; 
                dbname=".self::$banco.";
                charset=utf8",
                self::$usuario, 
                self::$senha
            );
            self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo "Ok!"; // teste
        } catch (Exception $erro) {
            die("Deu ruim: ".$erro->getMessage());
        }
        return self::$conexao;
    }
}
Banco::conecta(); // teste