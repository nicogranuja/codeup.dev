"use strict";
//variables
var buttonsNumbers = document.getElementsByClassName('buttonsNum');
var buttonsOperator = document.getElementsByClassName("buttonsOperator");
var buttonsAction = document.getElementsByClassName("buttonsAction");
var leftInput = document.getElementById("leftInput");
var middleInput = document.getElementById("operator");
var rightInput = document.getElementById("rightInput");
// variables
function doTheMath() {
	var leftNumber = parseInt(leftInput.value);
	var rightNumber = parseInt(rightInput.value);
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
//function will return true if an operator has been pressed which determines in this case that user is ready
//to input another number
function operatorPressed(){
	var pressed = false;
	if(middleInput.value != "")
		pressed = true;
	return pressed;
}
//function that will test that our fields are not empty
function weHaveInput(){
	var notEmpty = false;
	if(leftInput.value !='' && rightInput.value != '')//if both fields are not empty
		notEmpty= true;
	return notEmpty;
}
//this function will get the numbers pressed and put them in the left iput bar.
function doButtonsNum(){
	if(!operatorPressed()){
		leftInput.value += this.innerText;
	}
	else{
		rightInput.value += this.innerText;
	} 
}
//controls the operand buttons
function doButtonsOperator(){
	middleInput.value = this.innerText;
}
//controls the action buttons so far = and C
function doButtonsAction(){
	var action = this.innerText;
	switch(action){
		case '=':
			if(operatorPressed() && weHaveInput()){//making sure we have data to operate with
				doTheMath();
				rightInput.value="";
			}
			else{
				alert("No input or wrong input");
			}

			break;
		case 'C'://clearing the values
			leftInput.value ="";
			middleInput.value = "";
			rightInput.value = "";
			break;
		default:
			console.log("default on the switch! (doButtonsAction() method)");
	}
}
//function that will register the array of buttons.
function registerButtons(){
	for(var i=0; i < buttonsNumbers.length; i++){
		buttonsNumbers[i].addEventListener('click', doButtonsNum);
	}
	for(var i=0; i < buttonsOperator.length; i++){
		buttonsOperator[i].addEventListener('click', doButtonsOperator);
	}
	for(var i=0; i < buttonsAction.length; i++){
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