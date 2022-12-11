<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>José Manuel</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
	<link rel="stylesheet" href="{{ asset("vendors/linericon/style.css") }}">
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
	<link rel="stylesheet" href="{{ asset("vendors/owl-carousel/owl.carousel.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
	<link rel="stylesheet" href="{{ asset("vendors/nice-select/css/nice-select.css") }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ route('home') }}"><img src="img/logo2-bg.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase" id="typewritter">I am José Manuel</h1>
							<h5 class="text-uppercase" style="display: none" id="typewritter2">Full-Stack Developer</h5>
							<div class="d-flex align-items-center">
                                <a class="primary_btn" target="_blank" href="https://www.linkedin.com/in/jmsaez2712/"><span><i class="fa fa-linkedin-square mr-2"></i>Linked In</span></a>
								<a class="primary_btn" target="_blank" href="https://github.com/jmsaez2712"><span><i class="fa fa-github mr-2"></i>Github</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>let’s <br>
							Introduce about <br>
							myself</h2>
						<p>
                            I consider myself a responsible, curious and hard-working boy.
                            I am passionate about the world of computing, more specifically programming.
                            In certain free moments I do projects for myself as an entertainment and as a way
                            to broaden my knowledge and explore areas of programming that I have not touched before.
                            I also like video games and badminton, a sport in which I have a coaching certification.
                        </p>
						<p>
                            As a person, I am somewhat introverted at first with new people or environments,
                            but I adapt quickly and along with that adaptation, that introversion disappears.
                            I consider that I work well in a group, trying to give the best of me to everyone
                            conforming the group.
                        </p>
						<a class="primary_btn" target="_blank" href="{{ asset('cv/CV-EN.pdf') }}"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
                    <div class="col-lg-12">
                      @foreach( $projects as $key => $project)
                          @if (!$project->private)
                      <div class="row">
                          <div>
                              <h2><a class="gradient-text-title" href="{{ $project->html_url }}">{{ $project->name }}</a></h2>
                              <p>{{ $project->description }}</p>
                              <h5>Language: <span style="color: #854fee">{{ $project->language }}</span></h5>
                              <p>Role: @if($project->owner->login != "jmsaez2712") Collaborator @else Creator @endif</p>
                          </div>
                      </div>
                          @endif
                      @endforeach
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center pb-5">
				<div class="col-lg-12">
					<div class="text-center">
						<h2 class="text-uppercase mb-5">Let's keep in touch</h2>
						<div class="subcribe-form" id="mc_embed_signup">
								<a class="primary_btn" href="{{ route('contact') }}">Contact me</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="https://www.linkedin.com/in/jmsaez2712/"><i class="fa fa-linkedin"></i></a>
							<a href="https://github.com/jmsaez2712"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
    <script>
        function typingEffect(element,speed){
            let text=element.innerHTML;
            element.innerHTML="";
            var i=0;
            var timer=setInterval(function(){
                if(i<text.length){
                    element.append(text.charAt(i))
                    i++;
                }else{
                    clearInterval(timer);
                }
            },speed)
        }

        const h1=document.getElementById('typewritter');
        const h2=document.getElementById('typewritter2');

        typingEffect(h1, 150);
        setTimeout(() => {
            h2.style.display = 'block';
            typingEffect(h2, 150)
        }, 2550)

    </script>
</body>

</html>
