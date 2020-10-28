  <header>
    <!-- Slider main container -->
    <div id="HomeSlide" class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?PHP
        $i=1;
        foreach ($slide_anime as $val) {
          $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
        ?>

          <div class="swiper-slide">
            
            <div class="slider-area">
              <h2 class="title-slider"><?= $val['movie_thname'] ?></h2>
              <div class="slider-rank">TOP <?=$i?></div>
              <div class="slider-ep">ตอนที่ 11</div>

              <div class="slider-footer">
                <button class="slider-play" onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')">
                  <i class="fas fa-play"></i> เล่น
                </button>
              </div>
            </div>
            <div class="slider-overlay">  </div>
            <img src="<?= base_url(). $val['slide_img'] ?> ">
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

      <section id="anime-banners" class="bg-light text-center">
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
          <div class="anime-bg-title text-white"><h1 class="anime-title">Anime Popular</h1></div>
          <ul class="list-anime">
            <li>
              <div class="anime-box">
                <a onclick="goView('261','Kakushigoto-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B9%88%E0%B8%AD','0')" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">
                  <img src="https://anime.vip-streaming.com/images/movie/OHnz9j8bHF443pP2ZiCXHwygjINFSZa.jpg" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">
                </a>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('261','Kakushigoto-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B9%88%E0%B8%AD','0')" tabindex="-1" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">Kakushigoto ความลับของคุณพ่อ</a>
                </h2>
              </div>
            </li>
            <li>
              <div class="anime-box">
                <a onclick="goView('256','Dr.Stone-%E0%B8%94%E0%B9%87%E0%B8%AD%E0%B8%81%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%99','0')" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">
                  <img src="https://anime.vip-streaming.com/images/movie/zH2pewdAhETm2sxDDEVkRwEJZS8NmYd.jpg" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">
                </a>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('256','Dr.Stone-%E0%B8%94%E0%B9%87%E0%B8%AD%E0%B8%81%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%99','0')" tabindex="-1" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">Dr.Stone ด็อกเตอร์สโตน</a>
                </h2>
              </div>
            </li>
            <li>
              <div class="anime-box">
                <a onclick="goView('1','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7-%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-1-16','0')" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">
                  <img src="https://anime.vip-streaming.com/images/movie/APo1BiuKo79Olfy7qcRDuZ4RTZlrxpO.jpg" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">
                </a>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('1','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7-%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-1-16','0')" tabindex="-1" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16</a>
                </h2>
              </div>
            </li>
            <li>
              <div class="anime-box">
                <a onclick="goView('257','Kuroko-no-Basket-2nd-Season-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%842','0')" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">
                  <img src="https://anime.vip-streaming.com/images/movie/d5P3XOpqJyYTIcX5wEI3q77Cdbp1YFh.jpg" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">
                </a>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('257','Kuroko-no-Basket-2nd-Season-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%842','0')" tabindex="-1" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2</a>
                </h2>
              </div>
            </li>
          </ul>
        </div>

        <div class="col-md-12">
          <div class="anime-bg-title text-white"><h1 class="anime-title">Anime update</h1></div>
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
            <img class="logo" src="<?= base_url().'/public/logo/Logo-Anime-8k-1.png' ?> ">
          </a>
          <p><strong>ดูอนิเมะฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
        </div>
      </div>
    </div>
  </section>

  
  <?php foreach ($ads as $value) {
    if ($value['ads_position'] == "2") {
  ?>

      <section id="anime-banners" class="bg-light text-center">
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

      if( track_click == total_pages ){
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

        if(track_click >= total_pages){

          $("#anime-loadmore").hide(0);

        }

      });

    });
  </script>