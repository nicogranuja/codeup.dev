(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    var names = ['Joe', 'Moe', 'Dean', 'Gene'];
    // TODO: Create a log statement that will log the number of elements in the names array.
    console.log("The number of elements in the array is: "+names.length);
    // TODO: Create log statements that will print each of the names array elements individually.
    for(var i=0; i< names.length;i++){
    	console.log(i+1+" name is: "+names[i]);
    }
})();