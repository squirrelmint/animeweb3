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
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    myFunction(desktopmedia); // Call listener function at run time
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

    function goView(id, name, ep, nameep) {
        if(!nameep){
        nameep == ' '
      }
        countView(id);

        window.location.href = "/anime/" + id + '/' + name + '/' + ep + '/' + nameep;


      }

      function countView(id) {
        // alert(id);
        var base_url = '<?= base_url() ?>';
        $.ajax({

          url: base_url + "/countview/" + id,
          method: "GET",

          async: true,

          success: function(response) {

            console.log(response); // server response

          }


        });

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
      document.body.style.overflow = 'auto';

      if (mobilemedia.matches) {
        document.getElementById("mySidenav").style.width = "100%";
        document.body.style.overflow = 'hidden';
      }
      
      document.getElementById("mySidenav").style.overflowY = 'auto'
      

      var html = '';

      html += '<a href="javascript:void(0)" onclick="closeCate()"><i class="fas fa-arrow-left"></i> BACK</a>';

      var cate = JSON.parse('<?=json_encode($list_category)?>');

      cate.forEach(function(object) {
        html += '<a onclick="goCate('+object.category_id+',\''+object.category_name+'\')">'+object.category_name+'</a>';
      });

      $('#mainSidenav').html(html);
      // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeCate() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.overflow = 'auto';
      document.getElementById("mySidenav").style.overflowY = 'hidden'

      if (mobilemedia.matches) {
        document.getElementById("mySidenav").style.width = "100%";
        document.body.style.overflow = 'hidden';
      }
      
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
