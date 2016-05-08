<?php


c::set('languages', array(
  array(
    'code'    => 'es',
    'name'    => 'Spanish',
    'default' => true,
    'url'     => '/',
    'locale'  => array(
      LC_COLLATE  => 'es_MX.UTF-8',
      LC_MONETARY => 'es_MX.UTF-8',
      LC_NUMERIC  => 'es_MX.UTF-8',
      LC_TIME     => 'es_MX.UTF-8',
      LC_MESSAGES => 'es_MX.UTF-8',
      LC_CTYPE    => 'es_MX.UTF-8'
    ),
  ),
));

c::set('timezone','America/Mexico_City');



$license = __DIR__ . DS . 'license.php';

if (file_exists($license)) {
    include $license;
}


// https://github.com/groenewege/kirby-auto-publish
c::set('autopublish.templates', array('event'));
