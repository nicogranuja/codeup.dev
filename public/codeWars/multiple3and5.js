"use strict";

function solution(number) {
  var result = 0;
  for (var i = 3; i < number; i++) { //starting in 3
    if (i % 3 == 0 && i % 5 == 0) { //only count it once if it is a multiple of both
      result += i;
    } else if (i % 3 == 0) //multiple of 3 add it to result
      result += i;
    else if (i % 5 == 0) //multiple of 5 add it to result
      result += i;
  }
  return result;
}