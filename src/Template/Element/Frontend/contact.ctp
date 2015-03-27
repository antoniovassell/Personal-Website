<div id="contact-map-wrap">
    <div id="map_canvas"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="jumbotext"><?php echo __('Get In Touch'); ?></h1>
                <p class="jtsub"><?php echo __('Do you need a web application, have a question or comment? Please feel free to reach out.'); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h3><?php echo __('Message'); ?></h3>
            <hr />
            <?php echo $this->Form->create('Message', array('url' => array('controller' => 'messages', 'action' => 'send_message'))); ?>
            <?php echo $this->Form->input('name', array('placeholder' => __('Name'), 'label' => false)); ?>
            <?php echo $this->Form->input('email_address', array('placeholder' => __('Email Address'), 'label' => false)); ?>
            <?php echo $this->Form->input('subject', array('placeholder' => __('Subject'), 'label' => false)); ?>
            <?php echo $this->Form->input('message', ['placeholder' => __('Message'), 'label' => false, 'type' => 'textarea']); ?>
            <?php echo $this->Form->input('url', array('placeholder' => __('Leave this empty'), 'label' => false, 'div' => array('class' => 'catch'))); ?>
            <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-warning']); ?>
            <?php echo $this->Form->end(); ?>
            <br/>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-4">
            <h3><?php echo __('Social'); ?></h3>
            <hr />
            <ul id="get-social">
                <li>
                    <a href="https://github.com/antoniovassell" target="_blank"><i class="fa fa-github"></i> GitHub</a>
                </li>
                <li>
                    <a href="https://twitter.com/Antoniovassell" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a href="https://plus.google.com/+AntonioVassell" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/antonio.vassell" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
                <li>
                    <a href="http://instagram.com/antoniovassell" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                </li>
                <li>
                    <a href="http://www.linkedin.com/in/antoniovassell" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4">
            <h3><?php echo __('Contact Details'); ?></h3>
            <hr />
            <address>
                <strong>Antonio Vassell.</strong><br>
                Kingston 5<br>
                Jamaica<br>
                <abbr title="Phone">T:</abbr> (876) 846-6974
            </address>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,
            scrollwheel: false,
            disableDefaultUI: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: false,
            navigationControl: false,
            streetViewControl: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(18.0137463, -76.8096801), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ff514c"},{"visibility":"on"}]}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map_canvas');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
