<?php
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Estilos do projeto -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">
    <!-- Google FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?php $BASE_URL ?>" id="logo">
            <img src="<?php $BASE_URL ?>img/logo.svg" alt="Blog">
        </a>
         <nav>
        <ul id="navbar">
            <li><a href="<?php $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categorias</a></li>
            <li><a href="#" class="nav-link">Sobre</a></li>
            <li><a href="<?php $BASE_URL ?>contato.php"  class="nav-link">Contato</a></li>
        </ul>
        </nav>
    </header>
