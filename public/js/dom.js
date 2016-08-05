"use strict";
var navbarElement = document.getElementsByTagName('a');


var delay = 2000;
function styleFunction(){
	narvbarElement.style.color = 'red';
}
function dissapearMenu(){
	navbarElemnt.innerHTML = "";
}

function tagsA(){
	for(var i=0; i< navbarElement.length; i++){
		console.log(navbarElement[i]);
		navbarElement[i].style.color = 'red';
		navbarElement[i].style.fontFamily='fantasy';
		navbarElement[i].setAttribute('href', 'https://www.google.com');
	}
}
//var setTimeoutId = setTimeout(dissapearMenu, delay);

setTimeout(tagsA, delay);


