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
  venue:
    label: Venue
    type:  select
    options: query
    query:
      page: venues
  fbLink:
    label: Facebook Event
    type:  url
  ticketsLink:
    label: Tickets
    type:  url
  text:
    label: Text
    type:  textarea
