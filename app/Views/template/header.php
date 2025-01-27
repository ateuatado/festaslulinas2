<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festas Lulinas</title>
    <link rel="stylesheet" href="<?php echo base_url('bt/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bt/css/style.css'); ?>"> </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light header-festa">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?=base_url('img/logo.png') ?>" width="60px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= service('menuAtivo')->linkAtivo('quem-somos'); ?>" href="<?php echo base_url('quem-somos'); ?>">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= service('menuAtivo')->linkAtivo('cadastre-sua-festa'); ?>" href="<?php echo base_url('cadastre-sua-festa'); ?>">Cadastre sua Festa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= service('menuAtivo')->linkAtivo('loja'); ?>" href="<?php echo base_url('loja'); ?>">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= service('menuAtivo')->linkAtivo('contato'); ?>" href="<?php echo base_url('contato'); ?>">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= service('menuAtivo')->linkAtivo('apoie'); ?>" href="<?php echo base_url('apoie'); ?>">Apoie-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container container-md">
            