<?php
    require "./config/config.php";
    include "head.php";
  
?>



<body>
<?php  include "nav.php" ?>


<section  class="contact">
		<div class="container">
			<div class="contact-content">
				<div class="row">
                    <div class="col-sm-12">
						<div class="contact-hero">
                            <div class="contact-txt" style="margin-top:50px;">
								<h2 style="font-size:60px;">
									Contact Us    
								</h2>	
							</div><!--/.about-us-txt-->
						</div><!--/.single-about-us-->
					</div><!--/.col-->
                </div>
            </div>
        </div>
    </section>     

<section style="padding-top: 150px;">
<?php
 include "form.php";
?>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.788966147926!2d73.0603827749091!3d33.636713439558584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df950ec9369ef9%3A0xb251ef183a10a463!2sZiscomm!5e0!3m2!1sen!2s!4v1694270978665!5m2!1sen!2s" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>
<?php
 include "footer.php";
?>

