<?php
namespace Projeto;
abstract class Utilitarios {

    // @autor: Marcelo
    public static function limitaCaractere($dados) {
        return mb_strimwidth($dados, 0, 20, " ...");
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
}