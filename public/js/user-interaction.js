"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
var name = prompt("What is your name?");
while(name.length==0){
	name = prompt("Please enter your name:");
}
// TODO: Show an alert message that welcomes the user based on their input.
alert("welcome to the page! "+name);
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var pizza = prompt("Do you like Pizza? Answer yes or no.");
var pizzaLover = false; //var used to control the answer from user
var goodInput = pizza == 'no' || pizza == 'No' || pizza == 'Yes' || pizza == 'yes';//statement to check user input validation

while(!goodInput){//if the input is different to yes or no
	pizza = prompt("Please try again\nDo you like Pizza? Answer yes or no.");//message to prompt the user to enter again the value
	if(pizza== pizza == 'no' || pizza == 'No' || pizza == 'Yes' || pizza == 'yes'){//checking again user input
		goodInput=true;//if it's good we exit the loop
	}
}
var message = 1;
while(goodInput){//This loop will be the funny part because only takes the answer if the user likes pizza
//otherwise it keeps asking 
	if(pizza == 'no' || pizza== 'No'){//if answer is no we will continue the loop
		var confirmed = confirm("Are you sure you don't like pizza? Click on cancel to correct your mistake or Ok to suffer the consequences.");
		while(pizzaLover == false){
			if(!confirmed){//when the user presses 'Cancel' this condition will be true and we will exit the loop
				//console.log("confirm is false here");
				pizzaLover=true;
				break;
			}
			//----------------------------Beginning of funny messages for hard headed users------------------//
			switch(message){//switch statement that takes a number depending on the message and switches between them until user clicks on cancel
				case 1:
					confirmed = confirm("I hate to ask you again do you really hate it?.");
					message = 2;
					break;
				case 2:
					confirmed = confirm("You are a stubborn one just click on cancel, and admit you like pizza.");
					message = 3;
					break;
				case 3:
					confirmed = confirm("Like why you don't? Everyone likes pizza stop it!");
					message = 4;
					break;
				case 4:
					confirmed = confirm("Stop this madness you click on cancel already!");
					message = 5;
					break;
				default: 
					confirmed = confirm("Ok I give up! Just click close your browser or click on that mean button to stop the pop up messages."+
						"\n or click on cancel and surrender to the pizza.");
			}
			//----------------------------End of funny messages for hard headed users------------------//

		}
	}
	//final message and explanation.
	alert("Nice I do like Pizza too, and btw it was the only acceptable answer. Have a great day");
	break;
}
