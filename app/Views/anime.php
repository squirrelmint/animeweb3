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

<?php 
  if (substr($data_anime['movie_picture'], 0, 4) == 'http') {
    $movie_picture = $data_anime['movie_picture'];
  } else {
    $movie_picture = $path_thumbnail . $data_anime['movie_picture'];
  }
  $url_name = urlencode(str_replace(' ', '-', $data_anime['movie_thname']))
?>

<section id="anime-poster">
  <div class="anime-poster">
    <img src="<?= $movie_picture ?>">
  </div>
</section>

<!-- Icons Grid -->
<section id="anime-video" class="text-center">
  <div class="container">
    <div class="row">
      <h1 class="anime-title text-white"><?= $data_anime['movie_thname'] ?> ตอนที่ 1</h1>
      <div id="anime-player">
        <iframe id="player" class="player" src="<?= base_url('player/' . $data_anime['movie_id'] . '/' . $ep_index) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
        <div class="anime-episode">
          <div id="NextEP" class="swiper-container">
            <div class="swiper-wrapper">

              <?php 
                foreach ($data_anime['ep_data'] as $key => $val) { 
                  $active = '';
                  if($ep_index==$key){
                    $active = 'active';
                  }
                  $url_nameep = urlencode(str_replace(' ', '-', $val['NameEp']))
              ?>
                <div class="swiper-slide">
                  <a onclick="goView('<?= ($data_anime['movie_id']) ?>','<?= urldecode($url_name) ?>','<?= $key ?>','<?= $url_nameep ?>')" tabindex="-1">
                    <img src="<?= $movie_picture ?>">
                    <span class="<?=$active?>"><?= $val['NameEp'] ?></span>
                  </a>
                </div>
              <?php } ?>

            </div>
              
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>

      <div id="anime-detail">
        <div class="anime-card-detail">
          <h3 class="anime-title-description">เรื่องย่อ</h3>
          <div class="anime-description">
            <p>
              <?= $data_anime['movie_des'] ?>
            </p>
            <div class="anime-score">
              <span>SCORE</span>
              <?= $data_anime['movie_ratescore'] ?>
            </div>
          </div>
          <div class="anime-category">
            หมวดหมู่: Action, Adventure
          </div>
        </div>
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
  window.onload = function() {

    var swiper = new Swiper('#NextEP', {
      speed: 800,
      spaceBetween: 100,
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: false,
      initialSlide: '<?=$ep_index?>',

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  };
</script>