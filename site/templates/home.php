<?php snippet('header') ?>

  <h1><?php echo $site->title()->html() ?></h1>

  <?php

  foreach($calendar as $key => $year):

    foreach($year as $key => $month):
      echo "<h3>" . $key . "</h3>";

      foreach($month as $key => $week):

      echo "<ul>";
      $i = 0;

        foreach($week as $key => $event): 

        //$i = array_search($key, array_keys($week));
        $i++;
          ?>

          


          <li class="event">


          
            <span class="date">
            <?php if($i == 1) {
               echo $event["date"];
            } else {
              echo  str_repeat('&nbsp;', 10);
            } ?>
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

<?php snippet('footer') ?>
