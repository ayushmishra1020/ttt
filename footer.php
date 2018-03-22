	<!-- bootstrap-pop-up -->


<!-- //bootstrap-pop-up -->
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				
				<div class="col-md-6 col-sm-6 footer-wthree-grid">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-menu-right"></span> Home</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> About</a></li> 
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Gallery</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Short Codes</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Contact</a></li>
					</ul>
				</div> 	 
				<div class="col-md-6 col-sm-6 footer-wthree-grid">
					<h3>Contact Info</h3>
					<ul>

						<li>Near Saki Naka Telephone Exchange</li> 
						<li>Sakinaka, Andheri East</li>
						<li> Mumbai, Maharashtra 400072. INDIA</li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>		
			</div>
			<div class="copy-right"> 
				<p>© 2018 ttt. All rights reserved | Design by ttt</p>
			</div>
		</div>
	</div> 
	<!-- //footer end here -->   
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script --> 
<!-- Flexslider-js for-testimonials -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:1,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //Flexslider-js for-testimonials -->


	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling   -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
	
</body>
</html>

