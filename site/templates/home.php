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

                      <?php echo 
                        html::a($event["link"], $event["title"]);
                        if($event["venue"]) {
                          echo ", " . $event["venue"]->title();
                        }


                        // $objDateTime = new DateTime($event["date"]);
                        // $isoDate = $objDateTime->format(DateTime::ISO8601);
                        // echo $isoDate;
                      ?>

                      <script type="application/ld+json">
                      {
                        "@context": "http://schema.org",
                        "@type": "MusicEvent",
                        <?php if($event["venue"]) { ?>
                          "location": {
                            "@type": "MusicVenue",
                            "name": "<?php echo $event["venue"]->title() ?>",
                            "address": "<?php echo $event["venue"]->address() ?>"
                          },
                        <?php } ?>
                        "name": "<?php echo $event["title"] ?>",
                        "startDate": "<?php echo $event["isodate"] ?>",
                        "url": "<?php echo $event["link"] ?>"
                      }
                      </script>

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
