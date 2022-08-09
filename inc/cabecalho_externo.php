<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - back end</title>

    <!-- Css includes -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Css proprio -->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>
    <header class="d-flex justify-content-around">
        <h1>
            <img src="#" alt="logo" title="">
        </h1>
<?php 
$users = ['Cliente', 'Freelancer'];?>
        <nav class="navbar">
            <button class="btn btn-sm btn-outline-secondary mx-1" type="button">Login</button>
            <select class="btn btn-sm btn-outline-secondary mx-1" type="button">
                <option value="">Cadastro</option>
                <?php foreach ($users as $user): ?>
                    <option value="register"><?=$user?></option>
                <?php endforeach; ?>
                </select>
        </nav>
    </header>