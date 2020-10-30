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
        })

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

        window.location.href = "/category/" + id + '/' + name;
      }
      /* Set the width of the side navigation to 0 */
      /* Set the width of the side navigation to 250px */
      function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    </script>

    </body>

    </html>
