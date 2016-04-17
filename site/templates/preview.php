<?php snippet('header') ?>


<div class="column preview">

<header>

  <h1><?php echo $site->title()->html() ?></h1>
  <h2><?php echo $page->title()->html() ?></h2>

  <!-- The date and time when your article was originally published -->
  <time class="op-published" datetime="<?php echo $page->date('Y-m-d H:i:s T') ?>"></time>

</header>
  <?php

  echo $page->text()->kirbytext();

  foreach($calendar as $key => $day):

    echo "<h3>" . $key . "</h3>" ?>


      <figure>

      <?php 
      foreach($day as $key => $event): ?>

            <figure>
              <img src="<?php echo $event["flyer"] ?>" />
            </figure>

      <?php endforeach ?>

      </figure>


      <ul>
      <?php foreach($day as $key => $event): ?>

          <li>

            <a href="<?php echo $event["fbLink"] ?>">
            <?php
              echo $event["title"];
              ?>
              </a>

<?php
              if($event["venue"]):
                echo ", " . $event["venue"]->title();
              endif;
            ?>
        </li>

      <?php endforeach ?>
      </ul>
    

  <?php endforeach ?>



</div> <!-- .column -->


<?php snippet('footer') ?>
