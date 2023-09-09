<?php
    require "./config/config.php";
    include "head.php";
  
?>



<body>
<?php  include "nav.php" ?>


    
    <section  class="image">
		<div class="container">z\
			<div class="image-content">
				<div class="row">
                    <div class="col-sm-12">
						<div class="single-image">
                            <div class="image-txt" style="margin-top:50px;">
								<h2 style="font-size:60px;">
									The Tourism Page
                                    
								</h2>
								
							</div><!--/.about-us-txt-->
						</div><!--/.single-about-us-->
					</div><!--/.col-->
                </div>
            </div>
        </div>
    </section>     
	<section class="second">
		<div class="vector">
		<object data="./assets/svgs/Backpackers-amico.svg" width="500" height="500"> </object>
		</div>
		<div class="text">
			<h2>
				We provide <span class="mid">  Domestic </span> <br/>and <span class="mid">  International </span> Tourism
			</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br/> Magnam quasi qui beatae facilis voluptatum voluptate architecto eos <br/> cum libero sit aperiam, nihil autem molestiae quos! Cupiditate <br/> similique atque in laudantium.</p>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br/> Magnam quasi qui beatae facilis voluptatum voluptate architecto eos <br/> cum libero sit aperiam, nihil autem molestiae quos! Cupiditate <br/> similique atque in laudantium.</p>
		</div>	
	</section>
	<section id="domestic" class="domestic">
		<div class="container">
			<div class="gallary-header text-center">
				<h2>
				Demotic locations
				</h2>
				<p>
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/swat.jpeg" alt="package-place">
							<div class="single-package-item-txt">
								<h3> SWAT VALLEY <span class="pull-right">$499</span></h3>
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
										Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/kaghan.jpeg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>HUNZA VALLEY <span class="pull-right">$1499</span></h3>
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
									Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/lahore.jpeg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>lahore <span class="pull-right">$1199</span></h3>
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
										Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

				
				</div><!--/.row-->
			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section><!--/.packages-->
	<div class="extra">
		<h2 style="padding-bottom: 120px;">Customize Your <span > Plan</span>  Here</h2>
		<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br/> Quisquam, voluptatum. Quisquam, voluptatum.</p> -->
		<?php
				include "./reservation_form.php";
		?>
							
	</div>
	<!--packages end-->
	<section id="international" class="international">
		<div class="container">
			<div class="gallary-header text-center">
				<h2>
				international locations
				</h2>
				<p>
					Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
				</p>
			</div><!--/.gallery-header-->
			<div class="packages-content">
				<div class="row">

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/dubai.jpeg" alt="package-place">
							<div class="single-package-item-txt">
								<h3> Dubia <span class="pull-right">$499</span></h3>
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
										Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/turkey.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>Turkey <span class="pull-right">$1499</span></h3>
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
										Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->

					<div class="col-md-4 col-sm-6">
						<div class="single-package-item">
							<img src="assets/images/england.jpg" alt="package-place">
							<div class="single-package-item-txt">
								<h3>England <span class="pull-right">$1199</span></h3>
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
										Get Qoute
									</button>
								</div><!--/.about-btn-->
							</div><!--/.single-package-item-txt-->
						</div><!--/.single-package-item-->

					</div><!--/.col-->
 
				
				</div><!--/.row-->
			</div><!--/.packages-content-->
		</div><!--/.container-->

	</section>

	</section>
	<?php
		include "footer.php";
	?>
</body>