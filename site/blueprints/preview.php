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
  featured:
    label: Featured Event
    type: select
    options: query
    query:
      page: events
      fetch: children
      value: '{{uid}}'
      text: '{{title}}'
      template: event
      flip: true
  text:
    label: Text
    type:  textarea