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
    <title><?php echo $item->title() ?></title>
    <meta property="fb:article_style" content="reggae">  </head>
<body>
  <article>
    <header>
      <!-- The cover image shown inside your article --> 
      <?php if(!empty($item->image())) { ?>
      <figure data-feedback="fb:likes, fb:comments">
        <img src="<?php echo $item->image()->url() ?>"/>
      </figure>
      <?php } ?>
      
      <!-- The title and subtitle shown in your article -->
      <h1><?php echo html($item->title()) ?></h1>

     <!-- A kicker for your article --> 
        <h3 class="op-kicker">
          <?php echo excerpt($item->listArtists(), 30, 'words') ?>
        </h3>

        <!-- The author of your article -->
        <address>
          <?php echo xml($author) ?>
        </address>

        <!-- The published and last modified time stamps -->
        <time class="op-published" dateTime="<?php echo $item->date('c') ?>"><?php echo $item->date('c') ?></time>
        <time class="op-modified" dateTime="<?php echo $item->previewModified('c') ?>"><?php echo $item->previewModified('c') ?></time>
      </header>



      <?php echo $item->instantarticle() ?>

      <p>Ver toda la cartelera en <a href="https://reggae-cdmx.com">reggae-cdmx.com</a>! 

      <p>Si falta algo, <a href="mailto:flowfx@reggae-cdmx.com" title="¡Envíame un correo electrónico!">¡Envíame un correo!</a> <br/>O <a href="https://www.facebook.com/Reggae-CDMX-1732208677016508/">¡deja un comentario en la página Facebook!</a></p>

      </p>

      <figure class="op-ad">
         <iframe width="300" height="250" style="border:0; margin:0;" src="https://www.facebook.com/adnw_request?placement=1139885196063376_1139885209396708&adtype=banner300x250"></iframe>
      </figure>

      <footer>
  
      <!-- Credits for your article -->
        <aside><a href="https://reggae-cdmx.com">Reggae CDMX</a> es un proyecto para ayudar la escena de Reggae, Dub y Ska an la Ciudad de México. Es desarrollado por <a href="https://www.facebook.com/FlowFX">FlowFX</a> y <a href="https://www.facebook.com/jahshuasound">Jahshua</a>.</aside>
        

      </footer>

      <!-- Google Analytics -->
      <figure class="op-tracker">
        <iframe>
          <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-34450382-9','auto');ga('send','pageview')
          </script>
          <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        </iframe>
      </figure>

      </article></body></html>

        ]]>    
      </content:encoded>
      
    </item>
    <?php endforeach ?>

  </channel>
</rss>