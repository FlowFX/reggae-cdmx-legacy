<?php snippet('header') ?>


<div class="column">


  <h1><?php echo $site->title()->html() ?></h1>

  <?php

  foreach($calendar as $key => $year):

    foreach($year as $key => $month):
      echo "<h3>" . $key . "</h3>";

      foreach($month as $key => $week):

      echo "<ul>";

        foreach($week as $key => $event): ?>

          <li class="event">

            <span class="date">
              <?php echo $event["date"] ?>
            </span>

          <a href="<?php echo $event["fbLink"] ?>">
          <?php
            echo $event["title"];
            echo "</a>";

            if($event["venue"]):
              echo ", " . $event["venue"]->title();
            endif;
          ?>

          </li>

        <?php endforeach ?>

      </ul>

      <?php endforeach ?>

    <?php endforeach ?>

  <?php endforeach ?>



</div> <!-- .column -->

<?php snippet('footer') ?>
