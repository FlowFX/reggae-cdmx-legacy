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


    // maybe use yyyy-mm-dd as key instead of name of day so the array can be sorted easily
    // above, sort by featured first. or last. and then by day.
    $calendar[strftime('%A',$event->date())][] = array(
      "title" => $event->title(),
      "date" => $event->date('d/m'),
      "fbLink"  => $event->fbLink(),
      "link" => $event->url(),
      "venue" => $venue,
      "flyer" => $flyer,
      "flyerSmall" => $flyerSmall,
      "flyerMedium" => $flyerMedium,
      "flyerLarge" => $flyerLarge,
      "priority" => $event->featured()
    );

  }

  return $calendar;
};

page::$methods['previewModified'] = function($page) {

	$start = $page->date();
$end = strtotime('+6 days', $start);

		$events = site()->children()->find('events')->children()->filterBy('date', '>=', $start)->filterBy('date', '<=', $end)->visible()->sortBy('date', 'asc');

		$modified = 0;
		foreach($events as $event) {
			$modified = max($modified, $event->modified('c'));
		}

		return $modified;
};


page::$methods['listArtists'] = function($page) {


	// if intendedTemplate == preview
	$start = $page->date();
	$end = strtotime('+6 days', $start);

	$events = site()->children()->find('events')->children()->filterBy('date', '>=', $start)->filterBy('date', '<=', $end)->visible()->sortBy('date', 'asc')->sortBy('featured','desc');  // duplicate from calendar method
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


	$result .= '<p>' . excerpt($page->listArtists(), 20, 'words') . '</p>';

	// $result = html($result);

  foreach($calendar as $key => $day) {

  $result .= html::tag('h1', ucwords($key) );


  $result .= '<ul>';
    foreach($day as $key => $event) {

    	if($event["venue"]) {
    		$location = ", " . $event["venue"]->title();
    	} else {
    		$location = "";
    	}

   		$result .= '<li>' . html::a($event["link"], $event["title"]) . $location . '</li>' . PHP_EOL;
   		        
              }
       $result .= '</ul>' . PHP_EOL;


       $result .= '<figure class="op-slideshow">';

       foreach($day as $key => $event) {

        if($event["flyer"]) {
        	$result .= '<figure><img src="' . $event["flyer"]->url() . '" data-mode="aspect-fig" data-feedback="fb:likes, fb:comments"></figure>';
      	}

      }     
      $result .= '</figure>';

		}



	return $result;

};