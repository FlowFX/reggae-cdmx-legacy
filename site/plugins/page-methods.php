<?php

page::$methods['calendar'] = function($page) {
  echo "This is a page method";
};


page::$methods['instantarticle'] = function($page) {
	$result = "Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?";

	return $result;
};