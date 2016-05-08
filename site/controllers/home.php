<?php

return function($site, $pages, $page) {


  $midnight = strtotime(date('Y-m-d 00:00:00'));
  $events = $site->children()->find('events')->children()->filterBy('date', '>=', $midnight)->visible()->sortBy('date', 'asc');

  $calendar = array();

  foreach($events as $event) {

    if($venue = $event->venue()) {
      $venue = $site->find('venues')->find($venue);
    }


    $year  = $event->date('Y');
    $month = strftime('%B', $event->date());
    $week  = $event->date('W');
    $day   = strtotime($event->date('Y-m-d'));

    $isoDate = date('c', $event->date());
      

    $calendar[$year][$month][$week][$day][] = array(
      "title" => $event->title(),
      "date" => $event->date('d/m'),
      "isodate" => $isoDate,
      "link" => $event->url(),
      "fbLink"  => $event->fbLink(),
      "venue" => $venue
    );

  }

  // pass $calendar
  return compact('calendar');

};
