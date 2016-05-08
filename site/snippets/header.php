<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo excerpt($page->text()) ?>">
  <link rel="canonical" href="<?php echo $page->url() ?>">

  <meta property="fb:pages" content="1732208677016508" />
  <meta property="og:description" content="<?php echo excerpt($page->text()) ?>">

  <?php if($image = $page->image()) { ?>
    <meta property="og:image" content="<?php echo $image->url() ?>">
  <?php } ?>
    
  <meta property="og:locale" content="es_MX">
  <meta property="og:site_name" content="<?php echo $site->title() ?>">
  <meta property="og:title" content="<?php echo $page->title() ?>">

  <meta property="og:url" content="<?php echo $page->url() ?>">

  <?php echo css('assets/css/style.css') ?>

</head>
<body>

  <div class="container <?php echo $page->template() ?>">

    <h1><a href="<?php echo $site->url() ?>"><?php echo $site->title()->html() ?></a></h1>
