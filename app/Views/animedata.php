
<?PHP
foreach ($list_anime as $val) {
  // echo '<pre>' . print_r($val, true) . '</pre>';
  // die;
?>
            <li>
              <div class="anime-box">

                <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                  $movie_picture = $val['movie_picture'];
                } else {
                  $movie_picture = $path_thumbnail.$val['movie_picture'];
                }
                $url_name = urlencode(str_replace(' ','-',$val['movie_thname']));
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
          <?php  } ?>