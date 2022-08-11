<?php

use Projeto\Cliente;
require_once './vendor/autoload.php';
$cliente = new Cliente;

$cliente->setId($_GET['id']);

$cliente->excluirCadastro();
