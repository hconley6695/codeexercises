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
		<div id="popup-wrapper-bkgrd">
			
			<div class="popup-wrapper">
				<div id="exit">x</div>
				<div class="title">Help Us Get to Know You!</div>
				<form name="sample-form" class="sample-form" action="form-result.php" method="post"> 
					<div>
						<span class="error">This field is required.</span>
						<input type="text" name="name" placeholder="Full Name" id="name">
					</div>
					<div>
						<span class="error">This field is required.</span>
						<input type="email" name="email" placeholder="Email" id="name">
					</div>
					<div>
						<span class="error">This field is required.</span>
						<input type="tel" name="phone" placeholder="Phone" id="phone">
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
						<input type="checkbox" name="music" id="classical" value="classical">
						<label for="classical">Classical</label>

						<input type="checkbox" name="music" id="classicrock" value="classic rock">
						<label for="classicrock">Classic Rock</label>

						<input type="checkbox" name="music" id="alternative" value="alternative">
						<label for="alternative">Alternative Rock</label>

						<input type="checkbox" name="music" id="country" value="country">
						<label for="country">Country</label>

						<input type="checkbox" name="music" id="hiphop" value="hip hop">
						<label for="hiphop">Hip Hop</label>

					</div>

					<button class="popup-btn">Submit</button>
				</form>
			</div>

		</div>

	</div>

<script type="text/javascript">
	
	jQuery(document).ready(function() {


		jQuery("#birthday").datepicker({
			changeMonth: true,
		    changeYear: true,
		    yearRange: "1920:2019"
		});

		jQuery("div.body-wrapper .btn").on("click", function(e) {
			e.preventDefault();

			jQuery("#popup-wrapper-bkgrd").fadeIn("slow", function() {

				jQuery("#popup-wrapper-bkgrd").css("display", "block");
				jQuery("body").addClass("pointer");

			});
		});

		jQuery("#exit").on("click", function() {

			jQuery("#popup-wrapper-bkgrd").fadeOut("slow", function() {
				jQuery("#popup-wrapper-bkgrd").css("display", "none");
				jQuery("body").removeClass("pointer");
			});
			
		});

        function isValidEmail(emailaddress){
            var pattern = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+[^<>()\.,;:\s@\"]{2,})$/;
            // console.log("inside valid");
            return pattern.test(emailaddress);
        };

        function isValidPhone(phoneNum) {
            var pattern1 = /^\d{10}$/;
            var pattern2 = /^(\([0-9]{3}\)\s*|[0-9]{3}\-)[0-9]{3}-[0-9]{4}$/;
            return (pattern1.test(phoneNum) || pattern2.test(phoneNum));
        }

        jQuery("form.sample-form button.popup-btn").on("click", function(e) {
        	e.preventDefault();

        	var name = jQuery("form.sample-form #name").val();
        	var email = jQuery("form.sample-form #email").val();
        	var phone = jQuery("form.sample-form #phone").val();
        	var animal = jQuery("select[name=animal]").find(":selected").val();
        	var color = jQuery("input[type=radio]:checked").val();

        	//checkbox
        	//date
        	var passedValidation = true;


        	if(jQuery("form.sample-form #name").length >= 1) {
                if(name == '') {
                  passedValidation = false;
                  jQuery("form.sample-form #name").siblings("span.error").css("display", "inline-block");
                } else {
                  jQuery("form.sample-form #name").siblings("span.error").css("display", "none");
                }
            }

            if(jQuery("form.sample-form #email").length >= 1) {

                if(email == '') {
                  	passedValidation = false;
                   	jQuery("form.sample-form #email").siblings("span.error").css("display", "inline-block");
                }
                if (!isValidEmail(email)) {
                  	passedValidation = false;
                   	jQuery("form.sample-form #email").siblings("span.error").css("display", "inline-block");
                } else {
                  	jQuery("form.sample-form #email").siblings("span.error").css("display", "none");
                }

            }


            if(jQuery(".secondary-opt-in-form form #inf_field_Phone1").length >= 1) {
                if(phone == '') {
                  passedValidation = false;
                  jQuery(".secondary-opt-in-form form #inf_field_Phone1").siblings("span.error-div").css("display", "inline-block");
                }
                if(!isValidPhone(phone)){
                  passedValidation = false;
                  jQuery(".secondary-opt-in-form form #inf_field_Phone1").siblings("span.error-div").css("display", "inline-block");
                } else {
                  jQuery(".secondary-opt-in-form form #inf_field_Phone1").siblings("span.error-div").css("display", "none");
                }
            }

            
            var isChecked = jQuery("input[type=radio]").is(":checked");

            if(!isChecked) {
            	passedValidation = false;
                jQuery("form.sample-form input[type=radio]").siblings("span.error").css("display", "block");
            } else {
                jQuery("form.sample-form input[type=radio]").siblings("span.error").css("display", "none");
            }


            var favorites = [];

            jQuery.each(jQuery("input[name='music']:checked"), function(){            
                favorites.push(jQuery(this).val());
            });

            if (favorites.length === 0) {
            	passedValidation = false;
                jQuery("form.sample-form input[type=checkbox]").siblings("span.error").css("display", "block");
            } else {
                jQuery("form.sample-form input[type=checkbox]").siblings("span.error").css("display", "none");
            }



            if(passedValidation == true) {
            	jQuery("form.sample-form").submit()
            } else {
            	e.preventDefault();
            	// jQuery("body").scrollTo("#popup-wrapper-bkgrd");
            }

        });

	});
</script>

</body>
</html>