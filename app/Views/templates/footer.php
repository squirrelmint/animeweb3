    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
          </div>
        </div>
        
      </div>
    </footer>
  </div>

  <script>

    const mainSide = $('#mainSidenav').html();
    const mobilemedia = window.matchMedia("(max-width: 768px)");
    const desktopmedia = window.matchMedia("(min-width: 769px)");

    function myDesktopSidenav(x) {
      if (desktopmedia.matches) {
        document.getElementById("mySidenav").style.width = "250px";
      }else{
        document.getElementById("mySidenav").style.width = "0px";
      }
    }

    myDesktopSidenav(desktopmedia); // Call listener function at run time
    desktopmedia.addListener(myDesktopSidenav); // Attach listener function on state changes
    
    $(document).ready(function() {

      var mySwiper = new Swiper('#HomeSlide', {
        loop: true,
        speed: 800,
        spaceBetween: 100,
        effect: 'fade',

        // Slide auto play
        autoplay: {
          delay: 5000,
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      if (desktopmedia.matches) {
        document.getElementById("mySidenav").style.width = "250px";
      }

    });

    function goView(id, name , ep) {
      window.location.href = "/anime/" + id + '/' + name + '/' + ep + '/' + nameep;
    }

    function goCate(id, name) {
      window.location.href = "/category/" + id + '/' + name ;
    }
    /* Set the width of the side navigation to 0 */
    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
      document.body.style.overflow = 'hidden'
    }

    function openCate() {
      document.getElementById("mySidenav").style.width = "250px";
      if (mobilemedia.matches) {
        document.getElementById("mySidenav").style.width = "100%";
      }
      
      document.getElementById("mySidenav").style.overflowY = 'auto'
      document.body.style.overflow = 'hidden'

      var html = '';

      html += '<a href="javascript:void(0)" onclick="closeCate()"><i class="fas fa-arrow-left"></i> BACK</a>';

      var cate = JSON.parse('<?=json_encode($list_category)?>');

      cate.forEach(function(object) {
        html += '<a href="#">'+object.category_name+'</a>';
      });

      $('#mainSidenav').html(html);
      // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeCate() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav").style.width = "250px";
      if (mobilemedia.matches) {
        document.getElementById("mySidenav").style.width = "100%";
      }
      // document.body.style.overflow = 'hidden'
      $('#mainSidenav').html(mainSide);
      // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.overflow = 'auto'
      $('#mainSidenav').html(mainSide);
    }
    
  </script>

  </body>

  </html>
