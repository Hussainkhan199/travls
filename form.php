<?php
    
    require_once 'head.php';

if (isset($_POST['submit'])) {	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);		
	if(mysqli_query($conn, "INSERT INTO user(email, pass, first_name, last_name, mobile, address) 
VALUES('".$email."', '" . $password . "', '". $first_name."', '".$last_name."', '".$mobile."', '". $address."')")) {
		echo "You're Registered Successfully!";
	} else {
		echo "Error in registering...Please try again later!";
	}
}	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
  #register_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>
</head>
<body>

<div class="container">
	<h2>Example: Multi Step Form using jQuery, Bootstrap and PHP</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
	<form id="register_form" novalidate action="form_action.php"  method="post">	
	<fieldset>
	<h2>Step 1: Add Account Details</h2>
	<div class="form-group">
	<label for="email">Email address*</label>
	<input type="email" class="form-control" required id="email" name="email" placeholder="Email">
	</div>
	<div class="form-group">
	<label for="password">Password*</label>
	<input type="password" class="form-control" name="password" id="password" placeholder="Password">
	</div>
	<input type="button" class="next-form btn btn-info" value="Next" />
	</fieldset>	
	<fieldset>
	<h2> Step 2: Add Personal Details</h2>
	<div class="form-group">
	<label for="first_name">First Name</label>
	<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
	</div>
	<div class="form-group">
	<label for="last_name">Last Name</label>
	<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
	</div>
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="button" name="next" class="next-form btn btn-info" value="Next" />
	</fieldset>	
	<fieldset>
	<h2>Step 3: Add Contact Information</h2>
	<div class="form-group">
	<label for="mobile">Mobile*</label>
	<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
	</div>
	<div class="form-group">
	<label for="address">Address</label>
	<textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
	</div>
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	</fieldset>
	</form>
</div>		



<script>
    $(document).ready(function(){  
  var form_count = 1, previous_form, next_form, total_forms;
  total_forms = $("fieldset").length;  
  $(".next-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(++form_count);
  });  
  $(".previous-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(--form_count);
  });
  setProgressBarValue(form_count);  
  function setProgressBarValue(value){
    var percent = parseFloat(100 / total_forms) * value;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  } 
  // Handle form submit and validation
  $( "#register_form" ).submit(function(event) {    
	var error_message = '';
	if(!$("#email").val()) {
		error_message+="Please Fill Email Address";
	}
	if(!$("#password").val()) {
		error_message+="<br>Please Fill Password";
	}
	if(!$("#mobile").val()) {
		error_message+="<br>Please Fill Mobile Number";
	}
	// Display error if any else submit form
	if(error_message) {
		$('.alert-success').removeClass('hide').html(error_message);
		return false;
	} else {
		return true;	
	}    
  });  
});
</script>
    
</body>
</html>l