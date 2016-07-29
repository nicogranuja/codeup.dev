"use strict";
// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.
(function myName(name){
	//var myNameIs = 'Nicolas'; // TODO: Fill in your name here.
	console.log("hello, "+name);
})("Nicolas");

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
//myName(myNameIs);
// Don't modify the following line

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.
(function isOdd(number){
	// It generates a random number between 1 and 100 and stores it in random
	//var random = Math.floor((Math.random()*100)+1);
	var message = number%2==0 ? "Number: "+ number +" is not odd." : "Number: "+ number +" is odd.";
	console.log(message);
})(Math.floor((Math.random()*100)+1));
// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
//isOdd(random);