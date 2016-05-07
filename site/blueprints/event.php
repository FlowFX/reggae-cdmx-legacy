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
    label: Date and Time
    type:  datetime
    date:
      format: YYYY-MM-DD
    time:
      format: 24
      interval: 30
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
