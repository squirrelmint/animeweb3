  <header>
    <!-- Slider main container -->
    <div id="HomeSlide" class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?PHP
        $i = 1;
        foreach ($slide_anime as $val) {
          $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
        ?>

          <div class="swiper-slide">

            <div class="slider-area">
              <h2 class="title-slider"><?= $val['movie_thname'] ?></h2>
              <div class="slider-rank">TOP <?= $i ?></div>
              <?PHP
              foreach ($val['ep_data'] as $key => $ep_data) {
                $key = $key;
              }
              $nameep = str_replace('EP', 'ตอนที่', strtoupper($val['ep_data'][$key]['NameEp']));
              $nameepurl = str_replace(' ', '-', strtoupper($val['ep_data'][$key]['NameEp']));
              ?>
              <div class="slider-ep"> <?= $nameep ?></div>

              <div class="slider-footer">
                <button class="slider-play" onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','<?= $key ?>','<?= $nameepurl ?>')">
                  <i class="fas fa-play"></i> เล่น
                </button>
              </div>
            </div>
            <div class="slider-overlay"> </div>
            <img src="<?= base_url() . $val['slide_img'] ?> ">
          </div>


        <?php
          $i++;
        }
        ?>


      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </header>

  <?php foreach ($ads as $value) {
    if ($value['ads_position'] == "1") {
  ?>

      <section id="anime-banners" class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 ">
              <img class="banners" src='<?php echo  $path_ads . $value['ads_picture']; ?>'>
            </div>
          </div>
        </div>
      </section>

  <?php } else {
    }
  }
  ?>

  <section class="anime-content text-center text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <h1>Anime8k</h1>
          <h2>ดูการ์ตูนออนไลน์ใหม่ ๆ ได้ทุกวัน</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Icons Grid -->
  <section class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="anime-bg-title text-white">
            <h1 class="anime-title">Anime Popular</h1>
          </div>
          <ul class="list-anime">

            <?php foreach ($popular_anime as $val) {

              if (substr($val['movie_picture'], 0, 4) == 'http') {
                $movie_picture = $val['movie_picture'];
              } else {
                $movie_picture = $path_thumbnail . $val['movie_picture'];
              }

              $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));


            ?>
              <li>
                <div class="anime-box">
                  <a onclick="goView('<?= $val['movie_id'] ?>','<?= urldecode($val['movie_thname']) ?>','0','<?= str_replace(' ', '-', $val['ep_data'][0]['NameEp']) ?>')" alt="<?$val['movie_thname'])?>" title="<?$val['movie_thname'])?>">
                    <img src="<?= $movie_picture ?>" alt="<?$val['movie_thname'])?>" title="<?$val['movie_thname'])?>">
                  </a>
                </div>
                <div class="title-in">
                  <h2>
                    <a onclick="goView('<?= $val['movie_id'] ?>','<?= urldecode($val['movie_thname']) ?>','0','<?= str_replace(' ', '-', $val['ep_data'][0]['NameEp']) ?>')" tabindex="-1" alt="<?$val['movie_thname'])?>" title="<?$val['movie_thname'])?>">
                      <?= $val['movie_thname'] ?>
                    </a>
                  </h2>
                </div>
              </li>
            <?php
            } ?>
          </ul>
        </div>

        <div class="col-md-12">
          <div class="anime-bg-title text-white">
            <h1 class="anime-title">Anime update</h1>
          </div>
          <ul id="list-anime" class="list-anime">

            <?PHP
            foreach ($list_anime as $val) {
            ?>
              <li>
                <div class="anime-box">

                  <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                    $movie_picture = $val['movie_picture'];
                  } else {
                    $movie_picture = $path_thumbnail . $val['movie_picture'];
                  }

                  $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
                  ?>

                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                    <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  </a>
                </div>
                <div class="title-in">
                  <h2>
                    <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                  </h2>
                </div>
              </li>
            <?php  } ?>
          </ul>
          <button id="anime-loadmore">NEXT</button>
        </div>
      </div>
    </div>
  </section>

  <section id="anime-footer" class="text-center text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="navbar-brand" href="#">
            <img class="logo" src="<?= base_url() . '/public/logo/Logo-Anime-8k-1.png' ?> ">
          </a>
          <p><strong>ดูอนิเมะฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
        </div>
      </div>
    </div>
  </section>


  <?php foreach ($ads as $value) {
    if ($value['ads_position'] == "2") {
  ?>

      <section id="anime-banners" class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 ">
              <img class="banners" src='<?php echo  $path_ads . $value['ads_picture']; ?>'>
            </div>
          </div>
        </div>
      </section>

  <?php } else {
    }
  }
  ?>
  <script>
    $(document).ready(function() {

      var track_click = 2; //track user click on "load more" button, righ now it is 0 click
      var total_pages = '<?= $pagination['total_page'] ?>';

      if (track_click >= total_pages) {
        $("#anime-loadmore").hide(0);
      }

      $("#anime-loadmore").click(function(e) { //user clicks on button

        if (track_click <= total_pages) //user click number is still less than total pages
        {
          //post page number and load returned data into result element
          $.get('<?php echo $url_loadmore ?>', {
            'page': track_click
          }, function(data) {

            // $("#anime-loadmore").show(); //bring back load more button
            $("#list-anime").append(data); //append data received from server

            track_click++; //user click increment on load button

          }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
          });

        }

        if (track_click >= total_pages) {

          $("#anime-loadmore").hide(0);

        }

      });

    });
  </script>