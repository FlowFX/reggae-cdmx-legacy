<!-- generator="<?php echo $generator ?>" -->
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">

  <channel>
    <title><?php echo xml($title) ?></title>
    <link><?php echo xml($link) ?></link>
    <generator><?php echo c::get('feed.generator', 'Kirby') ?></generator>
    <lastBuildDate><?php echo date('r', $modified) ?></lastBuildDate>
    <atom:link href="<?php echo xml($url) ?>" rel="self" type="application/rss+xml" />

    <?php if(!empty($description)): ?>
    <description><?php echo xml($description) ?></description>
    <?php endif ?>

    <?php foreach($items as $item): ?>
    <item>
      <title><?php echo xml($item->title()) ?></title>
      <link><?php echo xml($item->url()) ?></link>
      <guid><?php echo xml($item->id()) ?></guid>
      <pubDate><?php echo $item->date('c') ?></pubDate>

      <content:encoded>
        <![CDATA[


          <!doctype html>
<html lang="es" prefix="op: http://media.facebook.com/op#">
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="<?php echo $item->url() ?>">
    <!-- <link rel="stylesheet" title="default" href="#"> -->
    <title><?php echo $item->title() ?></title>
    <meta property="fb:article_style" content="reggae">
  </head>
<body>
  <article>
    <header>
      <!-- The cover image shown inside your article --> 
      <?php if(!empty($item->image())) { ?>
      <figure>
        <img src="<?php echo $item->image()->url() ?>"/>
        <figcaption>Header image description becomes visible when image has been tapped and expanded.</figcaption>
      </figure>
      <?php } ?>
      
      <!-- The title and subtitle shown in your article -->
      <h1><?php echo $item->title() ?></h1>
      <h2> Use this article to experiment with the look and feel of your brand in Instant Articles   </h2>

      <!-- A kicker for your article -->
      <h3 class="op-kicker">
        Customizable Design Elements
      </h3>

      <!-- The author of your article -->
      <address>
        <?php echo xml($author) ?>
      </address>

      <!-- The published and last modified time stamps -->
      <!-- <time class="op-published" dateTime="2016-2-04T09:00">February 4th 2016, 9:00 AM</time> -->
      <!-- <time class="op-modified" dateTime="2016-2-04T09:00">February 4th 2016, 9:00 AM</time> -->
      </header>


      <?php echo $item->instantarticle() ?>

      </article></body></html>

        ]]>    
      </content:encoded>
      <description><![CDATA[<?php echo xml(html($item->listArtists())) ?>]]></description>
    </item>
    <?php endforeach ?>

  </channel>
</rss>