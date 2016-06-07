<?php

echo page('previews')->children()->visible()->flip()->limit(3)->feed(array(
  'title'       => $page->title(),
  'description' => 'neat little feed of all previews',
  'link'        => 'previews',
  'textfield'		=> 'instantarticle',
  'author'			=> 'FlowFX'
));