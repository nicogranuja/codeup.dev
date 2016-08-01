"use strict";
//sum two numbers
//substract one number from another
//multiply two numbers
//divide two numbers
//squar a number (without *)
//sums two squares without * or +
function isNumeric(a){
	var result =true;
	if(isNaN(a)){
		result = false;
	}
	return result;
}
function add(a,b){
	var result= 0;
	if(!isNumeric(a)|| !isNumeric(b)){
		return "Inputs must be numeric";
	}
	result = a+b;
	return result;
}

function substract(a,b){
	var result=0;
	if(!isNumeric(a)|| !isNumeric(b)){
		return "Inputs must be numeric";
	}
	result = a-b;
	return result;
}

function multiply(a,b){
	var result= 0;
	if(!isNumeric(a)|| !isNumeric(b)){
		return "Inputs must be numeric";
	}
	result = a*b;
	return result;
}

function divide(a,b){
	var result=0;
	if(!isNumeric(a)|| !isNumeric(b)){
		return "Inputs must be numeric";
	}
	if(b == 0){
		return "Division by 0 not allowed";
	}
	result = a/b;
	return result;
}

function squareNumber(a){
	var result=0;
	if(!isNumeric(a)){
		return "Inputs must be numeric";
	}
	result = multiply(a,a);
	return result;
}

function sumOfSquares(a, b){
	var result=0;
	if(!isNumeric(a)|| !isNumeric(b)){
		return "Inputs must be numeric";
	}
	a = multiply(a,a);
	b = multiply(b,b);
	result = add(a,b);
	return result;
}


//test
console.log("Adding 12 + 20 = "+add(12,20));
console.log("Substracting 20 - 12 = "+substract(20,12));
console.log("Multiply 5 x 4 = "+multiply(5,4));
console.log("Divide 20 / 4 = "+divide(20,4));
console.log("5 to the power of 2 = "+squareNumber(5));
console.log("Summing the squares of 5 and 10 = "+sumOfSquares(5,10));
console.log("Is the input numberic? "+ sumOfSquares('a',2));
console.log("trying to divide by 0..."+ divide(2,0));
