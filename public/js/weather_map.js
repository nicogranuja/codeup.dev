(function() {
		"use strict";

		const myAPIKey = 'c2401631206ed4dfce6c71b360c15cae'; //weather api
		//empty divs to put the info in
		var $emptyDiv = $('#divContent');
		var divNumber = 3; //3 divs
		//variables
		var $lat = $('#lat');
		var $lng = $('#lng');
		var $btn = $('#btnGo');

		var marker;

		//creating the map
		var mapOptions = {
			zoom: 12,

			// position of codeup
			center: {
				lat: 29.426791,
				lng: -98.489602
			}
		};
		var markerCity = {
			lat: 29.426791,
			lng: -98.489602
		};
		//creating a map
		var mapDiv = document.getElementById('map-canvas');
		var map = new google.maps.Map(mapDiv, mapOptions);
		// Add the marker to our existing map
		var marker = new google.maps.Marker({
			position: markerCity,
			map: map
		});
		var infowindow = new google.maps.InfoWindow({
			content: "San Antonio"
		});
		// Open the window using our map and marker
		infowindow.open(map, marker);

		function addMarker(location, map) {
			// Add the marker at the clicked location, and add the next-available label
			// from the array of alphabetical characters.
			marker = new google.maps.Marker({
				position: location,
				// label: labels[labelIndex++ % labels.length],
				map: map
			});
		}

		function mapClicked() {
			console.log("btn go clicked");
			//get the ajax request
			// 	$.get("http://api.openweathermap.org/data/2.5/forecast", {
			// 		APPID: myAPIKey,
			// 		// q: "San Antonio, TX",
			// 		lat: parseFloat($lat.val()),
			// 		lon: parseFloat($lng.val()),
			// 		units: "imperial"
			// 	}).done(function(data) {
			// 		//console.log(data);
			// 		getWeather(data);

			// 		var infowindow = new google.maps.InfoWindow({
			// 			content: data.city.name
			// 		});
			// 		// Open the window using our map and marker
			// 		infowindow.open(map, marker);
			// 		addMarker(event.latLng, map);
			// 	});
			// 	}).fail(function() {
			// 	alert('something went wrong!');
			// });
			//end of ajax request
		}

		function getWeather(data) {
			var content = '';
			//get the city name
			$('#cityName').text(data.city.name);
			//for loop runs thrice
			for (var i = 0; i < divNumber; i++) {
				//creating the div
				content += '<div class="col-sm-4" id="weatherContent"';
				// //temp min and max
				content += '<h1><b>' + data.list[i].main.temp_min + ' ℉/ ' + data.list[i].main.temp_max + ' ℉</b></h1>';
				// //img of conditions
				content += '<p><img src="http://openweathermap.org/img/w/' + data.list[i].weather[0].icon + '.png"></p>';
				// //weather description
				content += '<p><b>' + data.list[i].weather[0].main + ':</b> ' + data.list[i].weather[0].description + '</p>';
				// //humidity
				content += '<p><b>Humidity: </b>' + data.list[i].main.humidity + '</p>';
				// //wind
				content += '<p><b>Wind: </b>' + data.list[i].wind.speed + '</p>';
				// //pressure
				content += '<p><b>Pressure: </b>' + data.list[i].main.pressure + '</p>';
				// //closing div
				content += '</div>'
			}
			//print the content to the html
			$emptyDiv.html(content);
		}

		// get the ajax request
		$.get("http://api.openweathermap.org/data/2.5/forecast", {
			APPID: myAPIKey,
			// q: "San Antonio, TX",
			lat: 29.423017,
			lon: -98.48527,
			units: "imperial"
		}).done(function(data) {
			// //console.log(data);
			getWeather(data);
			// This event listener calls addMarker() when the map is clicked.
			google.maps.event.addListener(map, 'click', function(data) {
				 	console.log("btn go clicked");
				// 	markerPosition = marker.getPosition();
				// 	//get the ajax request
				// 	// $.get("http://api.openweathermap.org/data/2.5/forecast", {
				// 	// 	APPID: myAPIKey,
				// 	// 	// q: "San Antonio, TX",
				// 	// 	lat: markerPosition.lat,
				// 	// 	lon: markerPosition.lng,
				// 	// 	units: "imperial"
				// 	// }).done(function(data) {
				// 		//console.log(data);
				// 		// getWeather(data);

				// 		// var infowindow = new google.maps.InfoWindow({
				// 		// 	content: data.city.name
				// 		// });
				// // Open the window using our map and marker
				// infowindow.open(map, marker);
				// addMarker(event.latLng, map);
			});
			}).fail(function() {
				alert('something went wrong!');
			});
			//end of ajax request
			// end of ajax request
			//end function
		})();