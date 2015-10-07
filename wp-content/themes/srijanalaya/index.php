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
						

						<div class="container-fluid" style="height:100%">
									<div class="row" style="height:100%" >
									   <div class="col-sm-6" id="left-col-first" style="height:100%;padding:0px;">
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

										<div class="col-sm-6" style="height:100%;padding:0px;" id="right-col-first">
												<div id="slider-2" class="owl-carousel">
												      <div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/8.JPG" alt="1">
													      	  <div class="overlay11">
													      			
													      	  </div>

												      </div>
												      <div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/9.JPG" alt="2">
														      <div class="overlay11">
														      		
														      </div>
												      </div>						      
												      <div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/8.JPG" alt="3">
														      <div class="overlay11">
														      		
														      </div>
												      </div>
												      <div class="item"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/images/9.JPG" alt="4">
														      <div class="overlay11">
														      	    
														      </div>
												      </div>   
											   </div>
									   </div>
									   
									</div>


						</div>
					</div>

					<div class="section" id="section2">
						<div class="container-fluid fullheight" >
									<div class="row fullheight">
										<div class="col-sm-3 fullheight no-padding" id="onesecond">
											<h1>Upcoming Project</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">View Projects</button>

											<span class="post-navigate">
												<button class="btn btn-default btn-lg semicircle">News</button>
											</span>
										</div>

										<div class="col-sm-3 fullheight no-padding" id="twosecond">
												<img src="<?php echo get_template_directory_uri();?>/images/lboy.png" height="100%" style="margin-left:0px;" alt="">
												<span class="overlay"></span>
										</div>

										<div class="col-sm-3 fullheight no-padding" id="threesecond">
							
											<h1>Upcoming Project</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">View Resource</button>
											
											<span class="post-navigate">
												<button class="btn btn-default btn-lg">Resource</button>
											</span>

										</div>

										<div class="col-sm-3 fullheight no-padding" id="foursecond">
										    <img src="<?php echo get_template_directory_uri();?>/images/rboy.png" height="100%" style="margin-left:0px;" alt="">
										    <div class="overlay"></div>									
										</div>			
									</div>
						</div>			

					</div>

					<div class="section" id="section3">
						<div class="container-fluid fullheight" >
									<div class="row fullheight">
										<div class="col-sm-3 fullheight no-padding" id="onethird">
											<h1>Recent Project</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">View Projects</button>

										</div>

										<div class="col-sm-3 fullheight no-padding" id="twothird">
											<h1>Recent News</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">Read News</button>
										</div>

										<div class="col-sm-3 fullheight no-padding" id="threethird">
							
											<h1>Product Showcase</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">Shop to Support</button>
										</div>

										<div class="col-sm-3 fullheight no-padding" id="fourthird">
											<h1>Art Exposure</h1>
											<h2> Icies Veil Liberois Pharetra</h2>
											<p>Suspendisse Ultricies Vel Liberoisporta. Ut Pharetra</p>
											<button type="button" class="btn btn-default btn-lg">View Artwork</button>							
										</div>			
									</div>
						</div>			

					</div>

				</div> <!--full page end-->


</body>

</html>


<?php get_footer(); ?>
