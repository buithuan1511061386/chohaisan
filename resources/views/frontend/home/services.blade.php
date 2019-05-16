@extends('frontend.master.index')
@section('title','Services')
@section('body')
		<!-- Page Banner -->
		<div class="page-banner services-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h3>Services</h3>
				<p>Sedut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
				<p>doloremque laudantium, totam rem aperiam</p>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Services</li>
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
		
		<!-- Departments Section -->
		<div class="container-fluid no-padding department-section">
			<div class="we-are-best col-md-6 col-sm-12 no-padding">
				<div class="section-header">
					<h3>Why We Are Best</h3>
					<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum delaut eniti atque corrupti quos dolores et quas.</p>
				</div>
				<div class="we-are-best-block">
					<div class="we-are-best-icon">
						<img src="{{asset('public/frontend/images/dp-icon-1.png')}}" alt="dp-icon-1"/>
					</div>
					<div class="we-are-best-content">
						<h3>Free Medical Counseling</h3>
						<p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores euas molestias excepturi sint occaecati cupiditate.</p>
					</div>
				</div>
				<div class="we-are-best-block">
					<div class="we-are-best-icon">
						<img src="{{asset('public/frontend/images/dp-icon-2.png')}}" alt="dp-icon-2"/>
					</div>
					<div class="we-are-best-content">
						<h3>Well Experienced Doctors</h3>
						<p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores euas molestias excepturi sint occaecati cupiditate.</p>
					</div>
				</div>
				<div class="we-are-best-block">
					<div class="we-are-best-icon">
						<img src="{{asset('public/frontend/images/dp-icon-3.png')}}" alt="dp-icon-3"/>
					</div>
					<div class="we-are-best-content">
						<h3>Online Bill Payment</h3>
						<p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores euas molestias excepturi sint occaecati cupiditate.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 departments no-padding">
				<div class="departments-bg">
					<img src="{{asset('public/frontend/images/departments-bg.jpg')}}" alt="departments-bg"/>
				</div>
				<div class="section-header">
					<h3>Hospital Departments</h3>
				</div>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading1">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-1" aria-expanded="true">
									Ophthalmology Clinic<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="dept-heading1">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading2">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-2" aria-expanded="false">
									Cardiac Clinic<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="dept-heading2">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading3">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-3" aria-expanded="false">
									Outpatient Surgery<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="dept-heading3">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading4">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-4" aria-expanded="false">
									Pediatric Clinic<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="dept-heading4">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading5">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-5" aria-expanded="false">
									Gynaecological Clinic<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="dept-heading5">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="dept-heading6">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dept-type-6" aria-expanded="false">
									Ophthalmology Clinic<i class="fa fa-plus pull-right"></i>
								</a>
							</h4>
						</div>
						<div id="dept-type-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="dept-heading6">
							<div class="panel-img">
								<img src="{{asset('public/frontend/images/panel-img-1.jpg')}}" alt="panel-img"/>
							</div>
							<div class="panel-body">
								<p>Blanditiis praesentium voluptatum delniti atque corrupti quos dlores quas molestias excepturi sint occaecati cupiditate non provident siili sunt in culpa qui officia deserunt.</p>
								<a href="#">More Details<i class="fa fa-plus"></i></a>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Departments Section /- -->
		
		<!-- Latest News -->
		<div class="container-fluid no-padding latest-news">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Recent tips & News</h3>
					<a href="#">view More Post<i class="fa fa-plus"></i></a>
				</div><!-- Section Header /- -->
				<div class="row">
					<article class="col-md-6 col-sm-12 col-xs-12">	
						<div class="entry-header">
							<div class="entry-cover">
								<a href="#"><img src="{{asset('public/frontend/images/latest-news-1.jpg')}}" alt="latest-news"/></a>
								<a href="#" class="read-more"><i class="fa fa-link"></i>Read More</a>
							</div>
						</div>
						<div class="entry-content">	
							<div class="entry-meta">
								<a href="#"><i class="fa fa-comment-o"></i>Comments<span>(12)</span></a>
								<a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(11)</span></a>
								<a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(12)</span></a>
							</div>
							<h3 class="entry-title"><a href="#">Latest Blog new Slider Image Post</a></h3>
							<div class="post-meta">
								<a href="#" title="25th sep 2015" class="post-date">25th sep 2015</a> by
								<a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
							</div>
							<p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam [...] </p>
						</div>
					</article>
					<article class="col-md-6 col-sm-12 col-xs-12">	
						<div class="entry-header">
							<div class="entry-cover">
								<a href="#"><img src="{{asset('public/frontend/images/latest-news-2.jpg')}}" alt="latest-news"/></a>
								<a href="#" class="read-more"><i class="fa fa-link"></i>Read More</a>
							</div>
						</div>
						<div class="entry-content">	
							<div class="entry-meta">
								<a href="#"><i class="fa fa-comment-o"></i>Comments<span>(18)</span></a>
								<a href="#"><i class="fa fa-heart-o"></i>Favorite<span>(16)</span></a>
								<a href="#"><i class="fa fa-share-alt"></i>Share Post<span>(13)</span></a>
							</div>
							<h3 class="entry-title"><a href="#">Plan the most effective strategy</a></h3>
							<div class="post-meta">
								<a href="#" title="30th sep 2015" class="post-date">30th sep 2015</a> by
								<a href="#" title="Mathov" class="post-admin">Mathov</a> in Hospital
							</div>
							<p>Voluptatem accusantium dolormque laudantium sa tota rem aperiam, eaque ipsa dicta sunt explicabo nemo enim ipsam [...] </p>
						</div>
					</article>
				</div>	
			</div><!-- Container /- -->
		</div><!-- Latest News /- -->
@endsection