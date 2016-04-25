<?php snippet('header') ?>


<header>

  <h2>Los eventos de <?php echo strftime('%e de %B', $start) . " a " . strftime('%e de %B', $end) ?>.</h2>

  <p>Si falta algo, <a href="mailto:flowfx@reggae-cdmx.com" title="¡Envíame un correo electrónico!">¡Envíame un correo!</a><br/>
  <small>O <a href="https://www.facebook.com/Reggae-CDMX-1732208677016508/">¡deja un comentario en la página Facebook!</a></small></p>

  <!-- The date and time when your article was originally published -->
  <!-- <time class="op-published" datetime="<?php // echo $page->date('Y-m-d H:i:s T') ?>"></time> -->

</header>

  <?php

  foreach($calendar as $key => $day):

    echo "<h3>" . $key . "</h3>" ?>

 <div class="row">

      <?php 
      foreach($day as $key => $event): ?>

        <?php if($event["flyer"]) { ?>
        <div class="column">
            <figure>
                <a href="<?php echo $event["fbLink"] ?>" title="Evento Facebook"><img src="<?php echo $event["flyer"] ?>" /></a>
            </figure>
        </div>
        <?php } ?>

      <?php endforeach ?>

    </div>

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


<?php snippet('footer') ?>
