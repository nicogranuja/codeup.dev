(function() {
    "use strict";

    // Set our map options
    var mapOptions = {
        // Set the zoom level
        zoom: 19,

        // This sets the center of the map at our location
        center: {
            lat: 29.426791,
            lng: -98.489602
        }
    };
    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    // Include code from previous example
    // Set our address to geocode
    var address = "76 NE Interstate 410 Loop, San Antonio, TX 78216";
    // Init geocoder object
    var geocoder = new google.maps.Geocoder();
    // Geocode our address
    var pappadeux = {
        lat: 29.519616,
        lng: -98.488065
    };
    geocoder.geocode({
        "address": address
    }, function(results, status) {
        // Check for a successful result
        if (status == google.maps.GeocoderStatus.OK) {
            // Recenter the map over the address
            map.setCenter(results[0].geometry.location);
        } else {
            // Show an error message with the status if our request fails
            alert("Geocoding was not successful - STATUS: " + status);
        }
    });

    var marker = new google.maps.Marker({
        position: pappadeux,
        map: map
    });
    // Create a new infoWindow object with content
    var infowindow = new google.maps.InfoWindow({
        content: "Really good alligator meat here!."
    });

    // Open the window using our map and marker
    infowindow.open(map, marker);

})();