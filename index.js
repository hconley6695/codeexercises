//Exercises for practicing JS

// Get day and time 

function getDateTime() {
	var d = new Date();
	var day = d.getDay();

	switch(day) {
		case 0:
			day = "Sunday";
			break;
		case 1:
			day = "Monday";
			break;
		case 2:
			day = "Tuesday";
			break;
		case 3:
			day = "Wednesday";
			break;
		case 4:
			day = "Thursday";
			break;
		case 5: 
			day = "Friday";
			break;
		case 6:
			day = "Saturday";
			break;
		default:
			break;
	}

	var hr = d.getHours();
	var hour, ampm;

	if (hr > 12) {
		hour = hr - 12;
		ampm = "pm";
	} else if (hr == 0) {
		hour = 12;
		ampm = "am"
	} else if (hr == 12) {
		hour = 12;
		ampm = "pm";
	} else {
		hour = hr;
		ampm = "am";
	}

	var m = d.getMinutes();
	var min;

	if (m < 10) {
		m.toString();
		min = "0" + m;
	} else {
		min = m;
	}

	return "Today is " + day + ". The current time is " + hour + ":" + min + ampm + ".";

}

//write a JavaScript function that accepts a number as a parameter and check the number is prime or not.
function primeNumber(num) {
	var isPrimeNumber = true;

	if (num <= 1) {
		isPrimeNumber = false;
	} else if (num == 2 || num == 3 || num == 5) {
		isPrimeNumber = true;
	} else if ((num % 2) == 0) {
		isPrimeNumber = false;
	} else if ((num % 3) == 0) {
		isPrimeNumber = false;
	} else if ((num % 5) == 0 ) {
		isPrimeNumber = false;
	} else if ((num % 7) == 0) {
		isPrimeNumber = false;
	} else {
		isPrimeNumber = true;
	}

	if (isPrimeNumber == false ) {
		return "This is not a prime number.";
	} else {
		return "This is a prime number."
	}
}


//write a function that finds all prime numbers between 1-100

function findPrimeNumbers() {
	var isPrimeNumber = true;
	var primeArray = [];

	for (var num = 0; num <= 100; num++) {
		if (num <= 1) {
			isPrimeNumber = false;
		} else if (num == 2 || num == 3 || num == 5) {
			isPrimeNumber = true;
		} else if ((num % 2) == 0) {
			isPrimeNumber = false;
		} else if ((num % 3) == 0) {
			isPrimeNumber = false;
		} else if ((num % 5) == 0 ) {
			isPrimeNumber = false;
		} else if ((num % 7) == 0) {
			isPrimeNumber = false;
		} else {
			isPrimeNumber = true;
			primeArray.push(num);
		}
	}
	console.log(primeArray);
}



//write a Javascript function which accepts an argument and returns the type

function whichType(param) {
	var x = typeof param;
	console.log(x);
}



//WRite a Javascript function to convert an amount to coins (quarters, dimes, nickels, pennies)

function amountToCoins(amt) {

	var quarters = Math.floor(amt/25);

	if ((amt % 25) != 0) {
		var afterQuarters = amt % 25;
	} else {
		return "Quarters: " + quarters + ", Dimes: 0, Nickels: 0, Pennies: 0";
	}

	var dimes = Math.floor(afterQuarters/10);

	if ((afterQuarters % 10) != 0) {
		var afterDimes = afterQuarters % 10;
	} else {
		return "Quarters: " + quarters + ", Dimes: " + dimes + ", Nickels: 0, Pennies = 0";
	}

	var nickels = Math.floor(afterDimes/5);

	if ((afterDimes % 5) != 0) {
		var afterNickels = afterDimes %5;
	} else {
		return "Quarters: " + quarters + ", Dimes: " + dimes + ", Nickels: " + nickels + ", Pennies = 0";
	}

	var pennies = Math.floor(afterNickels/1);

	return "Quarters: " + quarters + ", Dimes: " + dimes + ", Nickels: " + nickels + ", Pennies :"  + pennies;
}


//write a JavaScript function that accepts two arguments, a string and a letter, and the function will count the number of occurences of the specified letter of the string.

function findLetter(str, letter) {
	var appears = 0;
	var strArray = str.split("");

	strArray.forEach(function (el) {
		if (el == letter) {
			appears++;
		}
		return appears;
	});
	
}












