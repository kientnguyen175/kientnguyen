// http://sachinchoolur.github.io/lightGallery/docs/

// GALLERY 1
jQuery('#gallery1').on('click', function (e) {
    "use strict";   
    e.preventDefault();
    
    // Initialize the plugin
    jQuery(this).lightGallery({
        
        // Settings
        dynamic: true,
        zoom: true,
        fullScreen: true,
        autoplay: false,
        autoplayControls: true,
        thumbnail: true,
        download: true,
        counter: true,
        actualSize: true,
        
        // Images
        dynamicEl: [{
            // Image url
            'src': 'images/photos/p1.jpg',
            // Thumbnail url
            'thumb': 'images/photos/p1-s.jpg',
            // Title of the image
            'subHtml': 'Proident aute minim senserit'
        }, {
            'src': 'images/photos/p8.jpg',
            'thumb': 'images/photos/p8-s.jpg',
            'subHtml': "Ullamco ubi mandaremus"
        }, {
            'src': 'images/photos/p3.jpg',
            'thumb': 'images/photos/p3-s.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/p9.jpg',
            'thumb': 'images/photos/p9-s.jpg',
            'subHtml': 'Eram labore nescius'
        }, {
            'src': 'images/photos/p5.jpg',
            'thumb': 'images/photos/p5-s.jpg',
            'subHtml': "Ne esse mandaremus"
        }, {
            'src': 'images/photos/p6.jpg',
            'thumb': 'images/photos/p6-s.jpg',
            'subHtml': "Elit vidisse ab philosophari"
        }, {
            'src': 'images/photos/p7.jpg',
            'thumb': 'images/photos/p7-s.jpg',
            'subHtml': 'Aliquip ne hic dolore '
        }, {
            'src': 'images/photos/p2.jpg',
            'thumb': 'images/photos/p2-s.jpg',
            'subHtml': "Qui nisi eiusmod ingeniis"
        }, {
            'src': 'images/photos/p4.jpg',
            'thumb': 'images/photos/p4-s.jpg',
            'subHtml': "Eram lorem nisi occaecat"
        }, {
            'src': 'images/photos/p10.jpg',
            'thumb': 'images/photos/p10-s.jpg',
            'subHtml': "Senserit ubi nisi quibusdam"
        }]
        
    });
    
    return false;
});

// GALLERY 2
jQuery('#gallery2').on('click', function (e) {
    "use strict";  
    e.preventDefault();
    
    // Initialize the plugin
    jQuery(this).lightGallery({
        
        // Settings
        dynamic: true,
        zoom: false,
        fullScreen: false,
        autoplayControls: false,
        thumbnail: true,
        loadYoutubeThumbnail: true,
        youtubeThumbSize: 'default',
        loadVimeoThumbnail: true,
        vimeoThumbSize: 'thumbnail_medium',
        download: false,
        counter: true,
        actualSize: false,
        
        // Videos - Videos work only on a server!
        dynamicEl: [
            {
                // The url of the video
                "src": "http://vimeo.com/70301553"
            },
            {
                "src": "http://www.youtube.com/embed/efVWyPNd3xw"
            }
        ]
        
    });
    
    return false;
});

// GALLERY 3
jQuery('#gallery3').on('click', function (e) {
    "use strict"; 
    e.preventDefault();
    
    // Initialize the plugin
    jQuery(this).lightGallery({
        
        // Settings
        dynamic: true,
        zoom: true,
        fullScreen: true,
        autoplay: true,
        autoplayControls: true,
        pause: 5000,
        thumbnail: true,
        download: true,
        counter: true,
        actualSize: true,
        
        // Images
        dynamicEl: [{
            // Image url
            'src': 'images/photos/p8.jpg',
            // Thumbnail url
            'thumb': 'images/photos/p8-s.jpg',
            // Title of the image
            'subHtml': "Ullamco ubi mandaremus"
        }, {
            'src': 'images/photos/p1.jpg',
            'thumb': 'images/photos/p1-s.jpg',
            'subHtml': 'Proident aute minim senserit'
        }, {
            'src': 'images/photos/p9.jpg',
            'thumb': 'images/photos/p9-s.jpg',
            'subHtml': 'Eram labore nescius'
        }, {
            'src': 'images/photos/p6.jpg',
            'thumb': 'images/photos/p6-s.jpg',
            'subHtml': "Elit vidisse ab philosophari"
        }, {
            'src': 'images/photos/p7.jpg',
            'thumb': 'images/photos/p7-s.jpg',
            'subHtml': 'Aliquip ne hic dolore '
        }, {
            'src': 'images/photos/p5.jpg',
            'thumb': 'images/photos/p5-s.jpg',
            'subHtml': "Ne esse mandaremus"
        }, {
            'src': 'images/photos/p2.jpg',
            'thumb': 'images/photos/p2-s.jpg',
            'subHtml': "Qui nisi eiusmod ingeniis"
        }, {
            'src': 'images/photos/p4.jpg',
            'thumb': 'images/photos/p4-s.jpg',
            'subHtml': "Eram lorem nisi occaecat"
        }, {
            'src': 'images/photos/p3.jpg',
            'thumb': 'images/photos/p3-s.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/p10.jpg',
            'thumb': 'images/photos/p10-s.jpg',
            'subHtml': "Senserit ubi nisi quibusdam"
        }]
        
    });
    
    return false;
});
// GALLERY 4
jQuery('#gallery4').on('click', function (e) {
    "use strict";  
    e.preventDefault();
    
    // Initialize the plugin
    jQuery(this).lightGallery({
        
        // Settings
        dynamic: true,
        zoom: false,
        fullScreen: false,
        autoplay: false,
        thumbnail: false,
        download: false,
        counter: true,
        autoplayControls: false,
        actualSize: false,
        
        // Images
        dynamicEl: [{
            // Image url
            'src': 'images/photos/p7.jpg',
            // Thumbnail url
            'thumb': 'images/photos/p7-s.jpg',
            // Title of the image
            'subHtml': 'Aliquip ne hic dolore '
        }, {
            'src': 'images/photos/p5.jpg',
            'thumb': 'images/photos/p5-s.jpg',
            'subHtml': "Ne esse mandaremus"
        }, {
            'src': 'images/photos/p2.jpg',
            'thumb': 'images/photos/p2-s.jpg',
            'subHtml': "Qui nisi eiusmod ingeniis"
        }, {
            'src': 'images/photos/p3.jpg',
            'thumb': 'images/photos/p3-s.jpg',
            'subHtml': "Quae expetendis"
        }, {
            'src': 'images/photos/p10.jpg',
            'thumb': 'images/photos/p10-s.jpg',
            'subHtml': "Senserit ubi nisi quibusdam"
        }]
        
    });
    
    return false;
});