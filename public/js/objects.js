(function(){
    "use strict";

    // TODO: Create person object
    var person = new Object();
    var person1 = {};

    // TODO: Create firstName and lastName properties in your person object; assign your name to them
    person.firstName = "Nicolas";
    person.lastName = "Alvarez";
    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties
    person.sayHello = function (){
    	alert("Hello "+ this.firstName+" "+this.lastName+" welcome.");
    };
    // Say hello from the person object.
    person.sayHello();
})();