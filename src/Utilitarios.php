<?php
namespace Projeto;
abstract class Utilitarios {

    // @autor: Marcelo
    public static function limitaCaractere($dados) {
        return mb_strimwidth($dados, 0, 35, " ...");
    }

    public static function formataData(string $data):string {
        return date("d/m/Y", strtotime($data));
    }

    public static function formataTexto(string $texto):string {
        return nl2br($texto);
    } 

    public static function dump($dados) {
    // public static function dump(array | bool $dados) {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }

    public static function limitaNome($dados) {
        return mb_strimwidth($dados, 0, 20, "...");
    }

    public static function senhaValida($senha) {
        return preg_match('/[a-z]/', $senha) // tem pelo menos uma letra minúscula
         && preg_match('/[A-Z]/', $senha) // tem pelo menos uma letra maiúscula
         && preg_match('/[0-9]/', $senha) // tem pelo menos um número
         && preg_match('/^[\w$@#%&!]{6,}$/', $senha); // tem 6 ou mais caracteres
    }

}