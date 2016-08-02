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


//Start of challenge
function convertTime(time){
	var hour = time.substring(0, time.indexOf(':'));
	var minutes = time.substring(time.indexOf(':')+1, time.length);
	//console.log("the hour is: "+hour+" the time is "+minutes);
	if(hour<12){
		if(hour<1){
			console.log("12:"+minutes+"am");
		}
		else{
			console.log(time+"am");
		}
	}
	else if(hour == 12){
		console.log(time+"pm");
	}
	else{
		console.log((hour-12)+":"+minutes+"pm");
	}
}
convertTime('4:30');
convertTime('23:55');
convertTime('8:00');
convertTime('12:30');
convertTime('00:40');


//start challenge 2


