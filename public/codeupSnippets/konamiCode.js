'use strict';

$(document).ready(function(){

    function makeHeadingBlink() {
        var $heading = $('h1');
        var on = true;

        setInterval(function(){
            $heading.css('opacity', (on) ? '1' : '0');
            on = !on;
        },500);
    }

    var codeIndex = 0;

    var keys = {
    	up: 38,
    	down: 40,
    	left: 37,
    	right: 39,
    	b: 66,
    	a: 65,
    	enter: 13
    };

    var konamiCode = [
        keys.up,
        keys.up,
        keys.down,
        keys.down,
        keys.left,
        keys.right,
        keys.left,
        keys.right,
        keys.b,
        keys.a,
        keys.enter
    ];

    $(document).keyup(function(e){

        if (e.keyCode == konamiCode[codeIndex]) {
            codeIndex += 1;
        } else {
            codeIndex = 0;
        }

        if (codeIndex == konamiCode.length) {
            makeHeadingBlink();
        }
    });

});
