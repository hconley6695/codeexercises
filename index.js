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


