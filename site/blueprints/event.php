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
    width: 3/4
  featured:
    label: Priority
    type: number
    min: 0
    max: 5
    default: 0
    width: 1/4
  date:
    label: Date and Time
    type:  datetime
    date:
      format: YYYY-MM-DD
    time:
      format: 24
      interval: 30
      default: 19:00
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
