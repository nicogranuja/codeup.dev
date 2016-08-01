"use strict";
var grades = [70,80,95];
var averageGrades;
var totalGrades=0;
var minGrade=80;

function getAverage(array, length){
	for(var i=0; i< array.length; i++){
		totalGrades += array[i]
	}
	return totalGrades/length;
}
function gradeMessage(average){
	if(average>minGrade){
	console.log("You're awesome");
	}
	else{
		console.log("You need more practice");
	}
}

averageGrades = getAverage(grades, grades.length);
console.log("The average is: "+ averageGrades +
	"\n"+gradeMessage(averageGrades));


// end of first
var arrayNames = ['Cameron','Ryan','George'];
var values = [180,250,320];
var discount = 0.35;
var minAmountForDiscount = 200;
var decimalValues=2;

function fixMoney(amount){
	amount = amount.toFixed(decimalValues);
	return amount;
}

function getDiscount(name, moneySpent){
	if(moneySpent>minAmountForDiscount){
 		console.log(name+" bought $"+moneySpent+", discount was applied. Final payment: $"+fixMoney((moneySpent-moneySpent*discount)));
	}
	else{
	 	console.log(name+" bought $"+moneySpent+", no discount was applied. Final payment: $"+moneySpent);
	}
}

for(var i=0; i<values.length;i++){
	values[i] = fixMoney(values[i]);
	getDiscount(arrayNames[i], values[i]);
}


// end of second

function doFlipACoin(){
	var flipACoin = Math.floor(Math.random()* 2);
	return flipACoin;
}

function decisionMaking(coin){
	var answer = coin==0 ? "Buy a car" : "Buy a house";
	console.log(answer);
}

var coinFlipped = doFlipACoin();
decisionMaking(coinFlipped);





