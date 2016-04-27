<?php snippet('header') ?>


<div class="row">

  <div class="column">
    <h2><?php echo $page->title()->html() ?></h2>

    <p><?php echo strftime('%a, %e %b', $page->date()) ?><br />


    <?php if($page->venue()->isNotEmpty()) {
      echo $page->venueTitle();
    } ?>

    <br/ >

 
    <?php if($page->fbLink()->isNotEmpty()) {

?>
     <a href="<?php echo $page->fbLink() ?>"
        data-app="<?php echo $page->fbDeepLink() ?>"
        title="Evento de Facebook">
        Facebook</a>
    <?php } ?>

</p>

    <?php echo $page->text()->kirbytext() ?>

  
  </div>



    <div class="column">


      <?php if($image = $page->image()): ?>
        <img src="<?php echo $image->url() ?>" />
      <?php endif ?>
    </div>



    

  </div> <!-- .row -->

   <?php echo js('assets/js/deep-link.js/src/deep-link.js', false) ?>



<?php snippet('footer') ?>
