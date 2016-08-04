function digPow(n, p) {
  //converting the number n into a string
  var nString = n.toString();
  var nArray = nString.split(''); //splitting the string into an array
  var sum = 0; //this will be the total
  for (var i = 0; i < nArray.length; i++) { //running the array
    var localNum = parseInt(nArray[i]); //saving the single digit inside a variable and making it an int
    sum += Math.pow(localNum, (p)); //adding to the total after elevating the number to the power of p
    p++; //increase the exponen
  }
  var num = parseInt(nArray.join('')); //converting now the array into a number
  var ourMagicNumber = sum / num; //solving the equation

  return Number.isInteger(ourMagicNumber) ? ourMagicNumber : -1; //solution if there is an integer
}