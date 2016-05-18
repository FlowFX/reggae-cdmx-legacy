<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php

    if($page->parent() == 'events') {

      $title = $page->title();

      $description = strtoupper(strftime('%A %e %B', $page->date()));

      if($page->venue()->isNotEmpty()) {
        $title = $title . " @ " . $page->venueTitle();
        $description = $description . ", " . $page->venueTitle();
      }

      if($page->text()->isNotEmpty()) {
        $description = $description . " :: " . esc($page->text());  
      }

    } else {

      $title = $page->title();
      $description = excerpt($page->text(), 50, 'words');  

    }
    
  ?>

  <title><?php echo $title ?></title>
  <meta property="og:title" content="<?php echo $title ?>">

  <link rel="canonical" href="<?php echo $page->url() ?>">
  <meta property="fb:pages" content="1732208677016508" />

  <meta name="description" content="<?php echo $description ?>">
  <meta property="og:description" content="<?php echo $description ?>">

  
  <?php if($image = $page->image()) { ?>
    <meta property="og:image" content="<?php echo $image->url() ?>">
  <?php } ?>
    
  <meta property="og:locale" content="es_MX">
  <meta property="og:site_name" content="<?php echo $site->title() ?>">
  

  <meta property="og:url" content="<?php echo $page->url() ?>">

  <?php echo css('assets/css/style.css') ?>

</head>
<body>

  <div class="container <?php echo $page->template() ?>">

    <h1><a href="<?php echo $site->url() ?>"><?php echo $site->title()->html() ?></a></h1>
