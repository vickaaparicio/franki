				<!---start-gallery-script-->
					<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
					<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							}
						};
						// Run the show!
						filterList.init();
					});	
					</script>
					<!-- Add fancyBox main JS and CSS files -->
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
							<script>
								$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
								});
							});
							</script>
				<!---//End-gallery-script-->
				<!---start-recent-works---->
			<div class="recent-works" id="portfolio">
				<div class="wrap">
				<div class="recent-works-head">
					<h3>Recent works</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporUt enim ad minim veniam</p>
				</div>
				<!---start-mfp ---->	
			<div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h2>Yours text place Here</h2>
					<p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
				</div>
			</div>
			<!---end-mfp ---->
				<div class="gallery">
					<div class="clear"> </div>
					<div class="container">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
						<li><span class="filter" data-filter="app web">Web</span></li>
						<li><span class="filter" data-filter="icon web card">Mobile</span></li>
						<li><span class="filter" data-filter="web app icon card">Photography</span></li>
						<li><span class="filter" data-filter="icon app web logo">Design</span></li>
					</ul>
						<div id="portfoliolist" style="     ">
						<div class="portfolio logo1 mix_all" data-cat="logo" style=" ">
							<div class="portfolio-wrapper">				
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src=" images/p1.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">Bird Document</a>
										<span class="text-category">Logo</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
						<div class="portfolio app mix_all" data-cat="app" style="  display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">			
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src=" images/p2.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">Visual Infography</a>
										<span class="text-category">APP</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>		
						<div class="portfolio web mix_all" data-cat="web" style="  display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">						
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src=" images/p3.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">Sonor's Design</a>
										<span class="text-category">Web design</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="  display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">			
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src=" images/p4.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">Typography Company</a>
										<span class="text-category">Business card</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>	
									
						<div class="portfolio app mix_all" data-cat="app" style="  display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src=" images/p5.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">Weatherette</a>
										<span class="text-category">APP</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>			
						
						<div class="portfolio card mix_all" data-cat="card" style="  display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">			
								<a class="popup-with-zoom-anim" href="#small-dialog1">
									<img src="images/p6.jpg" alt="Image 2" style="top: 0px;">
								</a>
								<div class="label" style="bottom: -40px;">
									<div class="label-text">
										<a class="text-title">BMF</a>
										<span class="text-category">Business card</span>
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>	
					</div>
				</div><!-- container -->
				<a class="morebtn popup-with-zoom-anim" href="#small-dialog1">Show More</a>
				<div class="clear"> </div>
				<script type="text/javascript" src="js/fliplightbox.min.js"></script>
				<script type="text/javascript">$('body').flipLightBox()</script>
				<?php include"skeleton/filas.php/";?>
				<div class="clear"> </div>
				</div>
			</div>
			</div>
			<!---End-recent-works-->
