<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->text()->html() ?>">

  <meta property="og:description" content="<?php echo $site->text() ?>">
  <meta property="og:image" content="g">
  <meta property="og:locale" content="es">
  <meta property="og:site_name" content="<?php echo $site->title() ?>">
  <meta property="og:title" content="<?php echo $site->title() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site->url() ?>">

  <?php 
    setlocale(LC_ALL, 'es_MX.UTF-8');
    date_default_timezone_set('America/Mexico_City');
  ?>

  <?php echo css('assets/css/normalize.css') ?>
  <?php echo css('assets/css/style.css') ?>

</head>
<body>

  <div class="container">
    <div class="row">


