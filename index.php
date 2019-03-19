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
						<select name="animal" id="original">
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
						<input type="text" name="birthday" id="birthday" placeholder="date of birth">
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

    jQuery("select#original").css("display", "none");

		var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "select-group": */
// x = document.getElementsByClassName("select-group");
x = jQuery(".select-group");

for (i = 0; i < x.length; i++) {
  // selElmnt = x[i].getElementsByTagName("select")[0];
  selElmnt = jQuery(x[i]).find("select#original")[0];
  // console.log(selElmnt);

  /* For each element, create a new DIV that will act as the selected item: */
  // a = document.createElement("DIV");
  // a.setAttribute("class", "selected");
  // a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  // aDiv = document.createElement("DIV");
  aDiv = jQuery("<div>").attr("class", "selected").html(selElmnt.options[selElmnt.selectedIndex])[0];
  // console.log(aDiv[0]);
  // jQuery(aDiv).attr("class", "selected");
  // aDiv.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].append(aDiv);
  // console.log(aDiv);

  /* For each element, create a new DIV that will contain the option list: */
  bDiv = jQuery("div").attr("class", "select-items select-hide")[0];
 console.log(bDiv);
  // jQuery(bDiv).attr("class", "select-items select-hide");


  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    cDiv = document.createElement("DIV");
    cDiv.innerHTML = selElmnt.options[j].innerHTML;
    jQuery(cDiv).on("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    bDiv.append(cDiv);
  }
  x[i].append(bDiv);
  
  jQuery(aDiv).on("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
jQuery(document).on("click", closeAllSelect);



		jQuery("#birthday").datepicker({
			changeMonth: true,
		    changeYear: true,
		    yearRange: "1920:2019",
		    dateFormat: "MM dd, yy",
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


		jQuery('body').on('click', function(e) {
			if(jQuery(e.target).has('.popup-wrapper').length) {
				jQuery("#popup-wrapper-bkgrd").fadeOut("slow", function() {
					jQuery("#popup-wrapper-bkgrd").css("display", "none");
					jQuery("body").removeClass("pointer");
				});
			}
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
        	var bday = jQuery("input#birthday").val();
        	console.log(animal);
        	console.log(phone);
        	//checkbox
        	//date
        	var passedValidation = true;

	        
	        if(jQuery("form.sample-form select[name=animal]").length >= 1) {
	        	if (animal == '') {
	        		passedValidation = false;
	                  jQuery("form.sample-form select[name=animal]").siblings("span.error").css("display", "block");
	        	}

	        	if (animal == "animal") {
	        		passedValidation = false;
	                jQuery("form.sample-form select[name=animal]").siblings("span.error").css("display", "block");
	        	} else {
		            jQuery("form.sample-form select[name=animal]").siblings("span.error").css("display", "none");

	        	}

			}

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


            if(jQuery("form.sample-form #phone").length >= 1) {
                if(phone == '') {
                  passedValidation = false;
                  jQuery("form.sample-form #phone").siblings("span.error").css("display", "inline-block");
                }
                if(!isValidPhone(phone)){
                  passedValidation = false;
                  jQuery("form.sample-form #phone").siblings("span.error").css("display", "inline-block");
                } else {
                  jQuery("form.sample-form #phone").siblings("span.error").css("display", "none");
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


			if(jQuery("form.sample-form #birthay").length >= 0) {
	            if(bday == '') {
	            	passedValidation = false;
	                jQuery("form.sample-form #birthday").siblings("span.error").css("display", "block");
	            } else {
	                jQuery("form.sample-form #birthday").siblings("span.error").css("display", "none");
	            }
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