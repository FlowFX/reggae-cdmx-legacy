<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
files: true
icon:  calendar
fields:
  title:
    label: Title
    type:  text
    required: true
  date:
    label: Date
    type:  date
    required: true
    width: 1/2
  time:
    label: Time
    type: time
    interval: 30
    default: 19:00
    width: 1/2
  venue:
    label: Venue
    type:  select
    options: query
    query:
      page: venues
  artists:
    label: Artists
    type:  tags
    index: siblings
  fbLink:
    label: Facebook Event
    type:  url
  ticketsLink:
    label: Tickets
    type:  url
  text:
    label: Text
    type:  textarea
