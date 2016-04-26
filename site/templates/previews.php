<?php snippet('header') ?>


<h1><?php echo $page->title()->html() ?></h1>

<?php echo $page->text()->kirbytext() ?>

<ul>

<?php foreach($page->children()->flip() as $preview) { ?>

	<a href="<?php echo $preview->url() ?>">

		<?php echo "<li>" . $preview->date('Y-m-d') . "</li>" ?>

	</a>

<?php } ?>


</ul>


<?php snippet('footer') ?>