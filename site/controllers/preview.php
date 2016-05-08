<?php

return function($site, $pages, $page) {


  $start = $page->date();
  $end = strtotime('+6 days', $start);
  // Get all events for the 7 days of the preview post
  $events = $site->children()->find('events')->children()->filterBy('date', '>=', $start)->filterBy('date', '<=', $end)->visible()->sortBy('date', 'asc');

  $calendar = array();

  foreach($events as $event) {

    if($venue = $event->venue()) {
      $venue = $site->find('venues')->find($venue);
    }
    if($flyer = $event->image()) {
      $flyer = $flyer;
      $flyerSmall = thumb($flyer, array('width' => 370), false);
      $flyerMedium = thumb($flyer, array('width' => 450), false);
      $flyerLarge = thumb($flyer, array('width' => 610), false);
    }

    $calendar[strftime('%A',$event->date())][] = array(
      "title" => $event->title(),
      "date" => $event->date('d/m'),
      "fbLink"  => $event->fbLink(),
      "link" => $event->url(),
      "venue" => $venue,
      "flyer" => $flyer,
      "flyerSmall" => $flyerSmall,
      "flyerMedium" => $flyerMedium,
      "flyerLarge" => $flyerLarge
    );

  }


  // pass $calendar to template
  return compact('calendar','start','end');

};
