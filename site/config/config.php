<?php

c::set('debug',true);

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

// Prolong session duration 
// cf. https://forum.getkirby.com/t/prolong-login-time/4401
s::$timeout = 60*24*30; // thirty days of session validity like in the Panel
s::$cookie['lifetime'] = 9999999; // don't let the cookie ever expire
