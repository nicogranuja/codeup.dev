// In mathematics, the factorial of integer 'n' is written as 'n!'. 
//It is equal to the product of n and every integer preceding it. For example: 5! = 1 x 2 x 3 x 4 x 5 = 120
// Your mission is simple: write a function that takes an integer 'n' and returns 'n!'.
// You are guaranteed an integer argument. For any values outside the positive range, 
//return null, nil or None. For positive numbers a full length number is expected for example, 
//return 25! = '15511210043330985984000000' as a String!
// Note: 0! is always equal to 1. Negative values should return null;
function factorial(n){
  var num = parseInt(n);//making sure we work with a number
  var total= 1;
  var result="";
  if(num==0){//base case
  	num = 1;
  }
  else if(num<0)//for negative numbers
  {
  	num = null;
  }
  else{//for the rest
  	for(var i=2; i <= num; i++){
  		if(total >= Number.MAX_VALUE){//if the total surpases the positive range of numbers.
  			num = null;
  			break;
  		}
  		total = total * i;
  		result = ""+total;
  	}
  		//console.log(total);
  }
  //total = total.toFixed();
  return result;
}

console.log(factorial(50));