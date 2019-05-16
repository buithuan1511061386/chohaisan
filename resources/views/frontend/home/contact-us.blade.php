@extends('frontend.master.index')
@section('title','Contact')
@section('body')
		<!-- Page Banner -->
		<div class="page-banner contact-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h3>Contact</h3>
				<p>These Happy Days are yours and mine Happy Days! The movie star</p>
				<p>the professor and Mary Ann here on Gilligans Isle. </p>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>				
					<li class="active">Contact</li>
				</ol>
			</div><!-- Container /- -->
			<!-- Shape -->
			<div class="banner-shape container-fluid no-padding">
				<div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
					<div class="left-shape-blue">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>	
					<div class="left-shape">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
					<div class="right-shape-blue">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
								<polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
							</clipPath>
						</svg>
					</div>	
					<div class="right-shape">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
								<polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
			</div><!-- Shape -->
		</div><!-- Page Banner /- -->
		
		<!-- Container -->
		<div class="container">
			<!-- Contact Us -->
			<div class="contact-us">
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-map-marker"></i>
						<span>Address</span>
						<p>E-44, Design Street, Web Corner,</p>
						<p>Melbourne - 005</p>
					</div>				
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-mobile"></i>
						<span>Phone</span>
						<p>(+1) 1800 457 678</p>
						<p>(+2) 1800 458 678</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-envelope"></i>
						<span>Email</span>
						<p><a title="Mailto" href="mailto:support@maxihealth.com">support@maxihealth.com</a></p>
						<p><a title="Mailto" href="mailto:info@maxihealth.com">info@maxihealth.com</a></p>
					</div>
				</div>
			</div><!-- Contact Us /- -->
		</div><!-- Container /- -->
		
		<!-- Map Section -->
		<div class="map container-fluid no-padding">
			<div class="map-canvas" id="map-canvas-contact" data-lat="-37.818415" data-lng="144.989050" data-string="E-44, Design Street, Web Corner, Melbourne - 005" data-zoom="12"></div>
		</div><!--  Map Section /- -->
		
		<!-- Container -->
		<div class="container">
			<!-- Enquiry Us -->
			<div class="leave-comment enquiry-us">
				<h3 class="section-heading">Enquiry Us</h3>			
				<form id="contact-form" class="comment-form enquiry-form"  method="post">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Name*</label>
								<input type="text" name="contact-name" class="form-control" id="input_name" required/>
							</div>
							<div class="form-group">
								<label>E-Mail*</label>
								<input type="email" name="contact-email" class="form-control" id="input_email" required/>
							</div>
							<div class="form-group">
								<label>Phone Number*</label>
								<input type="text" name="contact-phone" class="form-control" id="input_phone" required/>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control" name="contact-message" id="textarea_message" ></textarea>
							</div>
							<div class="form-group">
								<input type="submit"  value="Contact Now" id="btn_submit" name="post">
							</div>
							<div id="alert-msg" class="alert-msg"></div>
						</div>
					</div>
				</form>
			</div><!-- Enquiry Us /- -->
		</div><!-- Container /- -->
@endsection