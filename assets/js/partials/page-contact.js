function initMap(){
    var center = {lat: 39.7674578, lng: -94.846681};
    var map = new google.maps.Map(document.getElementById('js-map'), {
        center: center,
        scrollwheel: true,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: true,
        fullscreenControl: true,
        zoom: 15
    });

    var bounds = new google.maps.LatLngBounds();
    var mapOptions = { mapTypeId: 'roadmap' };

    //adding custom map style
    var styles = [
        {
            "featureType": "administrative.country",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "simplified"
                },
                {
                    "hue": "#ff0000"
                }
            ]
        }
    ];

    map.setOptions({styles: styles});
}