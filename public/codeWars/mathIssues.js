"use strict";

Math.round = function(number) {
	var intNum= parseInt(number);
	var floatNumber = parseFloat(number);
	var extra = parseFloat(floatNumber-intNum);
	var result=0;
	if(extra>=0.5)
		result = intNum+1;
	else
		result = intNum;
	console.log(result);
  return result; 
};

Math.ceil = function(number) {
	var intNum= parseInt(number);
	var floatNumber = parseFloat(number);
	var extra = parseFloat(floatNumber-intNum);
	var result=0;
	if(extra == 0)
		result = intNum;
	else{
		result= intNum+1;
	}
	console.log(result);
  return result; 
};

Math.floor = function(number) {
  var intNum= parseInt(number);
  return intNum; 
};



Math.round(0.5);
//Math.round(0.5);
Math.ceil(0.6);
//Math.ceil(0.5);
Math.floor(1.8);
//Math.floor(0.5);
