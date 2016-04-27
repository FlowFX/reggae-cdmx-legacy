<?php


$license = __DIR__ . DS . 'license.php';

if (file_exists($license)) {
    include $license;
}


// https://getkirby.com/docs/cheatsheet/options/thumbs-driver
c::set('thumbs.driver', 'im');

// https://github.com/groenewege/kirby-auto-publish
c::set('autopublish.templates', array('event'));
