function twelveToTwentyFour(time){
	var hour = time.substring(0, time.indexOf(':'));//getting hour
	var minutes = time.substring(time.indexOf(':')+1, time.length-2);//getting minutes
  var extra = time.substring(time.length-2, time.length);//getting last two letters am or pm
  extra = extra.toLowerCase();//making those letters homogenius
  //console.log(extra);
  if(hour<12 && extra == 'pm'){
  	hour = parseInt(hour);
  	time = (hour+12)+":"+minutes;
    console.log(time);
   }
  else if(hour == 12 && extra == 'am'){
  	time = "0:"+minutes;
    console.log(time);
    }
  else{
  	hour = parseInt(hour);
  	time = (hour)+":"+minutes;
    console.log(time);
    }
	return time;
}

twelveToTwentyFour('4:30pm');
twelveToTwentyFour('12:22Pm');
twelveToTwentyFour('12:45AM');
twelveToTwentyFour('1:00aM');