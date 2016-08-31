"use strict";

function formatDuration (seconds) {
	var time = seconds;
	var years = Math.floor(seconds / 31536000);
	var days = Math.floor((seconds %= 31536000) / 86400);
	var hours = Math.floor((seconds %= 86400) / 3600);
	var minutes = Math.floor((seconds %= 3600) / 60);
	var second = seconds % 60;
	var arr = [years,days, hours, minutes, second, 'end'];//adding an 'end' indicator for the end of the array
	var j = 0;
	// console.log(years+" years "+days+" days " +hours+ " hours "+minutes+"  minutes "+ second +" seconds ");
	//removing all the 0's
	function remove0 (){
		for(var i=0; i < arr.length; i++){
			if(arr[i] == 0){
				arr.splice(i,1);
			}
		}		
	}
	//adds the , or and after the time value
	function addSeparator(value, type){
		//type for seconds = a and rest will be b value
		remove0();//remove all the 0's
		if(arr[j+2] == 'end'){//if is the last number of the array followed by end.
			type = 'a';
		}
		j++;
		//typ a will be the ending time and has the and before
		switch(type){
			case 'a':
				if(value != 0) //if our last element is equals to 
					return " and " + value;
				else
					return "";
				break;
			//b will have the comma and the space
			case 'b':
				if(value !=0)
					return ", " + value;
				else
					return "";
				break;
			default:
				console.log("default");
		}
		
	}
	//returns wheter or not a number finishes with s or not.
	function numberEnding (number) {
        return (number > 1) ? 's' : '';
    }
	//function gets only seconds
	function getSeconds(){
		return (second != 0) ? second +" second"+numberEnding(second) : "";
	}
	function getMinutes(){//funciton gets minutes and seconds
		return (minutes != 0) ? minutes +" minute"+numberEnding(minutes) : "";
  	}
  	//gets hours minutes and seconds
  	function getHours(){
  		return (hours != 0) ? hours +" hour"+numberEnding(hours) : "";
  	}
  	//get days and rest
  	function getDays(){
  		return (days != 0) ? days +" day"+numberEnding(days) : "";
  	}
  	//get years and rest
  	function getYears(){
  		return (years != 0) ? years +" year"+numberEnding(years) : "";
  	}
  	//begin
	if (time == 0) {
			return "now";
	}
  	else if(time >= 31536000){//for seconds more than a year
  		return getYears(years)+ addSeparator(getDays(days), 'b') + addSeparator(getHours(hours),'b')+ addSeparator(getMinutes(minutes),'b')
  		+ addSeparator(getSeconds(second), 'a');
  	}
  	else if(time >= 86400){//for a day
  		return getDays(days) + addSeparator(getHours(hours),'b')+ addSeparator(getMinutes(minutes),'b')
  		+ addSeparator(getSeconds(second), 'a');
  	}
  	else if(time >= 3600){//for an hour
  		return getHours(hours)+ addSeparator(getMinutes(minutes),'b') + addSeparator(getSeconds(second), 'a');;
  	}
  	else if(time >= 60){//for minutes
		return getMinutes(minutes) + addSeparator(getSeconds(second), 'a');
   	}
  	else if(time < 60){
  		return getSeconds(second);
  	}
}

var a = 94608000+ (24*68*3600) + (3*3600)+(4*60);
var b = 3662;
console.log(formatDuration(1202222));
//94608000 + 


