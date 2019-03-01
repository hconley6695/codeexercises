<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>
	<div class="body-wrapper">
		<button class="btn">Click Here for a Pop-up</button>
		<div class="popup-wrapper">
			<div class="title">Help Us Get to Know You!</div>
			<form name="sample-form" class="sample-form" action="form-result.php" method="post"> 
				<div>
					<span class="error">This field is required.</span>
					<input type="text" name="name" placeholder="Full Name">
				</div>
				<div>
					<span class="error">This field is required.</span>
					<input type="email" name="email" placeholder="Email">
				</div>
				<div>
					<span class="error">This field is required.</span>
					<input type="tel" name="phone" placeholder="Phone">
				</div>
				<div class="select-group">
					<span class="error">This field is required.</span>
					<select name="animal">
						<option value="animal" default>Choose your favorite animal.</option>
						<option value="dog">Dog</option>
						<option value="cat">Cat</option>
						<option value="horse">Horse</option>
						<option value="turtle">Turtle</option>
						<option value="fish">Fish</option>
					</select>
				</div>


				<div>
					<p>Which color do you prefer?</p>
					<span class="error">This field is required.</span>
					<label for="red">red</label>
					<input type="radio" name="color" value="red" id="red">
					<label for="yellow">yellow</label>
					<input type="radio" name="color" value="yellow" id="yellow">
					<label for="blue">blue</label>
					<input type="radio" name="color" value="blue" id="blue">
					<label for="green">green</label>
					<input type="radio" name="color" value="green" id="green">

				</div>

				<div>
					<p>When is your birthday?</p>
					<span class="error">This field is required.</span>
					<input type="date" name="birthday" id="birthday">
				</div>

				<div>
					<p>What music genres do you like?  Check all that apply.</p>
					<span class="error">Please check at least one type of music.</span>
					<input type="checkbox" name="classical" id="classical">
					<label for="classical">Classical</label>

					<input type="checkbox" name="classicrock" id="classicrock">
					<label for="classicrock">Classic Rock</label>

					<input type="checkbox" name="alternative" id="alternative">
					<label for="alternative">Alternative Rock</label>

					<input type="checkbox" name="country" id="country">
					<label for="country">Country</label>

					<input type="checkbox" name="hiphop" id="hiphop">
					<label for="hiphop">Hip Hop</label>

				</div>

				<button class="popup-btn">Submit</button>
			</form>
		</div>
	</div>

<script type="text/javascript">
	
	jQuery(document).ready(function() {

		// jQuery("div.popup-wrapper").css("display", "none");

		jQuery("#birthday").datepicker({
			changeMonth: true,
		    changeYear: true,
		    yearRange: "1920:2019"
		});


	});
</script>

</body>
</html>