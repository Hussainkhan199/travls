<?php
require_once 'head.php';
session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone  = $_POST['phone'];
	$address = $_POST['address'];
	$arrival = $_POST['arrival'];
	$desti = $_POST['desti'];
	$family  = $_POST['family'];
	$child = $_POST['child'];
	$adult = $_POST['adult'];
	$from_date = $_POST['from'];
	$to_date = $_POST['to'];

	$sql = "INSERT INTO `tickets`(`Name`, `Email`, `Phone_Number`, `Address`, `Arriva`, `Destination`, `family`, `children`, `Adults`, `from_date`, `to_date`) VALUES ('$name','$email','$phone','$address','$arrival','$desti','$family','$child','$adult','$from_date','$to_date')";

	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo "inserted";
		echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
		echo "<script>
Swal.fire({
title: 'Success',
text: 'Flight information added successfully',
icon: 'success',
showConfirmButton: false,
timerProgressBar: true,
timer: 4000,
onBeforeOpen: () => {
Swal.showLoading();
}
}).then(function() {
window.location.href = 'index.php';
});
</script>";
	} else {
		echo "not inserted";
	}
}
?>



<style>
	label {
		padding-left: 50px;
	}

	/* #nextBtn {
		text-align: right;

	} */
	.form-control:hover,
    .form-control:focus,
	.form-control:active
	 {
      border: #df9023  solid 0.2px; /* Set your desired border color or remove it entirely */
      box-shadow: none; /* Remove the box shadow */
    }
</style>

<body>


	<!-- main-menu Start -->
	<header class="top-area">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="index.html">
								<img src="assets/logo/logo.png" alt="logo" width="100" />
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="smooth-menu"><a href="#home">home</a></li>
									<li class="smooth-menu"><a href="#blog">About Us</a></li>
									<li class="smooth-menu"><a href="#gallery">Destination</a></li>
									<li class="smooth-menu"><a href="#pack">Packages </a></li>
									<li class="smooth-menu"><a href="#spo">Special Offers</a></li>
									<li class="smooth-menu"><a href="#subs">Contact Us</a></li>
									<li>
										<a href="#book"> Book now</a>
									</li><!--/.project-btn-->
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->

	</header><!-- /.top-area-->
	<!-- main-menu End -->


	<!--about-us start -->
	<section id="home" class="about-us">
		<div class="container">
			<div class="about-us-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="single-about-us">
							<div class="about-us-txt">
								<h2>
									Explore the Beauty of the <span style="color: #df9023;"> Beautiful World </span>

								</h2>
								<div class="about-btn">
									<button class="about-view">
										explore now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.about-us-txt-->
						</div><!--/.single-about-us-->
					</div><!--/.col-->
					<div class="col-sm-0">
						<div class="single-about-us">

						</div><!--/.single-about-us-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.about-us-content-->
		</div><!--/.container-->

	</section><!--/.about-us-->
	<!--about-us end -->

	<!--travel-box start-->
	<section class="travel-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-travel-boxes">
						<div id="desc-tabs" class="desc-tabs">

							<ul class="nav nav-tabs" role="tablist">

								<!-- <li role="presentation" >
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		tours
									 	</a>
									</li>

									<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-building"></i>
											hotels
										</a>
									</li> -->

								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab" id="book">
										<i class="fa fa-plane"></i>
										flights
									</a>
								</li>
							</ul>



							<!-- -----------------------------------fligts from      -------------------------------------------                      -->

							<div role="tabpanel" class="tab-pane active fade in" id="flights">
								<div class="tab-para">
									<form action="" method="post" class="form-inline">
										<div id="step1" class="form-group">


											<h3>Step 1: Personal Information</h3>
											<div class="step_1">
												<!-- <label for="from">Arrival</label>
												<input type="from" class="form-control"  name="from" id="from">
												<input type="text" id="from" class="form-control" name="arrival" required> -->
												<label for="myOption">Choose an option:</label>
													<select id="from" name="arrival">
													<option value="option1">Option 1</option>
													<option value="option2">Option 2</option>
													<option value="option3">Option 3</option>
													</select>

												<label for="to">Select an option:</label>
														<select id="to" name="desti">	
													<option value="">asd</option>
													<option value="Khan">Khan</option>
													<option value="Qwertt">Qwertt</option>
													<option value="ytrewq">ytrewq</option>
												</select>
												<br/>
												<label for="family">Total Number of Family</label>
												<input type="number" id="family" class="form-control" name="family" required>

												<label for="children">Number of Children</label>
												<input type="number" id="children" class="form-control" name="child" required>
												<br/>
												<label for="adults">Number of Adults</label>
												<input type="number" id="adults" class="form-control" name="adult" required>

												<label for="from">From date:</label>
												<input type="date" class="form-control" name="from" id="fromdate">
												<label for="to">To date:</label>
												<input type="date" class="form-control" name="to" id="todate"> 
												<!-- <div class="invisible">
													<label for="from">From date:</label>
													<input type="text" class="form-control" name="from" id="fromdate1">
													<label for="to">To date:</label>
													<input type="text" class="form-control" name="to" id="todate1">
												</div> -->
												
												<div class="btn">
													<button type="button" id="nextBtn1" class="btn btn-primary">Next</button>
												</div>
											</div>

										</div>
										<!-- Step 2: Travel Details -->
										<div id="step2" class="form-group" style="display: none;">
											<h3>Step 2: Travel Details</h3>
											<div class="step_1">
												
											<label for="name">Name</label>
												<input type="text" id="name" class="form-control" name="name" required>

												<label for="email">Email</label>
												<input type="email" id="email" class="form-control" name="email" required>

												<label for="phone">Phone Number</label>
												<input type="text" id="phone" class="form-control" name="phone">
												<br />
												<label for="address" style="padding-top: 20px;">Address</label>
												<input type="text" id="address" class="form-control" name="address" required>
												<br />
												<div class="btn mb-5">
													<button type="button" id="prevBtn2" class="btn btn-secondary">Previous</button>
													<button type="button" id="nextBtn2" class="btn btn-primary" style="margin-right:10px;">Next</button>
												</div>
											</div>
										</div>

										<!-- Step 3: Confirmation -->
										<div id="step3" class="form-group" style="display: none;">
											<h3>Step 3: Confirmation</h3>
											<div id="confirmation"></div>


											<div class="abc" style=" float: right;">

												<button type="button" id="prevBtn3" class="btn btn-secondary">Previous</button>
												<button type="submit" class="btn btn-primary" name="submit" style="background-color : #df9023;">Confirm</button>
											</div>
										</div>
									</form>
								</div>

							</div>


						</div>

					</div><!--/.tabpannel-->

				</div><!--/.tab content-->
			</div><!--/.desc-tabs-->
		</div><!--/.single-travel-box-->
		</div><!--/.col-->
		</div><!--/.row-->
		</div><!--/.container-->

	</section><!--/.travel-box-->
	<!--travel-box end-->

	<!--service start-->
	<section id="service" class="service">
		<div class="container">

			<div class="service-counter text-center">

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/travel-luggage.png" alt="service-icon" width="100" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
									amazing tour packages
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="service-img">
							<img src="assets/images/hotel.png" alt="service-icon" width="100" />
						</div><!--/.service-img-->
						<div class="service-content">
							<h2>
								<a href="#">
									book top class hotel
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

				<div class="col-md-4 col-sm-4">
					<div class="single-service-box">
						<div class="statistics-img">
							<img src="assets/images/direct-flight.png" alt="service-icon" width="100d" />
						</div><!--/.service-img-->
						<div class="service-content">

							<h2>
								<a href="#">
									online flight booking
								</a>
							</h2>
							<p>Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.</p>
						</div><!--/.service-content-->
					</div><!--/.single-service-box-->
				</div><!--/.col-->

			</div><!--/.statistics-counter-->
		</div><!--/.container-->

	</section><!--/.service-->
	<!--service end-->

	<!--galley start-->
	<section id="gallery" class="gallery">
		<div class="container">
			<div class="gallery-details">
				<div class="gallary-header text-center">
					<h2>
						top destination
					</h2>
					<p>
						Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
					</p>
				</div><!--/.gallery-header-->
				<div class="gallery-box">
					<div class="gallery-content">
						<div class="filtr-container">
							<div class="row">

								<div class="col-md-6">
									<div class="filtr-item">
										<img src="assets/images/china_.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												china
											</a>
											<p><span>20 tours</span><span>15 places</span></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-6">
									<div class="filtr-item">
										<img src="assets/images/Venuzuala.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												venuzuala
											</a>
											<p><span>12 tours</span><span>9 places</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="assets/images/brazil_1.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												brazil
											</a>
											<p><span>25 tours</span><span>10 places</span></p>
										</div><!-- /.item-title -->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="assets/images/aust.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												australia
											</a>
											<p><span>18 tours</span><span>9 places</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-4">
									<div class="filtr-item">
										<img src="assets/images/nether.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												netharland
											</a>
											<p><span>14 tours</span><span>12 places</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

								<div class="col-md-8">
									<div class="filtr-item">
										<img src="assets/images/tur.jpg" alt="portfolio image" />
										<div class="item-title">
											<a href="#">
												turkey
											</a>
											<p><span>14 tours</span><span>6 places</span></p>
										</div> <!-- /.item-title-->
									</div><!-- /.filtr-item -->
								</div><!-- /.col -->

							</div><!-- /.row -->

						</div><!-- /.filtr-container-->
					</div><!-- /.gallery-content -->
				</div><!--/.galley-box-->
			</div><!--/.gallery-details-->
		</div><!--/.container-->

	</section><!--/.gallery-->
	<!--gallery end-->



	<!--packages start-->
	<section id="pack" class="packages">
		<div class="container">
			<div class="gallary-header text-center">
				<h2>
					special packages
				</h2>
				<p>
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/italy.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>italy <span class="pull-right">$499</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/england.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>england <span class="pull-right">$1499</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/france.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>france <span class="pull-right">$1199</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/india.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>india <span class="pull-right">$799</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/spai.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>spain <span class="pull-right">$999</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/tau.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>thailand <span class="pull-right">$799</span></h3>
								<div class="packages-para">
									<p>
										<span>
											<i class="fa fa-angle-right"></i> 5 daays 6 nights
										</span>
										<i class="fa fa-angle-right"></i> 5 star accomodation
									</p>
									<p>
										<span>
											<i class="fa fa-angle-right"></i> transportation
										</span>
										<i class="fa fa-angle-right"></i> food facilities
									</p>
								</div><!--/.packages-para-->
								<div class="packages-review">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span>2544 review</span>
									</p>
								</div><!--/.packages-review-->
								<div class="about-btn">
									<button class="about-view packages-btn">
										book now
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

				</div><!--/.row-->
			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section><!--/.packages-->
	<!--packages end-->

	<!-- testemonial Start -->
	<section class="testemonial">
		<div class="container">

			<div class="gallary-header text-center">
				<h2>
					clients reviews
				</h2>
				<p>
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>

			</div><!--/.gallery-header-->

			<div class="owl-carousel owl-theme" id="testemonial-carousel">

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img">
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

				<div class="home1-testm item">
					<div class="home1-testm-single text-center">
						<div class="home1-testm-img">
							<img src="assets/images/men.png" alt="img" />
						</div><!--/.home1-testm-img-->
						<div class="home1-testm-txt">
							<span class="icon section-icon">
								<i class="fa fa-quote-left" aria-hidden="true"></i>
							</span>
							<p>
								Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
							</p>
							<h3>
								<a href="#">
									kevin watson
								</a>
							</h3>
							<h4>london, england</h4>
						</div><!--/.home1-testm-txt-->
					</div><!--/.home1-testm-single-->

				</div><!--/.item-->

			</div><!--/.testemonial-carousel-->
		</div><!--/.container-->
		

	</section><!--/.testimonial-->
	<!-- testemonial End -->


	<!--special-offer start-->


<section class="form">
<div class="container">
    <div class="row">
      <div class="col-md-6 info">
        <h2>Company Information</h2>
        <p>Address: 123 Main St, City, State</p>
        <p>Phone: 555-123-4567</p>
        <p>Email: info@example.com</p>
      </div>
      <div class="col-md-6" style="padding-left:80px;padding-right:20px">
        <h2>Contact Us</h2>
		<div class="contact_from">

			<form>
				<div class="form-group">
					<!-- <label for="name">Name:</label> -->
					<input type="text" class="form-control" id="name" placeholder="Enter your name" style="width: 100%; height:45px; box-shadow:none">
				</div>
				<div class="form-group">
					<!-- <label for="email">Email:</label> -->
					<input type="email" class="form-control" id="email" placeholder="Enter your email" style="width: 100%;height:45px;box-shadow:none">
				</div>
				<div class="form-group">
					<!-- <label for="message">Message:</label> -->
					<textarea class="form-control" id="message" placeholder="Enter your message" style="width: 100%;height:100px;box-shadow:none"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" style="background-color: #df9023;">Submit</button>
			</form>
		</div>
	</div>
    </div>
  </div>
</section>



	<!--subscribe start-->

  
  
	<!--subscribe end-->

	<!-- footer-copyright start -->
	<footer class="footer-20192">
      <div class="site-section">
        <div class="container">

          <div class="cta d-block d-md-flex align-items-center px-5">
            <div>
              <h2 class="mb-0">Existed to see world with Us?</h2>
              <h3 class="text-dark">Let's get started!</h3>
            </div>
            
          </div>
          <div class="row" >

            <div class="col-sm">
              <a href="#" class="footer-logo"><span style="color: #000;">ZIS</span>Travels</a>
             
            </div>
            
            <div class="col-sm">
              <h3>Site map</h3>
              <ul class="list-unstyled links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About us</a></li>
				<li><a href="#pack">Packages</a></li>
                <li><a href="#package">Contact us</a></li>
				<li><a href="#book">Book Now</a></li>
              </ul>
            </div>
            <div class="col-sm">
              <h3>Further Information</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Follow us</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
               
              </ul>
            </div>
            
          </div>
        </div>
      </div>
	  <hr width="80%" style="margin-left:150px">
	  <p style="color: #fff; text-align:center">© 2023 zistravels.co.uk</p>
    </footer>
	<!-- footer-copyright end -->

	


	<!-- <script src="asset/js/form.js"></script>	 -->

	<script src="https://kit.fontawesome.com/5283ea73ed.js" crossorigin="anonymous"></script>

	<script src="assets/js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


	<!--bootstrap.min.js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!-- jquery.filterizr.min.js -->
	<script src="assets/js/jquery.filterizr.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--jquery-ui.min.js-->
	<script src="assets/js/jquery-ui.min.js"></script>



	<!--owl.carousel.js-->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- jquery.sticky.js -->
	<script src="assets/js/jquery.sticky.js"></script>

	<!--datepicker.js-->
	<script src="assets/js/datepicker.js"></script>

	<!--Custom JS-->
	<script src="assets/js/custom.js"></script>
	<script>
		$(document).ready(function() {
			var currentStep = 1;

			$("#nextBtn1").click(function() {
				// Move to next step
				$("#step1").hide();
				$("#step2").show();
				currentStep = 2;
			});

			$("#nextBtn2").click(function() {
				// Move to next step
				$("#step2").hide();
				$("#step3").show();
				currentStep = 3;

				// Display confirmation details
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var address = $("#address").val();
				var from = $("#from").val();
				var to = $("#to").val();
				var family = $("#family").val();
				var children = $("#children").val();
				var adults = $("#adults").val();
				var fromdate = $("#fromdate").val();
				var todate = $("#todate").val();



				var confirmationHtml = `
			<div class = "para" id = "para" >
				<div style="display:flex; gap:5rem">
						<div class = "first_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Name:</b>${name}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Email:</b> ${email}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Phone Number:</b> ${phone}</p>
						</div>
					
						<div class = "second_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Address:</b> ${address}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Arrival:</b> ${from}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Destinatio :</b> ${to}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Total Number of Family:</b> ${family}</p>
						</div>
						<div class = "third_info">
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Number of Children:</b> ${children}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">Number of Adults:</b> ${adults}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">From date:</b> ${fromdate}</p>
							<p style="font-size : 15px;margin-top:10px"><b style="padding-right:10px">To date: </b>${todate}</p>
						</div>
				</div>
			</div>

        `;

				$("#confirmation").html(confirmationHtml);
			});

			$("#prevBtn2").click(function() {
				// Move to previous step
				$("#step2").hide();
				$("#step1").show();
				currentStep = 1;
			});

			$("#prevBtn3").click(function() {
				// Move to previous step
				$("#step3").hide();
				$("#step2").show();
				currentStep = 2;
			});

			$("#multiStepForm").submit(function(e) {
				e.preventDefault();

				// Submit the form
				// ...

				// Reset the form
				$("#multiStepForm")[0].reset();
				currentStep = 1;
				$("#step3").hide();
				$("#step1").show();
			});
		});
		document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });




	</script>

	<style>
		.btn {
			margin-left: 3px;
			padding-bottom: 4px !important;
		}
	</style>
</body>

</html>