<?php
session_start();
include('./../app/config.php');
include('./../app/autoload.php');
//if($_SERVER['REQUEST_SCHEME'] !== 'https') return header('Location: https://tecbiowebce.com.br/dev/');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="RWTECH, EzPoint, EzPointWeb, EzPointMobile, IPointLine, controle de ponto, Registro de ponto, relógio de ponto, REP, software de apuração de ponto, tecbiowebce, tecbioweb ce, tecbioif, tecbio if, ponto facial">
    <meta name="author" content="Força Web">
    <meta name="Description" CONTENT="Nosso aplicativo tem a função de envio das batidas off-line em segundo plano, essencial para colaboradores com função externas INOVAÇÃO, TECNOLOGIA, SEGURANÇA E CUSTO BAIXO, Ponto Eletronico Homologado">
    <meta name="robots" content="noindex,nofollow">
    <meta name="google-site-verification" content="82UC4QY3LR1EVwelKsYqqwzsAmXn05dh0BOl7ZRe17E" />
    <link rel="canonical" href="https://tecbiowebce.com.br/"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="theme-color" content="#FFFFFF"/>
    <meta name="msapplication-TileColor" content="#FFF"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="stylesheet" href="<?= URL ?>/public/css/swiper-bundle.min.css?<?= VER_WEB ?>">
    <link rel="stylesheet" href="<?= URL ?>/public/css/swiper.css?<?= VER_WEB ?>">   
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css?<?= VER_WEB ?>">
    <link rel="stylesheet" href="<?= URL ?>/public/font/bootstrap-icons.css?<?= VER_WEB ?>">
    <title><?= TITLLE_WEB ?></title>
</head>

<body>
    <?php include '../app/Views/top.php';?>
    <?php $rotas = new Rota(); ?>
    <?php include '../app/Views/footer.php';?>
    <script src="<?=URL?>/public/js/swiper-bundle.min.js?<?= VER_WEB ?>"></script>
    <script src="<?=URL?>/public/js/swiper.js?<?= VER_WEB ?>"></script>
    <script src="<?=URL?>/public/js/web.js?<?= VER_WEB ?>"></script>
</body>

</html>