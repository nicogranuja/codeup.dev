(function() {
    "use strict";
    //----------------------------------------------------------//My variables//-----------------------
    var buttonsZoom = document.getElementsByClassName('buttonsZ');//getting the buttons for zoom
    var defaultZoom = 20;
    var restaurants = document.getElementsByClassName('restaurants');
    //------********------********------********------********JSON//------********------********------********------********JSON
    var locationObjects = [
            {     
            "mapCaparellis":{
                "lat": "29.578557",
                "lng": "-98.440806",
                "content":"<h4>Caparellis best food</h3><ul>"+ 
                    "<li>Raviolli</li>"+
                    "<li>Italian Club</li>"+
                    "<li>Shrimp Alfredo</li>"+
                    "</ul"
                },
            },
            {
            "mapSubway":{
                "lat": "29.426049",
                "lng": "-98.490216",
                "content":"<h4>Subway best food</h3>" +"<ul>"+ 
                    "<li>Italian BMT</li>"+
                    "<li>Chicken and Bacon ranch Melt</li>"+
                    "<li>Meatball Marinara</li>"+
                    "</ul"
                },
            },
            {
            "mapPappadeux":{
                "lat": "29.519616",
                "lng": "-98.488065",
                "content":"<h4>Pappadeux best food</h3>" +"<ul>"+ 
                    "<li>Fried Alligator</li>"+
                    "<li>Stuffed Crab</li>"+
                    "<li>Panned Tilapia</li>"+
                    "</ul" 
                },
            } 
    ];
    //------********------********------********------********JSON//------********------********------********------********
    var mapCaparellis ={
        lat: 29.578557,
        lng: -98.440806
    };
    var mapSubway ={
       lat: 29.426049,
       lng: -98.490216
    };
    //----------------------------------------------------------//End My variables//-----------------------
    // Set our map options
    var mapOptions = {//pappadeux map
        // Set the zoom level
        zoom: defaultZoom,
        // This sets the center of the map at our location
        center: {
            lat: 29.519616,
            lng: -98.488065 
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
    //correct this
    var marker = new google.maps.Marker({
        locationObjects[2].mapPappadeux.lat, locationObjects[2].mapPappadeux.lng, 
        map:map
    });
    //correct above this
    // Create a new infoWindow object with content
    var infowindow = new google.maps.InfoWindow({
        content: locationObjects[2].mapPappadeux.content
    });
    // Open the window using our map and marker
    infowindow.open(map, marker);

    //****************************************************//My functions//*********************************
    
    //function to assign the markers for the other restaurants
    function showMarker(){
        
    }
    //function that will change the value of the zoom to the buttons selected
    function restaurantChange(){
        var restaurant = this.innerText;
        var latLng;
        switch(restaurant){
            case 'Pappadeux':
                latLng = new google.maps.LatLng(29.519616, -98.488065); //Makes a latlng
                map.panTo(mapOptions.center); //Make map global
                break;
            case 'Caparellis':
                latLng = new google.maps.LatLng(29.578557, -98.440806); //Makes a latlng
                map.panTo(mapCaparellis); //Make map global
                break;
            case 'Subway':
                latLng = new google.maps.LatLng(29.426049, -98.490216); //Makes a latlng
                map.panTo(mapSubway); //Make map global
                break;
            default:
                console.log("defaulted on restaurant change"); 
                //console.log(restaurant);               
        }
    }
    //function in charge of changing the zoom using setZoom function between 5 10 15
    function changeZoom(){
        var zoomNum = this.innerText;
        map.setZoom(parseInt(zoomNum));
    }
    //register the buttons that control the zoom
    function registerButtons (){
        for(var i=0; i < buttonsZoom.length; i++){
            buttonsZoom[i].addEventListener('click', changeZoom);
        }
        for(var i=0; i < restaurants.length; i++){
            restaurants[i].addEventListener('click', restaurantChange);
        }
    }
    registerButtons();
    marker.addListener('click', showMarker);
    //console.log(restaurants);
    
})();