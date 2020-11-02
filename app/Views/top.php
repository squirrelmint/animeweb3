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

<!-- Icons Grid -->
<section class="text-center">
  <div class="container">
    <div id="anime-top" class="row">
      <div class="col-md-12">
        <h1 class="anime-title-top">Top 1 - 10 </h1>

        <ul id="list-anime" class="list-anime">

          <?PHP
          $i=1;
          if ($list_anime) {
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

                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')">

                    <img src="<?= $movie_picture ?>">
                  </a>
                </div>
                <div class="title-in">
                  <div class="anime-top">Top <?=$i?></div>
                  <h2>
                    <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1"><?= $val['movie_thname'] ?></a>
                  </h2>
                </div>
              </li>
            <?php $i++;  }
          } else {
            ?>

            <h3> ไม่พบอนิเมะ ที่คุณค้นหา</h3>

          <?php
          } ?>


        </ul>

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
