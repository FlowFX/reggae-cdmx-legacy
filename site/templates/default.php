<?php snippet('header') ?>


<div class="column">


  <h1><?php echo $site->title()->html() ?></h1>

  <?php 
    $today = date('Y-m-d');
    $events = $site->children()->find('events')->children()->filterBy('date', '>=', strtotime($today))->visible()->sortBy('date', 'asc');
  ?>


<?php

  $calendar = array();

  foreach($events as $event) {

    $calendar[$event->date('Y')][strftime('%B',$event->date())][] = array(
      "title" => $event->title(),
      "date" => $event->date('d/m'),
      "fbLink"  => $event->fbLink()
    );

  }

  unset($event);


  foreach($calendar as $key => $year):

    foreach($year as $key => $month):
      echo "<h3>" . $key . "</h3>";

      echo "<ul>";

      foreach($month as $key => $event): ?>

        <li class="event">

          <span class="date">
            <?php echo $event["date"] ?>
          </span>

          <a href="<?php echo $event["fbLink"] ?>">
            <?php echo $event["title"] ?>
          </a>

        </li>

      <?php endforeach ?>

      </ul>

    <?php endforeach ?>

  <?php endforeach ?>



</div> <!-- .column -->

<?php snippet('footer') ?>
