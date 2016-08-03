"use strict";
function sample(arr){
	var random = Math.ceil((Math.random()*arr.length));
	return arr[random];
}

console.log(sample([1,2,3,4])+" is the random number");

