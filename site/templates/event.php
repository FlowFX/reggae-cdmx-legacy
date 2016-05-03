<?php snippet('header') ?>


<div class="row">

  <div class="column">
    <h2><?php echo $page->title()->html() ?></h2>

    <p><?php echo strftime('%A, %e %b', $page->date()) ?><br />


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
        <img 
          src="<?php echo thumb($image, array('width' => 370), false) ?>" 
          srcset="<?php 
                    echo thumb($image, array('width' => 370), false) . ' 370w,';
                    echo thumb($image, array('width' => 450), false) . ' 450w,';
                    echo thumb($image, array('width' => 610), false) . ' 610w,';
                  ?>"
          sizes="100vw"
          alt="Flyer: <?php echo $page->title() . ", " . $page->date() ?>"

        />
      <?php endif ?>
    </div>



    

  </div> <!-- .row -->

   <?php echo js('assets/js/deep-link.js/src/deep-link.js', false) ?>



<?php snippet('footer') ?>
