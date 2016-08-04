"use strict";

function iqTest(numbers) {
	var arr = numbers.split(' ');//getting the array of numbers
	//setting counters
	var countEven = 0,
		countOdd = 0;
	var indexEven = 0,
		indexOdd = 0;

	for (var i = 0; i < arr.length; i++) {//for loop that goes through the numbers
		if (arr[i] % 2 == 0) {//if its even we increase counter and save that index
			countEven++;
			indexEven = i;
		} else {//if its odd we do the same
			countOdd++;
			indexOdd = i;
		}

	}
	//conditions that make sure the number was only found once and returns that one plus one since we start at 1
	if (countEven == 1)
		return indexEven + 1;
	else if (countOdd == 1)
		return indexOdd + 1;
}

iqTest('2 4 7 8 10');
console.log(iqTest('2 4 7 8 10'));
console.log(iqTest("1 2 1 1"));