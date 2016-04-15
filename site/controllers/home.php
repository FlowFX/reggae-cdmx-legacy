<?php

setlocale(LC_ALL, 'es_MX.UTF-8');
date_default_timezone_set('America/Mexico_City');

return function($site, $pages, $page) {

  $midnight = strtotime(date('Y-m-d 00:00:00'));
  $events = $site->children()->find('events')->children()->filterBy('date', '>=', $midnight)->visible()->sortBy('date', 'asc');

  $calendar = array();

  foreach($events as $event) {

    if($venue = $event->venue()):
      $venue = $site->find('venues')->find($venue);
    endif;

    $calendar[$event->date('Y')][strftime('%B',$event->date())][$event->date('W')][] = array(
      "title" => $event->title(),
      "date" => $event->date('d/m'),
      "fbLink"  => $event->fbLink(),
      "venue" => $venue
    );

  }

  unset($event);


  // pass $calendar
  return compact('calendar');

};
