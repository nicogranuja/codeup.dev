(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split('|');
    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
    var planetsString2 = "Mercury<br>Venus<br>Earth|Mars<br>Jupiter<br>Saturn<br>Uranus<br>Neptune";
    console.log(planetsString2);
    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
    var planetsString3 = "<ul>"+
    "<li>Mercury</li><li>Venus</li><li>Earth</li>"
    +"<li>Mars</li><li>Jupiter</li><li>Saturn</li><li>Uranus</li>"
    +"<li>Neptune</li></ul>";
    console.log(planetsString3);
})();