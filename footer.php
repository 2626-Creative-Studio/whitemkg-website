  <footer>
      <div class="copyright">
        <div class="voffset40"></div>
        <p>copyright 2016. all rights reserved. <!--<a href="#">learn more</a> / <a href="#">view work</a>--></p>
        <div class="voffset40"></div>
      </div>
    </footer>

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/flickity.pkgd.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/twitterFetcher_min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.parallax.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/isotope.pkgd.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.superslides.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.inview.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.numscroller-1.0.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.countdown/jquery.plugin.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins/jquery.countdown/jquery.countdown.min.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/vendor/bootstrap.js"></script>

    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: {lat: -33.9, lng: 151.2},
          scrollwheel: false,
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });

        setMarkers(map);
      }

      function setMarkers(map) {
        var image = {
          url: '<?php echo esc_url(get_template_directory_uri()); ?>/images/demo/icon-map.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(185, 160),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(92, 160)
        };
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        var marker = new google.maps.Marker({
          position: {lat: -33.9, lng: 151.2},
          map: map,
          icon: image,
          shape: shape,
          title: 'Xpression',
          zIndex: 1
        });
      }

    </script>

    <!-- Google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa-jjU99YKDYb0596i5wEWnVzQ3CGrN4s&callback=initMap"
    async defer></script>
    <?php wp_footer(); ?>
</body>
</html>