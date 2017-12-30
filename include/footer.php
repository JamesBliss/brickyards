  <footer>
    <div class="information">
      <address>
        Brickyards Boarding Kennels and Grooming Salon, Pembridge, Leominster, HR6 9HZ
      </address>
    </div>
  </footer>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="resource/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="resource/js/plugins.js"></script>
  <script src="resource/js/responsiveslides.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="resource/js/gmaps.js"></script>
  <script type="text/javascript" src="resource/js/menu.js"></script>
  <script type="text/javascript" src="resource/js/jquery.scrollTo-1.4.3.1.js"></script>
  <script type="text/javascript" src="resource/js/facebox.js"></script>
  <script src="resource/js/script.js"></script>
  <!-- end scripts -->

  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        div: '#map-small',
        zoom: 13,
        lat: 52.21055,
        lng: -2.91940,
        setZoom: 90
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay">Here<div class="overlay_arrow above"></div></div>',
        verticalAlign: 'top',
        horizontalAlign: 'center'
      });
    });
  </script>

  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        div: '#map-large',
        zoom: 13,
        lat: 52.21055,
        lng: -2.91940,
        setZoom: 90
      });
      map.drawOverlay({
        lat: map.getCenter().lat(),
        lng: map.getCenter().lng(),
        layer: 'overlayLayer',
        content: '<div class="overlay">Here<div class="overlay_arrow above"></div></div>',
        verticalAlign: 'top',
        horizontalAlign: 'center'
      });
    });
  </script>

  <script>
    $(function () {
     $(".rslides").responsiveSlides();
   });
  </script>

  <script>
  $(document).ready(function() {
    var aboveHeight = $('header').outerHeight();

    $(window).scroll(function(){
      if ($(window).scrollTop() > aboveHeight){
        $('.nav-wrapper').addClass('fixed scrolled').css('top','0').next().css('padding-top','76px');
      } else {
        $('.nav-wrapper').removeClass('fixed').next().css('padding-top','0');
      }
    });
  });
  </script>

  <script>
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox()
    })
  </script>

  <script>
    $('nav').click(function(e){
      e.preventDefault();
      var link = e.target;
      link.blur();
      if( link.title )
        $(this).parent().find('span.message').text(link.title);
     });
    var $paneTarget = $('body');
    $('.about').click(function(){$paneTarget.stop().scrollTo( '#about', 800,  { offset:{ top:-100 } } );});
    $('.need').click(function(){$paneTarget.stop().scrollTo( '#need', 800,  { offset:{ top:-100 } } );});
    $('.information').click(function(){$paneTarget.stop().scrollTo( '#information', 800,  { offset:{ top:-100 } } );});
    $('.find').click(function(){$paneTarget.stop().scrollTo( '#find-us', 800,  { offset:{ top:-100 } } );});
    $('.contact').click(function(){$paneTarget.stop().scrollTo( '#contact', 800,  { offset:{ top:-100 } } );});
  </script>

  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37270476-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</body>
</html>