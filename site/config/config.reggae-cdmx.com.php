<?php

c::set('debug',false);

c::set('thumbs.driver', 'im');

c::set('cachebuster', true);

c::set('cache', true);
c::set('cache.driver', 'memcached');
c::set('cache.ignore', array('sitemap'));