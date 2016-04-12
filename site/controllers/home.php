<?php

setlocale(LC_ALL, 'es_MX.UTF-8');
date_default_timezone_set('America/Mexico_City');

return function($site, $pages, $page) {

  $today = date('Y-m-d');
  $events = $site->children()->find('events')->children()->filterBy('date', '>=', strtotime($today))->visible()->sortBy('date', 'asc');

  $calendar = array();

  foreach($events as $event) {

    if($venue = $event->venue()):
      $venue = $site->find('venues')->find($venue);
    endif;

    $calendar[$event->date('Y')][strftime('%B',$event->date())][] = array(
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
