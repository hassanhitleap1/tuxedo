<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tuxedo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ url('assets/css/main.css')}}" />
        <link rel="stylesheet" href="{{ url('custm.css')}}" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<noscript><link rel="stylesheet" href="{{url('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<li><a href="#three">Get in touch</a></li>
							{{-- @if (auth()->guest())  @endif  	@guest @else @endguest	--}}
						
							<li><a href="#login">Login</a></li>
							<li><a href="#registration">Registration</a></li>
							
							<li><a href="{{url('/logout')}}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
							<i class="material-icons">input</i>Sign Out</a></li>
				   			<form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
							   </form>
							
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Hyperspace</h1>
							<p>Just another fine responsive site template designed by <a href="{{url('/')}}">HTML5 UP</a><br />
							and released for free under the <a href="{{url('/')}}">Creative Commons</a>.</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sed ipsum dolor</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									<ul class="actions">
										<li><a href="{{url('/')}}" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Feugiat consequat</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									<ul class="actions">
										<li><a href="{{url('/')}}" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Ultricies aliquam</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									<ul class="actions">
										<li><a href="{{url('/')}}" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What we do</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>Lorem ipsum amet</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-lock"></span>
									<h3>Aliquam sed nullam</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-cog"></span>
									<h3>Sed erat ullam corper</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-desktop"></span>
									<h3>Veroeros quis lorem</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-chain"></span>
									<h3>Urna quis bibendum</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-diamond"></span>
									<h3>Aliquam urna dapibus</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="{{url('/')}}" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="{{url('/')}}" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
                    </section>
                    
                <!-- Login -->
					<section id="login" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Login</h2>
							<div class="split style1">
								<section>
									<form method="post" action="{{url('/normallogin')}}">
										<div class="fields">
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field half">
												<label for="password">Password</label>
												<input type="password" name="password" id="password" />
                                            </div>
                                            <div class="field half">
												<a href="" class="btn btn-facebook">
                                                <i class="fab fa-facebook-f"></i>
                                                    login with facebook
                                                </a>
                                            </div>
                                            <div class="field half">
                                                    <a href="" class="btn btn-twitter">
                                                    <i class="fab fa-twitter"></i>
                                                        login with twitter
                                                    </a>
                                            </div>
										</div>
										<ul class="actions">
											<li><a href="{{url('/')}}" class="button submit">Login</a></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
                    </section>
                    
                <!-- registration -->
					<section id="registration" class="wrapper style1 fade-up">
                            <div class="inner">
                                <h2>Registration</h2>
                                <div class="split style1">
                                    <section>
                                        <form method="post" action="#">
                                            <div class="fields">
                                                <div class="field half">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" />
                                                </div>
                                                <div class="field half">
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email" />
                                                </div>
                                                <div class="field half">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" />
                                                </div>
                                                <div class="field half">
                                                    <label for="c_password">Confirm Password</label>
                                                    <input type="password" name="c_password" id="c_password" />
                                                </div>
                                                <div class="field half">
                                                    <a href="" class="btn btn-facebook">
                                                    <i class="fab fa-facebook-f"></i>
                                                            Registration with facebook
                                                    </a>
                                                </div>
                                                <div class="field half">
                                                        <a href="" class="btn btn-twitter">
                                                        <i class="fab fa-twitter"></i>
                                                            Registration with twitter
                                                        </a>
                                                </div>
                                            </div>
                                            <ul class="actions">
                                                <li><a href="{{url('/')}}" class="button submit">Rgistration</a></li>
                                            </ul>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="{{url('/')}}">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ url('assets/js/jquery.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{ url('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{ url('assets/js/browser.min.js')}}"></script>
			<script src="{{ url('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{ url('assets/js/util.js')}}"></script>
			<script src="{{ url('assets/js/main.js')}}"></script>

	</body>
</html>