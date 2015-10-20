<html>
	<head>
	    <!-- normalize -->
		<!--<link rel="stylesheet" href="css/normalize.css">-->
		<!-- fontawesome -->
		<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
		<!-- jquery -->
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!-- bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!--bootstrap js-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
		<!-- owls8 style -->
		<link rel="stylesheet" href="../../css/owls8.css">
		<!-- csgo team style -->
		<link rel="stylesheet" href="csgo.css">
		<!-- smooth scroll -->
		<script src="../../js/smooth-scroll.js"></script>
		<script src="../../js/ScrollMagic.min.js"></script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>
		
		<div id="top"></div>
		
		<!-- navigation bar for main navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" id="navigation-bar" role="navigation">
			<div class="container-fluid" id="nav-container">
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
					<div class="navbar-header">
						<a class="navbar-brand" href="#top">
							<img alt="OWLS8" src="../../img/logo_80.png"/>
						</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="link-about"><a href="#about"><i class="fa fa-black-tie"></i> who we are</a></li>
						<li class="link-games"><a href="#games"><i class="fa fa-gamepad"></i> what we play</a></li>
						<li class="link-clothing"><a href="#clothing"><i class="fa fa-users"></i> clothing</a></li>
					</ul>					
				</div>
			</div>
		</nav>
					
					
		<div class="container-fluid header" id="header-csgo">
			
		</div>		
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" id="about">
					<h1><span style="font-family: csgo;">Counter Strike - Global Offensive</span></h1>	
					
					<div class="player jasper col-md-6">
						<div class="img col-lg-7 col-md-10 col-sm-6"></div>
						<div class="col-md-12 col-sm-12">
							<div class="description">
								<div class="name col-md-offset-1 col-sm-offset-1">
									Jasper <span class="nick">itsJASPERr</span> M.
								</div>
							</div>
							<p>
								is...
							</p>
						</div>
					</div>			

					<div class="player gesa col-md-6">
						<div class="img col-lg-7 col-md-10 col-sm-6"></div>
						<div class="col-md-12 col-sm-12">
							<div class="description">
								<div class="name col-md-offset-1 col-sm-offset-1">
									Enlori <span class="nick">Enlori</span> M.
								</div>
							</div>
							<p>
								is...
							</p>
						</div>
					</div>	
					
				</div>			
			</div>
		</div>
		
		<div class="container-fluid footer">
			<div class="row">
				<div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0" id="teams">
					
				</div>
			</div>
		</div>
		
		<div class="container"><a href="#top" class="text-center"><i id="to-top" class="fa fa-chevron-up fa-3x"></i></a></div>
		
		<!-- skrollr -->
		<script src='js/skrollr.min.js'></script>
		<!-- skrollr menu -->
		<!--<script src='js/skrollr.menu.min.js'></script>-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/skrollr.ie.min.js"></script>
		<![endif]-->
		
		
		<script>			
			var w = window,
				d = document,
				e = d.documentElement,
				g = d.getElementsByTagName('body')[0],
				x = w.innerWidth || e.clientWidth || g.clientWidth,
				y = w.innerHeight|| e.clientHeight|| g.clientHeight;
			
			// init controller
			var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: 0}});
			if (x > 1200) {
				
				// build scene
				new ScrollMagic.Scene({triggerElement: "#navigation-bar"})
					.setPin("#navigation-bar") // add class toggle
					.addTo(controller);
				
				new ScrollMagic.Scene({triggerElement: "#top"})
					.setClassToggle("#about", "top--115") // add class toggle
					.addTo(controller);
				
				new ScrollMagic.Scene({triggerElement: "#about", duration: "90%"})
					.setClassToggle(".link-about", "active") // add class toggle
					.offset("-100")
					.addTo(controller);
					
				new ScrollMagic.Scene({triggerElement: "#about", duration: "90%"})
					.setClassToggle("#about", "show") // add class toggle
					.offset("-100")
					.addTo(controller);
					
				new ScrollMagic.Scene({triggerElement: "#about", duration: "90%"})
					.setClassToggle("#games", "next") // add class toggle
					.offset("-100")
					.addTo(controller);
				
				new ScrollMagic.Scene({triggerElement: "#about"})
					.offset("-75")
					.setClassToggle("#about", "top-115") // add class toggle
					.addTo(controller);
				
				new ScrollMagic.Scene({triggerElement: "#games", duration: "90%"})
					.setClassToggle(".link-games", "active") // add class toggle
					.offset("-100")
					.addTo(controller);
					
				new ScrollMagic.Scene({triggerElement: "#games"})
					.offset("-100")
					.setClassToggle("#games", "top-115") // add class toggle
					.addTo(controller);
					
				new ScrollMagic.Scene({triggerElement: "#games", duration: "90%"})
					.offset("-100")
					.setClassToggle(".gamechooser", "show") // add class toggle
					.addTo(controller);
				
				new ScrollMagic.Scene({triggerElement: "#clothing", duration: "90%"})
					.setClassToggle(".link-clothing", "active") // add class toggle
					.offset("-100")
					.addTo(controller);
					
				new ScrollMagic.Scene({triggerElement: "#clothing"})
					.offset("-75")
					.setClassToggle("#clothing", "top-115") // add class toggle
					.addTo(controller);
			}
				
				// define a new scroll position modification function (jQuery animate instead of jump)
				controller.scrollTo(function (newScrollPos) {
					$("html, body").animate({scrollTop: newScrollPos});
				});
			

				//  bind scroll to anchor links
				$(document).on("click", "a[href^='#']", function (e) {
					var id = $(this).attr("href");
					if ($(id).length > 0) {
						e.preventDefault();

						// trigger scroll
						controller.scrollTo(id);

							// if supported by the browser we can even update the URL.
						if (window.history && window.history.pushState) {
							history.pushState("", document.title, id);
						}
					}
				});
		</script>
	</body>
</html>