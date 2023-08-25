<?php 
    ob_start();
    require_once "./config/config.php";
    
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone  = $_POST['number'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $de_time = $_POST['de_time'];
            $re_time  = $_POST['re_time'];
            $child = $_POST['child'];
            $adult = $_POST['adult'];
            $text = $_POST['text'];

            $sql = "INSERT INTO `hotel`(`name`, `email`, `phone`, `city`, `country`, `de_time`, `re_time`, `child`, `adult`, `text`) 
            VALUES ('$name','$email','$phone','$city','$country','$de_time','$re_time','$child','$adult','$text')";

            $res = mysqli_query($conn,$sql);

            if(!$res)
            {   
                echo "<script>alert('Data Not Inserted')</script>";
                
                // header('location : reservation_form.php');
                // exit;
                
                
            }else
            {
                echo "<script>alert('Data Inserted Successfully')</script>";
                // header("Location: index.php");
                
            }   
    
    }
    ob_end_flush();

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./assets/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="./assets/css/res.css" />

	

</head>

<body>
	<div id="booking" class="section" style="margin-top: 200px;">
		<div class="section-center">
			<div class="container" >
				<div class="row">
					<div class="booking-form" style="margin-top:150px"> 
						<form method="post">
                                <div class="form-group">
                                    <input type="radio" id="d" name="d" value="d">
                                    <label for="d"> Domestic</label>
                                    <input type="radio" id="I" name="i" value="i">
                                    <label for="i"> International</label>
                                </div>
                        
							
							<div class="row" >
                            <div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Full Name</span>
										<input class="form-control" type="text"  style=" width :300px" id="name" name="name">
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="Email"   style=" width :300px" name="email" id="Email">
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Phone number </span>
										<input class="form-control" type="tel"   style=" width :300px" name="number" id="number">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">City You Like To Visit</span>
										<input class="form-control" type="text"  name="city" style=" width :300px">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">Country</span>
										<input class="form-control" type="text" name="country" style=" width :300px">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" name="de_time" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Returning</span>
										<input class="form-control" type="date" name="re_time" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										
				                        <input type="number" id="adults" class="form-control" name="adult" required min="0" style=" width :100px">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<input type="number" id="children" class="form-control" name="child" required min="0"  style=" width :100px">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Extra things You Like to Add</span>
										<textarea name="text" id="text" cols="80" rows="10" ></textarea>
										<span class="select-arrow"></span>
									</div>
								</div>
                                <div class="col-md-5">
                                </div>
								
							</div>
                            <div class="row">
                            <div class="col-md-3">
									<div class="form-btn">
                                    <button type="submit" class="btn btn-primary" name="submit" style="background-color : #df9023;">Confirm</button>
									</div>
								</div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>