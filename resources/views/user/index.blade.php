@extends('user.layouts.app')

@section('main-content')

<!-- About -->
<section class="about py-5" id="about">
	<div class="container py-lg-3 py-2">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">About us</h3>
		</div>
		<div class="row about-grids">
			<div class="col-lg-4 about-grid1 mb-lg-0 mb-5">
				<h3 class="text-uppercase">Welcome to our Hair Salon shop</h3>
				<p class="my-lg-4 my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet arcu augue efficitur luctus a nec ipsum dolor sit amet.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="about-grid2 p-5">
					<h3>Expert in hair style</h3>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="about-grid3 p-5">
					<h3>25 years experience</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //About -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container-fluid">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">What We Do</h3>
		</div>
		<div class="row service-grids">
			<div class="col-lg-2 col-sm-6 col-12 serviceimage1">
				
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Classic Hair cut</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 serviceimage2">
				
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Beard Waxing</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 serviceimage3">
				
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Hair Coloring</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Straightening</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 serviceimage3">
				
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Beard Trim</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 serviceimage1">
				
			</div>
			<div class="col-lg-2 col-sm-6 col-12 py-5 px-4 servicetext">
				<h4>Clean Shave</h4>
				<p class="my-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero.</p>
				<a class="bt text-capitalize" href="#" role="button"> read more
					<i class="fas fa-cut"></i>
				</a>
			</div>
			<div class="col-lg-2 col-sm-6 col-12 serviceimage2">
				
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- Team -->
<section class="barbers py-5" id="team">
	<div class="container py-lg-3 py-2">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">Our Barbers</h3>
		</div>
		<div class="row barber-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 text-center">
				<div class="barber-grid1">
					<img src="user/images/barber1.jpg" class="img-fluid" alt=""/>
				</div>
				<h4 class="mt-3">David Alison</h4>
				<p>Barber</p>
				<div class="social mt-2">
					<ul class="d-flex justify-content-center">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 text-center">
				<div class="barber-grid1">
					<img src="user/images/barber2.jpg" class="img-fluid" alt=""/>
				</div>
				<h4 class="mt-3">David Alison</h4>
				<p>Barber</p>
				<div class="social mt-2">
					<ul class="d-flex justify-content-center">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-md-0 mb-5 text-center">
				<div class="barber-grid1">
					<img src="user/images/barber3.jpg" class="img-fluid" alt=""/>
				</div>
				<h4 class="mt-3">David Alison</h4>
				<p>Barber</p>
				<div class="social mt-2">
					<ul class="d-flex justify-content-center">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 text-center">
				<div class="barber-grid1">
					<img src="user/images/barber4.jpg" class="img-fluid" alt=""/>
				</div>
				<h4 class="mt-3">David Alison</h4>
				<p>Barber</p>
				<div class="social mt-2">
					<ul class="d-flex justify-content-center">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mr-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class=""><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Team -->

<!-- testimonials -->
	<div class="testimonials" id="testimonials">
	   <div class="test_agile_info py-5">
		<div class="container py-lg-3">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">Customers Words</h3>
		</div>
			<ul id="flexiselDemo1">			
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
							<h5>Mark Henry</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="user/images/t1.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<p>Lorem laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
							<h5>Linda Carl</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="user/images/t2.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa init. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor Vestibulum sedconvallis massa purus eu viverra.</p>
							<h5>Michael Paul</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="user/images/t3.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //testimonials -->

<!-- pricing -->
<section class="py-5" id="pricing">
	<div class="container">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">Our Pricing</h3>
		</div>
		<!--/tabs-->
		<div class="responsive_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Hair Cut</li>
					<li>Make Up</li>
					<li>Waxing</li>
					<li>Beard Style</li>
				</ul>
				<div class="resp-tabs-container">
					<!--/tab_one-->
					<div class="tab1">
						<div class="tab-info">
							<div class="row tab-grids">
								<div class="col-md-6">
									<h3>Classic Hair Cut <span class="price"> 12$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-0 mt-3">
									<h3>Hair Trimming <span class="price"> 06$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Clipper Cut <span class="price"> 11$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Clean Shave <span class="price"> 09$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
							</div>
						</div>
					</div>
					<!--//tab_one-->
					<!--/tab_two-->
					<div class="tab2">

						<div class="tab-info">
							<div class="row tab-grids">
								<div class="col-md-6">
									<h3>Facial & clean-ups<span class="price"> 25$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-0 mt-3">
									<h3>Hair Straightening <span class="price"> 21$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Facial Make up <span class="price"> 18$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Hair Grooming <span class="price"> 09$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
							</div>
						</div>
					</div>
					<!--//tab_two-->
					<!--/tab_three-->
					<div class="tab3">

						<div class="tab-info">
							<div class="row tab-grids">
								<div class="col-md-6">
									<h3>Manicure<span class="price">17$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-0 mt-3">
									<h3>Body Polish <span class="price"> 22$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Threading<span class="price"> 29$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Seasoul Body Spa <span class="price"> 32$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
							</div>
						</div>
					</div>
					<!--//tab_three-->
					<!--/tab_four-->
					<div class="tab4">

						<div class="tab-info">
							<div class="row tab-grids">
								<div class="col-md-6">
									<h3>Beard Trimming<span class="price"> 21$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-0 mt-3">
									<h3>Beard Grooming <span class="price"> 15$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3>Razor Shave<span class="price"> 11$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
								<div class="col-md-6 mt-md-5 mt-3">
									<h3> Beard Softening <span class="price"> 25$</span></h3>
									<p class="mt-3">Nam sed ullamcorper elit, sit amet libero in imperdiet dolor. Maecenas non commodo libero. Suspendisse sit amet</p>
								</div>
							</div>
						</div>
					</div>
					<!--//tab_four-->
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//tabs-->
		<div class="clearfix"> </div>
	</div>
</section>
<!-- //pricing -->

<!-- contact map and address -->
<section class="contact py-5" id="contact">
	<div class="container">
		<div class="heading text-center">
			<i class="fas fa-cut"></i>
			<h3 class="heading mb-sm-5 mb-3 text-uppercase">Locate Us</h3>
		</div>
		<div class="contact-main-grid">
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722638946!2d2.277020320550042!3d48.85883773941345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1524720355592"></iframe>
			</div>
			<div class="contact-info">
				<div class="mb-5">
					<h4 class="mb-3">Address</h4>
					<p><span class="fas fa-map mr-2"></span> 123 Street W, Seattle WA 99999</p>
					<p>Paris, France.</p>
					<p><span class="fas fa-phone mr-2"></span> +12 345 567 7890</p>
					<p><span class="fas fa-envelope mr-2"></span> <a href="mailto:name@example.com"> mail@example.com</a> </p>
				</div>
				<div class="">
					<h4 class="mb-3">Opening Hours</h4>
					<p><span class="fas fa-clock mr-2"></span> Monday – Friday : 9am - 6pm</p>
					<p><span class="fas fa-clock mr-2"></span> Saturday and Sunday : 10am - 4pm</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact map and address -->

<!-- Appointment -->
{{-- <section class="appointment" id="appointment">
	<div class="test_agile_info py-5">
		<div class="container py-lg-3">
			<div class="heading text-center">
				<i class="fas fa-cut"></i>
				<h3 class="heading mb-sm-5 mb-3 text-uppercase">Make an Appointment</h3>
			</div>
			<div class="contact_grid_right">
				<form action="#" method="post">
					<div class="contact_left_grid">
						<div class="form-group">
							<input class="form-control" type="text" name="Name" placeholder="Your Name" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="Email" placeholder="Your Email" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
						</div>
						<div class="form-group">
							<input id="datepicker" name="Text" type="text" placeholder="Date Of Appointment" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
						</div>
						<div class="form-group">
							<input id="timepicker" name="time" type="text" placeholder="Time Of Appointment" class="form-control timepicker" required="">
						</div>
						<div class="form-group">
							<textarea id="textarea" placeholder="Your Message Here"></textarea>
						</div>
						<input class="form-control" type="submit" value="Make An Appointment">
					</div>
				</form>
			</div>
		</div>
	</div>
</section> --}}

@endsection