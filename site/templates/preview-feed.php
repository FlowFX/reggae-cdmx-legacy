<?php

echo page('previews')->children()->flip()->feed(array(
    'title'       => 'Previews',
      'description' => 'Weekly event previews',
        'link'        => 'previews'
      ));
