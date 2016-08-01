"use strict";
var grade1 = 70;
var grade2 = 80;
var grade3 = 95;
var averageGrades;

function getAverage(a,b,c){
	var result = (a+b+c)/3;
	result.toFixed(2);
	return result;
}
function gradeMessage(average){
	if(average>80){
	console.log("you're awesome");
	}
	else{
		console.log("you need more practice");
	}
}


averageGrades = getAverage(grade1,grade2,grade3);
console.log("The average is: "+ averageGrades);
gradeMessage(averageGrades);


// end of first
var name1 = "Cameron";
var cameron = 180;
var name2 = "Ryan";
var ryan = 250;
var name3 = "George";
var george = 320;

function fixMoney(amount){
	amount = amount.toFixed(2);
	return amount;
}

function getDiscount(name, moneySpent){
	if(moneySpent>200){
 		console.log(name+" bought $"+moneySpent+", discount was applied. Final payment: $"+(moneySpent-moneySpent*.35));
	}
	else{
	 	console.log(name+" bought $"+moneySpent+", no discount was applied. Final payment: $"+moneySpent);
	}
}
cameron = fixMoney(cameron);
ryan = fixMoney(ryan);
george = fixMoney(george);
getDiscount(name1, cameron);
getDiscount(name2, ryan);
getDiscount(name3, george);
 
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





