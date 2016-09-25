function domainName(url){
	var arr = url.split("");
	var newString="";
	var found = false;
	for(var i=0; i < arr.length; i++){

		if(arr[i] =='/'){
			url = url.substring(i+2);
			found =true;
			continue;

		}
		else if(arr[i]=='.' && found){
			url.substring(0, i+2);
			console.log(url);
			return url;
		}


	}
	// console.log(arr);	
}

console.log(domainName("http://google.com"));