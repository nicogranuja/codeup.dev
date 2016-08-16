"use strict";
function sumStrings(a,b) { 
var result;
var firstNum;
var secondNum;
console.log(typeof(a));
if(typeof(a) != 'string' && typeof(a) != 'number' && (typeof(b)=='number')||typeof(b)=='string'){
	console.log("if");
	secondNum = parseInt(b);
	return secondNum.toString();
}
else if(typeof(b) != 'string' && typeof(b) != 'number' && (typeof(a)=='number')||typeof(a)=='string'){
	console.log("else if");
	 firstNum= parseInt(a);
	 return firstNum.toString();
  }
else{
	console.log("in else");
	firstNum= parseInt(a);
	secondNum = parseInt(b);
	result = (firstParameter+secondNum).toString();
	return result;
	}

}

console.log(sumStrings('1', '5'));