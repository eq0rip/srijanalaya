<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nirmal
 */

get_header(); ?>


<div class="wrapper section fullheight" id="section1">
	<div class="col-sm-6 slider-caption" id="left-col-first" >
		<div id="slider-1" class="owl-carousel">
			<div class="item">
				<h1>Title Autde Juesl</h1>
				<h2>Cupidatat non proident</h2>
				<p>Sunt in culpa qui officia deserunt excepteur sint occaecat cupidatat non proident, mollit anim id est laborum.</p>
				<button type="button" class="btn btn-default btn-lg">Read more</button>
			</div>

			<div class="item">
				<h1>Deserunt excepteur</h1>
				<h2>Ut enim ad minim</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				<button type="button" class="btn btn-default btn-lg">Read more</button>
			</div>

			<div class="item">
				<h1>Juesl Title Autde </h1>
				<h2>Cupidatat non proident</h2>
				<p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu.</p>
				<button type="button" class="btn btn-default btn-lg">Read more</button>
			</div>

			<div class="item">
				<h1>Deserunt excepteur</h1>
				<h2>eiusmod tempor incididunt</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button type="button" class="btn btn-default btn-lg">Read more</button>
			</div>

		</div>
	</div>

	<div class="col-sm-6" id="right-col-first">
		<div id="slider-2" class="owl-carousel">
			<div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/8.JPG" alt="1">
				<span class="overlay11">

				</span>

			</div>
			<div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/9.JPG" alt="2">
				<span class="overlay11">

				</span>
			</div>						      
			<div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/8.JPG" alt="3">
				<span class="overlay11">

				</span>
			</div>
			<div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/9.JPG" alt="4">
				<span class="overlay11">

				</span>
			</div>   
		</div>
	</div>
</div>
</div>

<div class="section fullheight" id="section2">
	<div class="col-sm-6 quarter">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
				<p class="small-text"><img align="middle" src="<?php echo get_template_directory_uri();?>/images/participant-icon.png" class="outimg" alt="">200 participants</p>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_template_directory_uri();?>/images/lboy.png" class="outimg" alt="">
			<span class="overlay"></span>
		</div>
	</div>
	<div class="col-sm-6 quarter2">
		<div class="col-xs-6 fullheight section-container">
			<div class="section-inner">
				<h1>Upcoming <span class="key">Resource</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Resource</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">Resource</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container img-container">
			<img src="<?php echo get_template_directory_uri();?>/images/rboy.png" class="outimg" alt="">
			<span class="overlay"></span>
		</div>
	</div>
</div>

<div class="section fullheight" id="section3">
	<div class="transparent"></div>
	<div class="col-sm-6 quarter3">
		<div class="col-xs-6 fullheight section-container odd">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-sm-6 quarter4">
		<div class="col-xs-6 fullheight section-container odd">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
		<div class="col-xs-6 fullheight section-container even">
			<div class="img-wrap">
				<img src="<?php echo get_template_directory_uri();?>/images/artwork.png" style="position:absolute;top:0;left:0;width:100%;z-index:-1;">
				<div class="wrap" style="background:#000;opacity:0.7;"></div>
			</div>
			<div class="section-inner">
				<h1>Upcoming <span class="key">Project</span></h1>
				<h2> Icies Veil Liberois Pharetra</h2>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg">View Projects</button>

				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="section" id="section4">
	<div class="col-xs-6 section-container bottom-container">
		<div class="section-inner">
			<div class="cover-wrap">
				<h1>Title of <span class="key">Featured</span> Video Showcased</h1>
				<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
				<button type="button" class="btn btn-default btn-lg vid-btn">Shop to Support</button>
				<span class="post-navigate">
					<button class="btn btn-default btn-lg semicircle">News</button>
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-6 section-container bottom-container2">
		<iframe src="https://player.vimeo.com/video/15023343?color=ffffff&badge=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
	<div class="col-xs-12 halfheight">
		<div class="quote-wrap">
			<div class="inner-wrap">	
				<p>"Quotation <span class="htext">space</span> of featured
					recent project in Nepal..."</p>
				</div>
			</div>
			<div class="inner-wrap">	
				<p>"Quotation <span class="htext">space</span> of featured
					recent project in Nepal..."</p>
				</div>
			</div>
		</div>
	</div>

</div> <!--full page end-->


</body>

</html>


<?php get_footer(); ?>
