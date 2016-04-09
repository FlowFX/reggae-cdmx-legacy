<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php 
    setlocale(LC_ALL, 'es_MX.UTF-8');
    date_default_timezone_set('America/Mexico_City');
  ?>

  <?php echo css('assets/css/normalize.css') ?>
  <?php echo css('assets/css/style.css') ?>

</head>
<body>
