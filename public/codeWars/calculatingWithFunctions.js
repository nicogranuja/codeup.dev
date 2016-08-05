function zero() {}

function one(operation,number) {
	function one(){
			return 1;
	}
	if(arguments.length == 0){
		
	}
	else{
		console.log("one being called.");
		var value = 1;
		var result="";
		var operate = operation(number());
		//var rightNumber = number();
		result = value + operate;
		console.log(result);
		return result;	
	}
}


function two() {}
function three() {}
function four() {}
function five() {}
function six() {}
function seven() {}
function eight() {}
function nine() {}

function plus(number) {
	var operator = '+';
	//var rightNumber = number();
	var rightSide = operator + 1;
	console.log(rightSide);
	return rightSide;
}

function minus() {}
function times() {}
function dividedBy() {}

one(plus(one()));
//one(plus(), one());