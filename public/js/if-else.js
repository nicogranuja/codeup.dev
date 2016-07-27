"use strict";
var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

var average = (grade1+grade2+grade3)/3;

if(average>80)
{
	console.log("you're awesome");
}
else
{
	console.log("you need more practice");
}

// end of first

var cameron = 180.00;
cameron = cameron.toFixed(2);
var ryan = 250.00;
ryan = ryan.toFixed(2);
var george = 320.00;
george = george.toFixed(2);

var name1 = "Cameron";
var name2 = "Ryan";
var name3 = "George";

 if(cameron>200)
 {
 	console.log(name1+" bought $"+cameron+", discount was applied. Finally payment: $"+(cameron-cameron*.35));
 }
 else
 {
 	console.log(name1+" bought $"+cameron+", no discount was applied. Finally payment: $"+cameron);
 }

 if(ryan>200)
 {
 	console.log(name2+" bought $"+ryan+", discount was applied. Finally payment: $"+(ryan-ryan*.35));
 }
 else
 {
 	console.log(name2+" bought $"+ryan+", no discount was applied. Finally payment: $"+ryan);
 }
 if(george>200)
 {
 	console.log(name3+" bought $"+george+", discount was applied. Finally payment: $"+(george-george*.35));
 }
 else
 {
 	console.log(name3+" bought $"+george+", no discount was applied. Finally payment: $"+george);
 }

// end of second

var flipACoin = Math.floor(Math.random()* 2)

// if(flipACoin== 0)
// {
// 	console.log("Buy a car");
// }
// else if(flipACoin== 1)
// {
// 	console.log("Buy a house");
// }
var answer = flipACoin==0 ? "Buy a car" : "Buy a house";
console.log(answer);







