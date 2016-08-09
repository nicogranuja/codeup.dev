"use strict";
//variables
var buttonsNumbers = document.getElementsByClassName('buttonsNum');
var buttonsOperator = document.getElementsByClassName("buttonsOperator");
var buttonsAction = document.getElementsByClassName("buttonsAction");
var leftInput = document.getElementById("leftInput");
var middleInput = document.getElementById("operator");
var rightInput = document.getElementById("rightInput");
var textResult = document.getElementById("textResult");
// variables

//function to clear all the values.
function clearAll(){
	textResult.value ="";
	leftInput.value = "";
	rightInput.value = "";
	middleInput.value = "";
}
//function output result will print out the result of the operation in a text area and will clear the rest of the
//boxes
function outPutResult() {
	textResult.value = leftInput.value;
	//clear the rest.
	leftInput.value = "";
	rightInput.value = "";
	middleInput.value = "";
}
//function that will work with the operands that work with the two numbers
function doTheMath() {
	var leftNumber = parseFloat(leftInput.value);
	var rightNumber = parseFloat(rightInput.value);
	switch (middleInput.value) {
		case '+':
			leftInput.value = leftNumber + rightNumber;
			break;
		case '-':
			leftInput.value = leftNumber - rightNumber;
			break;
		case '*':
			leftInput.value = leftNumber * rightNumber;
			break;
		case '/':
			leftInput.value = leftNumber / rightNumber;
			break;
		default:
			console.log("default on switch!(doTheMath() function)");
	}
}
//function that will work with the operators that only use one number at the time
function specialOperator() {
	var result = false;
	switch (middleInput.value) {
		case '.':
			//the dot is "an special operator"
			break;
		case '+/-':
			leftInput.value = parseFloat(leftInput.value) * -1;
			result = true;
			break;
		case '%':
			leftInput.value = parseFloat(leftInput.value) / 100;
			result = true;
			break;
		case '√':
			leftInput.value = Math.sqrt(parseFloat(leftInput.value));
			result = true;
			break;
		default:
			//console.log("default on switch! (specialOperators() function)");
	}
	return result;
}
//function will return true if an operator has been pressed which determines in this case that user is ready
//to input another number
function operatorPressed() {
	var pressed = false;
	if (middleInput.value != "")
		pressed = true;
	return pressed;
}
//function that will test that our fields are not empty
function weHaveInput() {
	var notEmpty = false;
	if (leftInput.value != '' && rightInput.value != '') //if both fields are not empty
		notEmpty = true;
	return notEmpty;
}
//function that will check for input on just the left side
function weHaveInput1() {
	var notEmpty = false;
	if(middleInput != '' && isNaN(leftInput.value)){//checking for input in the middle when left is NaN(empty)
		//not empty should be false and we return it.
		clearAll();
	}
	else if (leftInput.value != ''){ //if left is not empty
		notEmpty = true;
	}
	return notEmpty;
}
//this function will get the numbers pressed and put them in the left iput bar.
function doButtonsNum() {
	if (!operatorPressed()) {
		leftInput.value += this.innerText;
	} else {
		rightInput.value += this.innerText;
	}
}
//controls the operand buttons
function doButtonsOperator() {
	middleInput.value = this.innerText;

}
//controls the action buttons so far = and C
function doButtonsAction() {
	var action = this.innerText;
	switch (action) {
		case '=':
			if (specialOperator() && weHaveInput1()) { //operators that just need one field to work with
				outPutResult();
			} else if (operatorPressed() && weHaveInput()) { //making sure we have data to operate with
				doTheMath();
				outPutResult();
			} else {//when we have different kinds of input that don't work for the program
				alert("Empty input please try again.");
				clearAll();
			}

			break;
		case 'C': //clearing the values
			clearAll();
			break;
		default:
			//console.log("default on the switch! (doButtonsAction() method)");
	}
}
//function that will register the array of buttons.
function registerButtons() {
	for (var i = 0; i < buttonsNumbers.length; i++) {
		buttonsNumbers[i].addEventListener('click', doButtonsNum);
	}
	for (var i = 0; i < buttonsOperator.length; i++) {
		buttonsOperator[i].addEventListener('click', doButtonsOperator);
	}
	for (var i = 0; i < buttonsAction.length; i++) {
		buttonsAction[i].addEventListener('click', doButtonsAction);
	}
}

registerButtons();
// console.log(buttonsNumbers);
// console.log(buttonsOperator);
// console.log(buttonsAction);
// console.log(leftInput);
// console.log(operator);
// console.log(rightInput);