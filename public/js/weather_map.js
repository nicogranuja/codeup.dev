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

	//creating the map
	var mapOptions = {
		zoom: 12,

		// position of codeup
		center: {
			lat: 29.426791,
			lng: -98.489602
		}
	};

	var mapDiv = document.getElementById('map-canvas');
	var map = new google.maps.Map(mapDiv, mapOptions);

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
		//console.log(data);
		getWeather(data);


	}).fail(function() {
		alert('something went wrong!');
	});
	// end of ajax request

	//when go is clicked
	$btn.click(function() {
		// console.log("btn go clicked");
		// get the ajax request
		$.get("http://api.openweathermap.org/data/2.5/forecast", {
			APPID: myAPIKey,
			// q: "San Antonio, TX",
			lat: parseInt($lat.val()),
			lon: parseInt($lng.val()),
			units: "imperial"
		}).done(function(data) {
			//console.log(data);
			getWeather(data);


		}).fail(function() {
			alert('something went wrong!');
		});
		// end of ajax request

		//making a new map
		var mapOptions = {
			zoom: 9,

			// position of codeup
			center: {
				lat: parseInt($lat.val()),
				lng: parseInt($lng.val())
			}
		};

		var mapDiv = document.getElementById('map-canvas');
		var map = new google.maps.Map(mapDiv, mapOptions);

	});


	//end function
})();