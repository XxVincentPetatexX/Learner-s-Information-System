@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Learning Information System</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style2.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">

		<!-- Header -->
		<header>
			<div class="container">
				<div class="slider-container">
					<div class="intro-text">
						<div class="intro-lead-in">Welcome To Our System!</div>
						<div class="intro-heading">It's Nice To Meet You</div>
						<a href="#about" class="page-scroll btn btn-xl">Learn More</a>
					</div>
				</div>
			</div>
		</header>
		<section id="about" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>ABOUT</h2>
							<p>The Learning Information System is a web based application built for quick access of data and with dedicated database to store data for the Department of Education. This application consist of 6 modules LIS,Attendance,Dropout List,Grading List,Nutrition List & Inventory. We build this application to help the teachers to make their work become easier and less time from inputing all the information of the learners.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-briefcase ot-circle"></i>
							<h3>Web Development</h3>
							<p>This web design is built with elagance and style</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-photo ot-circle"></i>
							<h3>Visualisation</h3>
							<p>User Friendly and easy to use</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-camera-retro ot-circle"></i>
							<h3>Animation</h3>
							<p>Installed with CSS by NODE for interactive animations.</p>
						</div>
					</div>
					<!-- end about module -->
					<!-- about module -->
					<div class="col-md-3 text-center">
						<div class="mz-module-about">
							<i class="fa fa-cube ot-circle"></i>
							<h3>Design</h3>
							<p>Designed for the Easy input of data for senior highschool Students. </p>
						</div>
					</div>
					<!-- end about module -->
				</div>
			</div>
			<!-- /.container -->
		</section>
		<section >
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="skills-text">
							<h2>WE`RE CREATIVE</h2>
							<p>We Build this website application with creative CSS and Bootstrap Designs<br><br></p>
						</div>
					</div>
					<div class="col-md-6">
						<!-- skill bar item -->
						<div class="skillbar-item">
							<div class="skillbar-score">
								<span class="score">90</span><span class="percent">%</span>
							</div>
							<div class="skillbar" data-percent="90%">
								<h3>Web design</h3>
								<div class="skillbar-bar">
									<div class="skillbar-percent" style="width: 90%;">
									</div>
								</div>
							</div>
						</div>
						<!-- skill bar item -->
						<div class="skillbar-item">
							<div class="skillbar-score">
								<span class="score">80</span><span class="percent">%</span>
							</div>
							<div class="skillbar" data-percent="80%">
								<h3>Development</h3>
								<div class="skillbar-bar">
									<div class="skillbar-percent" style="width: 80%;">
									</div>
								</div>
							</div>
						</div>
						<!-- skill bar item -->
						<div class="skillbar-item">
							<div class="skillbar-score">
								<span class="score">85</span><span class="percent">%</span>
							</div>
							<div class="skillbar" data-percent="85%">
								<h3>Database</h3>
								<div class="skillbar-bar">
									<div class="skillbar-percent" style="width: 85%;">
									</div>
								</div>
							</div>
						</div>
						<!-- skill bar item -->
						<div class="skillbar-item">
							<div class="skillbar-score">
								<span class="score">70</span><span class="percent">%</span>
							</div>
							<div class="skillbar" data-percent="70%">
								<h3>Overall Progress</h3>
								<div class="skillbar-bar">
									<div class="skillbar-percent" style="width: 70%;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="overlay-dark bg-img1 dark-bg short-section">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 data-count="59">14</h2>
							<h6>Days Worked</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 data-count="1054">5</h2>
							<h6>Members</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 data-count="34">3</h2>
							<h6>Advisers</h6>
						</div>
					</div>
					<div class="col-md-3 mb-sm-30">
						<div class="counter-item">
							<h2 data-count="154">1</h2>
							<h6>Project</h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio" class="light-bg">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Modules</h2>
						<p>This Laravel Based Web application is consist of six modules</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-1.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Learner's Form</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Grading Form</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-3.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Attendance Form</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row">
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-4.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Drop out form</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-5.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Nutrition List</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-5">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="images/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Inventory Form</h2>
								<p></p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			</div><!-- end container -->
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Our Partners</h2>
							<p>Special thanks to the following co</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="owl-carousel">
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-1.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-2.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-3.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-4.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-5.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-6.png" alt="partners"></div>
							</div>
							<div class="item">
								<div class="partner-logo"><img src="images/demo/partners-7.png" alt="partners"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="team" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Our Team</h2>
							<p>A creative group consist of GIC Students aiming to Create a Data-Based System for Senior High School Students to Input and Save their valuable information.</p>
						</div>
					</div>
				</div>


				<div class="row">
							<!-- team member item -->
							<div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-2.jpg" class="img-responsive" alt="author">
									</div>
									<div class="team-text">
										<h3>Patricia Esmade</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– Dropout List –</div>
										<p>Well done is better than well said</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->
							<!-- team member item -->
		           <div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-4.jpg" class="img-responsive" alt="author" >
									</div>
									<div class="team-text" align="middle" >
										<h3>Andrea Valenzuela</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– LIS,log-in, User Interface–</div>
										<p>You Only Live Once</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->

		<div class="row">
							<!-- team member item -->
							<div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-6.jpg" class="img-responsive" alt="author">
									</div>
									<div class="team-text">
										<h3>Heartly Mae Gatchion</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– Attendance form –</div>
										<p>LEARNING is a treasure that will follow its owner everywhere</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->

							<!-- team member item -->
							<div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-3.jpg" class="img-responsive" alt="author">
									</div>
									<div class="team-text">
										<h3>Vincent Petate</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– LIS, Log-in, User Interface –</div>
										<p>An investment in knowledge always pays the best interest</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->

							<!-- team member item -->
		           <div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-4.jpg" class="img-responsive" alt="author" >
									</div>
									<div class="team-text" align="middle" >
										<h3>Karl Raymundo</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– Grading Form –</div>
										<p>Every generation writes its own history</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->
							<!-- team member item -->
		           <div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-4.jpg" class="img-responsive" alt="author" >
									</div>
									<div class="team-text" align="middle" >
										<h3>Marcus Angeles</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– Nutrition List –</div>
										<p>Don't give up</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->

							<!-- team member item -->
		           <div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-4.jpg" class="img-responsive" alt="author" >
									</div>
									<div class="team-text" align="middle" >
										<h3>Oneal Buenaflor</h3>
										<div class="team-location">Bachelor of Science in Information Technology</div>
										<div class="team-position">– Inventory –</div>
										<p>Try and Try until you succeed</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->
							<!-- team member item -->
		           <div class="col-md-3">
								<div class="team-item">
									<div class="team-image">
										<img src="images/demo/author-4.jpg" class="img-responsive" alt="author" >
									</div>
									<div class="team-text" align="middle" >
										<h3>Rebecca Fajardo</h3>
										<div class="team-location"></div>
										<div class="team-position">– Thesis Adviser–</div>
										<p>
I love my age. Old enough to know better. Young enough not to care. Experienced enough to do it right.</p>
									</div>
								</div>
							</div>
							<!-- end team member item -->


		        </div>
					</div>
		</section>
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2>Contact Us</h2>
							<p>If you have some Questions or need Help! Please Contact Us!<br>We make Cool and Clean Design for your Business</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3>Our Location</h3>
						<p>444, Edsa Makati City, Philippines</p>
						<p><i class="fa fa-phone"></i> 882-4242 / 666-8881</p>
						<p><i class="fa fa-envelope"></i> vincent.petate@global.edu.ph</p>
					</div>

					<div class="col-md-6">
						<form name="sentMessage" id="contactForm" novalidate="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button type="submit" class="btn">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>


		<!-- Modal for portfolio item 1 -->
		<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-1">Learner's Form</h4>
					</div>
					<div class="modal-body">
						<img src="images/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
						<div class="modal-works"><span>Description</span></div>
						<p>The students can input their information and the adviser views their information</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for portfolio item 2 -->
		<div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-2">Grading Form</h4>
					</div>
					<div class="modal-body">
						<img src="images/demo/portfolio-2.jpg" alt="img01" class="img-responsive" />
						<div class="modal-works"><span>Description</span></div>
						<p>The adviser will input the grades and the students will be able to view their remarks</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for portfolio item 3 -->
		<div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-3">Attendance Form</h4>
					</div>
					<div class="modal-body">
						<img src="images/demo/portfolio-3.jpg" alt="img01" class="img-responsive" />
						<div class="modal-works"><span>Description</span></div>
						<p>The adviser will check the attendance of the students</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for portfolio item 4 -->
		<div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-label-4">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-4">Dropout Form</h4>
					</div>
					<div class="modal-body">
						<img src="images/demo/portfolio-4.jpg" alt="img01" class="img-responsive" />
						<div class="modal-works"><span>Description</span></div>
						<p>The adviser will input if the student is already drop</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for portfolio item 5 -->
		<div class="modal fade" id="Modal-5" tabindex="-1" role="dialog" aria-labelledby="Modal-label-5">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="Modal-label-5">Nutrition List</h4>
					</div>
					<div class="modal-body">
						<img src="images/demo/portfolio-5.jpg" alt="img01" class="img-responsive" />
						<div class="modal-works"><span>Description</span></div>
						<p>The students csn view their nutrition status</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
@endsection
