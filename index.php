<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="body-wrapper">
		<button class="btn">Click Here for a Pop-up</button>
		<div class="popup-wrapper">
			<div class="title">Help Us Get to Know You!</div>
			<form name="sample-form" class="sample-form"> 
				<div>
					<span class="error">This field is required.</span>
					<input type="text" name="full-name" placeholder="Full Name">
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
					<span>This field is required.</span>
					<select>
						<option value="animal" default>Choose your favorite animal.</option>
						<option value="dog">Dog</option>
						<option value="cat">Cat</option>
						<option value="horse">Horse</option>
						<option value="turtle">Turtle</option>
						<option vaue="fish">Fish</option>
					</select>
				</div>
				<button class="popup-btn">Submit</button>
			</form>
		</div>
	</div>

<script type="text/javascript">
	
	jQuery(document).ready(function() {

		// jQuery("div.popup-wrapper").css("display", "none");


	});
</script>

</body>
</html>