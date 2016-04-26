<?php

class EventPage extends Page {
  public function venueTitle() {

  	$venue = $this->venue();
  	$venue = $this->site()->find('venues')->find($venue);

    return $venue->title();
  }
  public function fbDeepLink() {

  	$fbLink = $this->fbLink();
  	$eventId = str::split($fbLink, $separator = '/');
  	$eventId = end($eventId);

  	$fbDeepLink = 'fb://profile/' . $eventId;

  	return $fbDeepLink;
  }
}