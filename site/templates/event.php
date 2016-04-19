<?php snippet('header') ?>


<div class="column event">


<h1><?php echo $site->title()->html() ?></h1>

  <div class="row">
    <div class="column">


  <?php if($image = $page->image()): ?>
    <img src="<?php echo $image->url() ?>" />
  <?php endif ?>
    </div>



    <div class="column">
  <h2><?php echo $page->title()->html() ?></h2>

  <p>Dato: <?php echo $page->date('d/m') ?></p>

  <p>Domicilio: 
  <?php if($venue = $page->venue()) {

      $venue = $site->find('venues')->find($venue);
      echo $venue->title();
    } ?>
  </p>

<p>
  <a href="<?php echo $page->fblink()->html() ?>" title="Evento Facebook">Facebook</a>
  </p>

  <?php echo $page->text()->kirbytext() ?>

  
  </div>

  </div> <!-- .row -->

</div> <!-- .column -->

<?php snippet('footer') ?>
