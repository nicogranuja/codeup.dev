// /moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]
"use strict";


var moveZeros = function (arr) {
  for(var i=0; i < arr.length; i++){
  	if(arr[i] === 0){
  		arr.splice(i,1);
  		arr.push(0);
  	}
  }
  for(var i=0; i < arr.length; i++){
  	if(arr[i] === 0){
  		arr.splice(i,1);
  		arr.push(0);
  	}
  }
  console.log(arr);
  return arr;
}

moveZeros([false,1,0,1,2,0,1,3,"a"]);
moveZeros([ 9, 0, 9, 1, 2, 1, 1, 3, 1, 9, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0 ]);