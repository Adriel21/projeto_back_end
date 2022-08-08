<?php

use Projeto\Cliente;

$cliente = new Cliente;

$cliente->setId($_GET['id']);

$cliente->excluirCadastro();
