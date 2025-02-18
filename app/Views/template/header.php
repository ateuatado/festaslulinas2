<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festas Lulinas</title>
    <link rel="stylesheet" href="<?php echo base_url('bt/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bt/css/style.css'); ?>"> 
    <!-- fontes do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Slackey&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light header-festa p-1 sticky-top" style="top: 0;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?=base_url('img/logo.png') ?>" width="30px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('home'); ?>" href="<?php echo base_url('home'); ?>">Capa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('apoie'); ?>" href="<?php echo base_url('apoie'); ?>">Apoia-se</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('cadastre-sua-festa'); ?>" href="<?php echo base_url('cadastre-sua-festa'); ?>">Participe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('loja'); ?>" href="<?php echo base_url('loja'); ?>">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('contato'); ?>" href="<?php echo base_url('contato'); ?>">Contato</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link slackey-regular <?= service('menuAtivo')->linkAtivo('quem-somos'); ?>" href="<?php echo base_url('quem-somos'); ?>">Quem Somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<main>
    <div class="container container-md">
            