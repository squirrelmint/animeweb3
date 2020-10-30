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
    <div id="anime-list" class="row">
      <div class="col-md-12">
        <div class="anime-bg-title text-white">
          <?php
          if (!empty($cate_name)) {
          ?>
            <h1 class="anime-title">หมวดหมู่ : <?= $cate_name ?></h1>

          <?php
          } else if (!empty($keyword)) {
          ?>

            <h1 class="anime-title">คุณกำลังค้นหา : <?= $keyword ?> </h1>
          <?php
          }
          ?>
        </div>

        <ul id="list-anime" class="list-anime">

          <?PHP
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
                  <h2>
                    <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0')" tabindex="-1"><?= $val['movie_thname'] ?></a>
                  </h2>
                </div>
                <div class="title-detail">
                  <span class="anime-score"><i class="fas fa-star"></i> 8</span>
                  <span class="anime-view"><i class="fas fa-eye"></i> 999k</span>
                </div>
              </li>
            <?php  }
          } else {
            ?>

            <h3> ไม่พบอนิเมะ ที่คุณค้นหา</h3>

          <?php
          } ?>


        </ul>
        <?php
        if ($list_anime) {
        ?>
          <button id="anime-loadmore">NEXT</button>
        <?php
        }
        ?>
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
    var track_click = 1; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $pagination['total_page'] ?>';
    var keyword = '<?= $keyword ?>';

    if( track_click == total_pages ){
      $("#anime-loadmore").hide(0);
    }

    $("#anime-loadmore").click(function(e) { //user clicks on button

      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click,
          'keyword': keyword,
        }, function(data) {

         //  $("#anime-loadmore").show(); //bring back load more button
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