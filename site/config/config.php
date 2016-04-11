<?php


$license = __DIR__ . DS . 'license.php';

if (file_exists($license)) {
    include $license;
}


// Use ImageMagick
c::set('thumbs.driver', 'im');

// Disable minifyhtml plugin
c::set('MinifyHTML', FALSE);
