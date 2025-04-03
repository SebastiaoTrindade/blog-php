<?php 
    include_once('helpers/url.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Tech</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="<?php $BASE_URL ?>/css/style.css">

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?php $BASE_URL ?>" id="logo">
            <img src="<?php $BASE_URL ?>/img/logo.svg" alt="Blog Tech Logo">
        </a>
        <div class="container">
            <h1>Blog Tech</h1>
            <nav>
                <ul id="navbar">
                    <li><a href="<?php $BASE_URL ?>/index.php">Home</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="<?php $BASE_URL ?>/contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>