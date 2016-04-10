<?php if(!defined('KIRBY')) exit ?>

title: Events
pages: 
  template: event
  num: 
    mode: date
    format: Ymd
  sort: flip
files: false
icon:  calendar
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
