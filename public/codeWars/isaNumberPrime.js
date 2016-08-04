function isPrime(num) {
  result = true; //result true by default and changed later on if otherwise
  num = Math.abs(num); //taking care of negative numbers
  //Taking care of the base cases-----------------------
  if (num === 0) {
    result = false;
  } else if (num === 1) {
    result = false;
  } else if (num === 2) {

  }
  //-------------------------------------
  //to test the rest of the numbers
  else {
    //for loop that skips the test cases 0,1,2 and goes all the way to 1 before num
    for (var i = 2; i < num; i++) {
      if (num % i == 0) { //if num is divisible by any less number than itself it is not a prime number
        result = false; //change the result value.
      }
    }
  }

  return result;
}