// When the window has finished loading create our google map below
function init() {
    
    "use strict"; // Start of use strict
    //
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 3, scrollwheel: false,
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(41.87194, 12.56738), //Italy

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
    };

    // image from external URL

    var myIcon = 'assets/images/marker.png';

    //preparing the image so it can be used as a marker
    //https://developers.google.com/maps/documentation/javascript/reference#Icon
    //includes hacky fix "size" to allow for wobble
    var catIcon = {
        url: myIcon,
    }

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(27.514162, 90.433601), //Bhutan
        map: map,
        icon: catIcon,
        title: 'Bhutan!',
        animation: google.maps.Animation.DROP,
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(23.810332, 90.4125181), //Bangladesh
        map: map,
        icon: catIcon,
        title: 'Bangladesh!',
        animation: google.maps.Animation.DROP,
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(28.394857, 84.124008), //Nepal
        map: map,
        icon: catIcon,
        title: 'Nepal!',
        animation: google.maps.Animation.DROP,
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.0082376, 28.9783589), //Istanbul
        map: map,
        icon: catIcon,
        title: 'Istanbul!',
        animation: google.maps.Animation.DROP,
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(51.5073509, -0.1277583), //London
        map: map,
        icon: catIcon,
        title: 'London!',
        animation: google.maps.Animation.DROP,
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.87194, 12.56738), //Italy
        map: map,
        icon: catIcon,
        title: 'Italy!',
        animation: google.maps.Animation.DROP,
    });
}