<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anime8k</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= $document_root ?>assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= $document_root ?>assets/vendor/fontawesome-free/css/all.min.css?v=1" rel="stylesheet">
  <link href="<?= $document_root ?>assets/vendor/simple-line-icons/css/simple-line-icons.css?v=1" rel="stylesheet" type="text/css">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $document_root ?>assets/css/landing-page.css?v=1" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="<?= $document_root ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $document_root ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="navbar-brand" href="#">
      <img class="logo" src="<?= base_url().'/public/logo/Logo-Anime-8k-1.png' ?> ">
    </a>
    <a href="#">HOME</a>
    <a href="#">ANIME LIST</a>
    <a href="#">SUB-THAI</a>
    <a href="#">SOUND-THAI</a>
    <a href="#">TOP 1-10</a>
    <a href="#" data-toggle="modal" data-target="#anime-contract">CONTRACT</a>

    <div class="anime-social col-lg-12 h-100 text-center text-lg-right my-auto">
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a href="#" class="btn-social">
            <i class="fab fa-facebook fa-2x fa-fw"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn-social">
            <i class="fab fa-twitter-square fa-2x fa-fw"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn-social">
            <i class="fab fa-instagram fa-2x fa-fw"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg anime-navbar static-top">
    <div class="container">
      <button class="navbar-toggler" type="button" onclick="openNav()" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand" href="#">
        <img class="logo" src="<?= base_url().'/public/logo/Logo-Anime-8k-1.png' ?> ">
      </a>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="anime-contract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#request">ขอหนัง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#contract">ติดต่อลงโฆษณา</a>
            </li>
          </ul>
          <div class="tab-content" id="formrequest">
            <div id="request" class="tab-pane container active">
              <form method="POST" action="">
                <textarea rows="4" id="request_text" class="form-control"></textarea>
                <center><button type="submit" class="anime-btnrequest">ส่งข้อความ</button></center>
              </form>
            </div>
            <div id="contract" class="tab-pane container fade">
              <form id="anime-formcontract" novalidate>
                <label for="ads_con_name"> ชื่อ สกุล :</label>
                <input id="ads_con_name" name="ads_con_name" type="text" class="form-control" required autocomplete="off">
                <div class="invalid-feedback">
                  กรุณากรอกชื่อ นามสกุล
                </div>
                <label> Email :</label>
                <input id="ads_con_email" type="text" class="form-control"  pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" required autocomplete="off">
                <div class="invalid-feedback">
                  กรุณากรอก Email เช่น " xxx@xxx.com "
                </div>
                <label> Line ID :</label> 
                <input id="ads_con_line" type="text" class="form-control" required autocomplete="off">
                <div class="invalid-feedback">
                  กรุณากรอก Line ID
                </div>
                <label> เบอร์โทรศัพท์ :</label>
                <input id="ads_con_tel" type="text" class="form-control" required autocomplete="off" pattern="^0([8|9|6])([0-9]{8}$)">
                <div class="invalid-feedback" >
                  กรุณากรอก เบอร์โทรศัพท์ 10หลัก  เช่น " 0600000000 "
                </div>

                <label id="ads_con_all_alt">**กรุณากรอกข้อมูลให้ครบทุกช่อง</label>

                <center><button type="submit" class="anime-btnrequest">ส่งข้อความ</button></center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function(){
        $("#anime-formcontract").on("submit",function(){
            var form = $(this)[0];
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }3
            form.classList.add('was-validated');         
        });     
    });
 
    $(document).ready(function() {
      $("#ads_con_email_alt").hide();
      $('#anime-formsearch').submit(function(e) {
        goSearch();
        return false; //<---- Add this line
      });

      function goSearch() {

        var animesearch = $.trim($("#anime-search").val())

        if (animesearch) {
          window.location.href = "/search/" + $("#anime-search").val();
        } else {
          window.location.href = "<?= base_url() ?>";
        }

      }
      $('#anime-formcontract').submit(function(e) {

        // gocontract();
        return false; //<---- Add this line
      });

      $("#ads_con_name_alt").hide();
      $("#ads_con_email_alt").hide();
      $("#ads_con_line_alt").hide();
      $("#ads_con_tel_alt").hide();
      $("#ads_con_all_alt").hide();

      function gocontract() {

        var ads_con_name = $.trim($("#ads_con_name").val())
        var ads_con_email = $.trim($("#ads_con_email").val())
        var ads_con_line = $.trim($("#ads_con_line").val())
        var ads_con_tel = $.trim($("#ads_con_tel").val())
        if (!ads_con_name || !ads_con_email || !ads_con_line || !ads_con_tel) {
          if (!ads_con_name) {
            $("#ads_con_name_alt").show();
            $("#ads_con_all_alt").show();
          } else {
            $("#ads_con_name_alt").hide();
          }

          if (!ads_con_email) {
            $("#ads_con_email_alt").show();
            $("#ads_con_all_alt").show();
          } else {
            $("#ads_con_email_alt").hide();
          }

          if (!ads_con_line) {
            $("#ads_con_line_alt").show();
            $("#ads_con_all_alt").show();
          } else {
            $("#ads_con_line_alt").hide();
          }

          if (!ads_con_tel) {
            $("#ads_con_tel_alt").show();
            $("#ads_con_all_alt").show();
          } else if (count(ads_con_tel) != 10) {
            alert('55555')
          } else {
            $("#ads_con_tel_alt").hide();
          }
        }
      }
    });
  </script>

  <div id="anime-main">