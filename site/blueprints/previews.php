<?php if(!defined('KIRBY')) exit ?>

title: Previews
pages: 
  template: preview
  num: 
    mode: date
    format: Ymd
  sort: flip
files: false
icon:  clock-o
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
