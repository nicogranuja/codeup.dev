function toWeirdCase(string) {
  //make sure the string is homogenius
  string = string.toLowerCase();
  //convert string to array.
  var arrString = string.split(' ');
  //hour answer string that will be returned.
  var stringAnswer = "";
  //to run the array use 2 for loops one to iterate between the array of words
  for (var i = 0; i < arrString.length; i++) {
    //second for loop iterates through specific words
    for (var j = 0; j < arrString[i].length; j++) {
      var local;
      if (j % 2 == 0) { //getting the pair values
        local = arrString[i].charAt(j).toUpperCase(); //converting the specific character to uppercase
        stringAnswer += local;
      } else { //getting the odd
        local = arrString[i].charAt(j); //not doing anything since string is already lower case
        stringAnswer += local;
      }
    }
    stringAnswer += ' '; //adding a space to separate the words
  }
  stringAnswer = stringAnswer.trim(); //removing the last space of the last iteration
  return stringAnswer;
}