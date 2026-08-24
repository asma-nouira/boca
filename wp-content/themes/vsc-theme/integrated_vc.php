<?php

/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 11/10/2017
 * Time: 10:55
 */
function vsc_map()
{
    $map = '<div id="map1" style="width: 100%;height:750px;min-height: 100%;"></div>';
    ?>
    <script>

        addedMap = false;
        jQuery(document).scroll(function () {
            if (!addedMap && jQuery(document).scrollTop() > 100) {
                addedMap = true;
                jQuery(function () {
                    var points = new google.maps.LatLng(45.54249291368219, -73.79054235850244);
                    var styles = [
                        {
                            "stylers": [
                                {"visibility": "on"},
                                {"hue": "#F1ECE9"}
                            ]
                        }
                    ];

                    var mapOptions1 = {
                        scrollwheel: false,
                        // How zoomed in you want the map to start at (always required)
                        zoom: 17,
                        center: points, // New York
                        // This is where you would paste any style found on Snazzy Maps.
                        styles: styles
                    };
                    // Create the Google Map using our element and options defined above
                    var map1 = new google.maps.Map(document.getElementById("map1"), mapOptions1);
                    var rectangle = new google.maps.Rectangle();

                    // Let's also add a marker while we're at it
                    var marker = new google.maps.Marker({
                        position: points,
                        map: map1,
                        icon: '/wp-content/themes/vsc-theme/images/Map-icon.svg',
                        url: 'https://www.google.com/maps/place/Clinique+dentaire+Boca/@45.5423163,-73.7931709,17z/data=!4m14!1m7!3m6!1s0x4cc9233a9d86edc1:0x83404ca3227be21!2sClinique+dentaire+Boca!8m2!3d45.5423126!4d-73.790596!16s%2Fg%2F11mk7nnk6x!3m5!1s0x4cc9233a9d86edc1:0x83404ca3227be21!8m2!3d45.5423126!4d-73.790596!16s%2Fg%2F11mk7nnk6x?entry=ttu&g_ep=EgoyMDI2MDgxOS4wIKXMDSoASAFQAw%3D%3D'
                    });
                    marker.setAnimation(google.maps.Animation.BOUNCE);

                    marker.addListener('mouseover', function () {
                        marker.setAnimation(null);
                    });
                    marker.addListener('mouseout', function () {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        window.location.href = this.url;
                    });
                });
            }
            
        });
    </script>
    <?php return $map;
}

add_shortcode('vsc_map', 'vsc_map');
