"use strict";
function sample(arr){
	var random = Math.ceil((Math.random()*arr.length));
	return arr[random];
}
function twelveToTwentyFour(time){
	hour = time.substring(0, time.indexOf(':'));
	console.log(hour);
	minutes = time.substring(time.indexOf(':'), time.indexOf(':')+2);
	console.log(time);
	return time;
}

console.log(sample([1,2,3,4])+" is the random number");
twelveToTwentyFour('4:30pm');
// twelveToTwentyFour('4:30pm');
// twelveToTwentyFour('12:22Pm');
// twelveToTwentyFour('12:45AM');
// twelveToTwentyFour('9:00aM');
