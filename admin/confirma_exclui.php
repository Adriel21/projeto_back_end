<?php
ob_start();

use Projeto\ControleDeAcesso;


require_once '../vendor/autoload.php';

$sessao = new ControleDeAcesso;


header('location:cadastro_exclui.php?confirme');



ob_flush(); 