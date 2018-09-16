	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<h6>Pages</h6>
					<hr>
					<ul class="font-14">
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">Home</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">About</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">Participants</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">Exhibition Program</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">Media</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<h6>Important Links</h6>
					<hr>
					<ul class="font-14">
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="www.rtcamp.com">www.rtcamp.com</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">www.devilsworkshop.org</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">www.rtpanel.com</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">www.bloggertowp.com</a>
						</li>
						<li>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="#">www.wpngnix.com</a>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 foot-col-logo text-center">
					<img src="images/logo.png" alt="Footer logo" class="img-fluid">
					<p class="text-center font-14">Copyrigths &copy 2012. All rights reserved.</p>
					<ul class="font-14">
						<li> <a href="#">Terms of Use</a> <span>|</span></li>
						<li> <a href="#">Privacy Policy</a> <span>|</span></li>
						<li> Designed by <a href="#">rtCamp</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<section class="disclaimer">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<p class="font-12">
						Disclaimer: Sit arcu nec cras elit? Vut sagittis magna nisi vel integer arcu? Dis pulvinar scelerisque pulvinar rhoncus integer,integer in? Ac, cum etiam tortor duis placerat mid nunc cras integer, aliquam porttitor. Dis pulvinar scelerisque pulvinar rhoncus integer, integer in? Ac, cum etiam tortor duis placerat mid nunc cras integer, aliquam porttitor.
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/bootstrap/popper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.min.js"></script>
	
	<!--owl carousel-->
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <script>
    	$(document).ready(function(){
		  	$('#video, #part-logo').owlCarousel({
			    loop:true,
			    margin:10,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        576:{
			        	items: 3,
			        	nav:true
			        },
			        600:{
			            items:3,
			            nav:true
			        },
			        992:{
			            items:5,
			            nav:true
			        }
			    }
			})
			$('#news').owlCarousel({
			    loop:true,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        }
			    }
			})
		});
    </script>
	
	<!--clock-->
    <script>
    	function startTime() {
		    var today = new Date();
		    var hr = today.getHours();
		    var min = today.getMinutes();
		    var sec = today.getSeconds();

		    //Add a zero in front of numbers<10
		    min = checkTime(min);
		    sec = checkTime(sec);
		    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec;
		    
		    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		    var curWeekDay = days[today.getDay()];
		    var curDay = today.getDate();
		    var curMonth = months[today.getMonth()];
		    var curYear = today.getFullYear();
		    var date = curWeekDay+", "+curDay+" "+curMonth;
		    document.getElementById("date").innerHTML = date;
		    
		    var time = setTimeout(function(){ startTime() }, 500);
		}
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
    </script>
  </body>
</html>