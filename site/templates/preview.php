<?php snippet('header') ?>


<header>

  <h2>Los eventos de <?php echo strftime('%e de %B', $start) . " a " . strftime('%e de %B', $end) ?>.</h2>

  <p>Si falta algo, <a href="mailto:flowfx@reggae-cdmx.com" title="¡Envíame un correo electrónico!">¡Envíame un correo!</a><br/>
  <small>O <a href="https://www.facebook.com/Reggae-CDMX-1732208677016508/">¡deja un comentario en la página Facebook!</a></small></p>

  <!-- The date and time when your article was originally published -->
  <!-- <time class="op-published" datetime="<?php // echo $page->date('Y-m-d H:i:s T') ?>"></time> -->

  <?php 

  foreach($calendar as $key => $day) {

    $href = '#' . esc($key);
    $text = $key;
    echo html::a($href, $text, array('class' => "button button-outline"));
    
  }

    
  ?>

</header>

  <?php

  foreach($calendar as $key => $day):

    echo '<a name="' . esc($key) . '"></a>';
    echo "<h3>" . $key . "</h3>" ?>

  <ul>
      <?php foreach($day as $key => $event): ?>

          <li>

            <a href="<?php echo $event["link"] ?>">
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
    

 <div class="row">

      <?php 
      foreach($day as $key => $event): ?>

        <?php if($event["flyer"]) { ?>
        <div class="column">
            <figure>
                <a href="<?php echo $event["link"] ?>" title="Detailes del evento">
                  <img 
                    src="<?php echo $event["flyerSmall"] ?>"
                    srcset="<?php echo $event["flyerSmall"] ?> 370w, 
                            <?php echo $event["flyerMedium"] ?> 450w, 
                            <?php echo $event["flyerLarge"] ?> 610w" 
                    sizes="100vw"
                    alt="Flyer: <?php echo $event["title"] ?>"
                  />
                </a>

            </figure>
        </div>
        <?php } ?>

      <?php endforeach ?>

    </div>

      
   

  <?php endforeach ?>


<?php snippet('footer') ?>
