<?php

page::$methods['calendar'] = function($page,$start,$end) {
   
  // Get all events for the 7 days of the preview post
  $events = site()->children()->find('events')->children()->filterBy('date', '>=', $start)->filterBy('date', '<=', $end)->visible()->sortBy('date', 'asc');

  $calendar = array();

  foreach($events as $event) {

    if($venue = $event->venue()) {
      $venue = site()->find('venues')->find($venue);
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

  return $calendar;
};


page::$methods['listArtists'] = function($page) {


	// if intendedTemplate == preview
	$start = $page->date();
	$end = strtotime('+6 days', $start);

	$events = site()->children()->find('events')->children()->filterBy('date', '>=', $start)->filterBy('date', '<=', $end)->visible()->sortBy('date', 'asc');  // duplicate from calendar method
	// $events = $events->shuffle();

	$thisTemplate = $page->intendedTemplate();

	$result = '';

	if($thisTemplate == 'preview') {

  	$artists = $events->pluck('artists', ',', true);
  	// shuffle($artists);

		foreach(str::split($artists) as $artist) {

			$result .= $artist;
			$result .= ", ";

		}

		$result .= '…';
  	
  	

	} elseif($thisTemplate == 'event') {
		$result = False;
	} else {
		$result = False;
	}
	

	return $result;
};


page::$methods['instantarticle'] = function($page) {

	$start = $page->date();
	$end = strtotime('+6 days', $start);

	$calendar = $page->calendar($start,$end);	


	$result = "";

	// $result = html($result);

  foreach($calendar as $key => $day) {

  $result .= html::tag('h2', $key );


  $result .= '<ul>';
    foreach($day as $key => $event) {

   		$result .= '<li>' . html::a($event["link"], $event["title"]) . '</li>' . PHP_EOL;
              
              }
       $result .= '</ul>' . PHP_EOL;


       $result .= '<figure class="op-slideshow">';

       foreach($day as $key => $event) {

        if($event["flyer"]) {
        	$result .= '<figure><img src="' . $event["flyer"]->url() . '"></figure>';
      	}

      }     
      $result .= '</figure>';

		}



	return $result;

};