<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/header.css">
<header class="header home_header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>logo.png" alt="Efrog - Software Development Company Melbourne" /></a></div>
			</div>
			<div class="col-md-9 d-flex justify-content-end">
				<div class="navigation st-menu st-effect-4">
					<nav class="nav">
						<ul class="navbar_ul">
							<li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>website-design-development-company-melbourne" >About Us</a></li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Services</a>
								<ul class="dropdown_nav mCustomScrollbar" data-mcs-theme="light">
									<li>
										<a href="<?php echo base_url();?>software-development-service-melbourne">
										<i><img src="<?php echo base_url();?>assets/images/menu/sd.svg" alt="Software Development Service Melbourne" width="20"></i>
										Software Development</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>website-design-development-service-melbourne">
										<i><img src="<?php echo base_url();?>assets/images/menu/wd.svg" alt="Website Design and Development Service Melbourne" width="16"></i>
										Website Design Development</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>mobile-app-development-service-melbourne">
										<i><img src="<?php echo base_url();?>assets/images/menu/md.svg" alt="Mobile App Development Service Melbourne" width="14"></i> 
										Mobile App Development</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>digital-marketing-agency-melbourne">
										<i><img src="<?php echo base_url();?>assets/images/menu/dm.svg" alt="Digital Marketing Agency Melbourne" width="22"></i>
										Digital Marketing</a>
									</li>
								</ul>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Industries</a>
								<ul class="dropdown_nav">
									<li>
										<a href="<?php echo base_url();?>Accountants-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/accounts.svg" alt="" width="20"></i> 
										Accountants Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Education-and-School-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/education.svg" alt="" width="20"></i>
										Education & School Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Fashion-and-Retail-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/fashion.svg" alt="" width="20"></i>
										Fashion & Retail Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Hosptial-and-Medical-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/hopital.svg" alt="" width="20"></i>
										Hosptial & Medical Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Hotel-Web-Designing">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/hotel.svg" alt="" width="20"></i> 
										Hotel Web Designing</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>HRMS-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/human-resources.svg" alt="" width="20"></i>
										HRMS Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Lawyers-web-design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/lawyer.svg" alt="" width="20"></i>
										Lawyers web design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Real-Estate-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/realstate.svg" alt="" width="20"></i>
										Real Estate Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Recruitment-and-Consultancy-Web-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/consultancy.svg" alt="" width="20"></i>
										Recruitment & Consultancy Web Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Restaurant-Website-Design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/restaurant.svg" alt="" width="20"></i>
										Restaurant Website Design</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>Tour-and-Travel-web-design">
										<i><img src="<?php echo base_url();?>assets/images/Industries/svg/travel.svg" alt="" width="20"></i>
										Tour and Travel web design</a>
									</li>
									<a class="yellow-btn"  href="<?php echo base_url();?>More-Industries"> More Industries </a>
								</ul>
							</li> -->
							<!-- <li class="nav-item">
								<a class="nav-link" href="javascript:void(0)">Industries2</a>
								<ul class="dropdown_nav dropdown_nav_two">
									
								</ul>
							</li> -->
							<li class="nav-item"><a class="nav-link" href="our-work" >Our Work</a></li>
							<li class="nav-item"><a class="nav-link" href="contact-us" >Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="hamburger hamburger--slider js-hamburger hamburger_pos" (click)="menuOpen()">
			<div class="hamburger-box" id="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="overlay_bg overlay_click" (click)="menuOpen()"></div>
	</div>
</header>