<?php

use Projeto\Freelancer;

require_once './vendor/autoload.php';
$freelancer = new Freelancer;

$freelancer->setId($_GET['id']);

$freelancer->excluirCadastro();
header("location:freelancer.php");

