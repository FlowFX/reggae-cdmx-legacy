<?php if(!defined('KIRBY')) exit ?>

title: Preview
pages: false
files: true
icon:  clock-o
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    required: true
  text:
    label: Text
    type:  textarea