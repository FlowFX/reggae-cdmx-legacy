<?php snippet('header') ?>

<?php

foreach($calendar as $key => $year) {
  foreach($year as $key => $month) {
    ?>

    <div class="ttable">
      <div class="ttitle">
        <h3><?php echo $key ?></h3>
      </div> <!-- .ttitle -->

      <?php 

      foreach($month as $key => $week) { 
    

        foreach($week as $key => $day) { ?>

          <div class="trow">

            <div class="tcell tcelldate">
              <?php echo strftime('%a', $key) . "&nbsp;" . strftime('%e/%m', $key) ?>
            </div>    

            <div class="tcell tcellright">        

              <ul>
                <?php foreach($day as $key => $event) { ?>
                  <li>
                    <a href="<?php echo $event["link"] ?>">
                      <?php echo $event["title"] . "</a>";
                      if($event["venue"]) {
                      echo ", " . $event["venue"]->title();
                    } ?>
                  </li>
                <?php } ?>
              </ul>
            </div>

          </div>
    

      <?php } ?> <!-- $event -->

      <div class="tseparator"></div>

    <?php } ?> <!-- $week -->

    </div> <!-- ..ttable -->

  <?php }  // $month 

 } ?> <!-- $year -->

<hr>

<a name="radios"></a>
<h2>Radios en línea</h2>
<p>
  <a href="http://www.nattyradio.com/">Natty Radio</a><br />
  <a href="http://dubinthecontrol.com.ar/">Dub In The Control</a>
</p>


<?php snippet('footer');
