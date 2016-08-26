// Test.assertEquals(formatDuration(1), "1 second");
// Test.assertEquals(formatDuration(62), "1 minute and 2 seconds");
// Test.assertEquals(formatDuration(120), "2 minutes");
// Test.assertEquals(formatDuration(3600), "1 hour");
// Test.assertEquals(formatDuration(3662), "1 hour, 1 minute and 2 seconds");


//3600 seconds 1 hour
//86400 seconds 1 day
//31536000 seconds in a year
"use strict";



function formatDuration (seconds) {
	if(seconds == 0){
		return "now";
	}
  	
  	if(seconds >= 31536000){//for seconds more than a year

  	}
  	else if(seconds >= 86400){//for a day

  	}
  	else if(seconds >= 3600){//for an hour

  	}
  	else if(seconds >= 60){//for minutes
		var minutes = parseInt(seconds/60);
  		var second = parseInt(seconds%60);

  		if(seconds == 60){
  			return "1 minute"
  		}
  		else
  		{

  			return minutes + " minutes and " + second + " seconds";
  		}
  	}
  	else{//just seconds
  		return seconds + " seconds";
  	}

}

console.log(formatDuration(3599));