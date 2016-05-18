<?php if(!defined('KIRBY')) exit ?>

title: Events
preview: false
deletable: false
files: false
icon:  calendar
pages: 
  template: event
  limit: 40
  num: 
    mode: date
    format: Ymd
  sort: flip
fields:
  title:
    label: Title
    type:  text