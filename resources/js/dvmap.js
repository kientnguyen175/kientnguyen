/* DV MAP PLUGIN */
(function ($) {
    "use strict";
    
    // Plugin Options
    $.fn.dvmap = function (options) {
        var selector = $(this);
        var settings = $.extend({
            container: 'google-map',
            latitute: '40.714353',
            longitude: '-74.005973',
            zoom: 14,
            zoomcntrl: true,
            maptypecntrl: false,
            dvcustom: true
        }, options);

        // Start building the map
        function googlemap() {
            
            // Custom Map Skin
            var customstyle = [{
                "featureType": "all",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#1F2041"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#2E4057"
                }, {
                    "lightness": -20
                }]
            }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#1F2041"
                }]
            }, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "color": "#1F2041"
                }, {
                    "lightness": 5
                }]
            }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#E0D3DE"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "administrative.country",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#782347"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "administrative.province",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#782347"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "administrative.locality",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#782347"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "administrative.neighborhood",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#782347"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }];
            
            // Coordinates
            var latlng = new google.maps.LatLng(settings.latitute, settings.longitude);
            
            // Map Options
            var myMapOptions = {
                zoom: settings.zoom,
                scrollwheel: false,
                disableDefaultUI: true,
                mapTypeControl: settings.maptypecntrl,
                zoomControl: settings.zoomcntrl,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.MEDIUM,
                    position: google.maps.ControlPosition.LEFT_TOP
                },
                center: latlng
            };
            
            // Map Selector
            var map = new google.maps.Map(document.getElementById(settings.container), myMapOptions);

            // Activate Custom Map Skin If It Is Enabled
            if (settings.dvcustom === true) {
                var mapType = new google.maps.StyledMapType(customstyle);
                map.mapTypes.set('custommap', mapType);
                map.setMapTypeId('custommap');
            }

            // Define The Custom Map Marker
            var marker = new MarkerWithLabel({
                position: latlng,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 0,
                },
                map: map,
                draggable: false,
                labelAnchor: new google.maps.Point(latlng),
                labelClass: "isg-pin", // the CSS class for the label
            });

            // Add Custom Map Marker
            map.addListener('idle', function () {
                if (!selector.find(".isg-pin > div").hasClass("isg-pulse")) {
                    jQuery(".isg-pin", selector).append("<div class='isg-pulse'></div>");
                }
            });
        }
        
        // Build the Map
        googlemap();
        
    };
}(jQuery));