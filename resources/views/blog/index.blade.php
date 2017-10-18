@extends('layouts.main')

@section('title')
  Tayo Jays | Blog
@endsection

@section('state_blog')
  active
@endsection

@section('breadcumb_head')
  TAYO JAYS BLOG
@endsection

@section('breadcumb_sub')
  LIGHT the world and SALT the earth
@endsection

@section('content')

			<!-- Blog List -->
		<div class="container-fluid no-padding blog-list">	
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Blog Area -->
					<div class="col-md-9 col-sm-9 col-xs-12 blog-area">
						<div class="">
							<form  action="{{route('handleNewPost')}}" method="post" class="billing-address-form">
								{{csrf_field()}}
								<legend>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<input type="text" class="form-control" name="post_title" placeholder="Add Title" required>
								</div><br><br>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<textarea class="form-control" minlength="100" maxlength="250" rows="5" name="post_description" placeholder="Add description""></textarea>
								</div><br><br>
								<div class="form-group col-md-12 col-sm-12 col-xs-12">
									<textarea class="form-control" minlength="100" rows="10" name="post_content" placeholder="Add Content""></textarea>
								</div><br><br>
								<div class="form-group col-md-4 col-sm-4 col-xs-12">
									<input type="file"  name="post_image" class="form-control">
								</div><br><br>								
								<div class="form-group col-md-12 col-sm-12 col-xs-12" align="center">
									<button class="btn btn-register">Create Post</button>
								</div>
								</legend>
							</form><!-- Booking Details Form/- -->
						</div>						
						@foreach ($allPosts as $post)
						    
						<article>
							<div class="entry-cover">
								<a href="{{ route('postview', $post->post_slug) }}"><img src="images/blog/blog-1.jpg" alt="blog-1"/></a>
								<a href="{{ route('postview', $post->post_slug) }}" class="read-more">Read More</a>
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>Oct</span>
										<span>18</span>
									</div>
									<div class="post-comment">
										<i><img src="images/icon/comment.png" alt="Comment" /></i>
										<span>17</span>
									</div>
									<div class="post-like">
										<i><img src="images/icon/blog-like.png" alt="Comment" /></i>
										<span>13</span>
									</div>							
									<div class="post-share pull-right">
										<a href="#"><i class="fa fa-reply"></i>Reply</a>
										<a href="#"><i><img src="images/icon/share.png" alt="Comment" /></i>Share</a>
									</div>
								</div>						
								<h3 class="entry-title"><a href="{{ route('postview', $post->post_slug) }}">{{$post->post_title}}</a></h3>
								<div class="entry-content">
									<p>{{$post->post_description}}</p>
									<span><a href="{{ route('postview', $post->post_slug) }}" class="read-more">Read More</a></span>
								</div>						
								<div class="entry-footer">
									<div class="post-admin">
										<i><img src="images/icon/admin-ic.png" alt="admin-ic" /></i>Posted by<a href="#">Admin</a>
									</div>
									<div class="tags">
										<i><img src="images/icon/tags.png" alt="Tags" /></i>
										<a href="#">Pets</a>
										<a href="#">Veterinary</a>
										<a href="#">Dog</a>
										<a href="#">Ear</a>
										<a href="#">Cleaning</a>
										<a href="#">Doctor</a>
									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
						@endforeach
						<div class="section-padding"></div>
						<!-- Pagination -->
						<ul class="pagination">					
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&lt;</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&gt;</span>
								</a>
							</li>					
						</ul><!-- Pagination /- -->
					</div><!-- Blog Area/- -->			
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-3 col-xs-12 widget-area">
						<!-- Widget Search -->
						<aside class="widget widget-search">
							<div class="input-group">
								<input type="text" required="" class="form-control" placeholder="Search Post Here...">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</aside><!-- Widget Search /- -->
						<!-- Widget Categories -->
						<aside class="widget widget-categories">
							<div class="widget-title">
								<h3>Post Category</h3>						
							</div>
							<ul class="categories-type">
								<li><a href="#">Friendly Pets</a></li>
								<li><a href="#">Exporting Breeds</a></li>
								<li><a href="#">Hunters Pet</a></li>
								<li><a href="#">All Kind of Birds</a></li>
								<li><a href="#">Seller of the day</a></li>
								<li><a href="#">Breeds of Cats</a></li>
							</ul>
						</aside><!-- Widget Categories /- -->
						<!-- Widget Recent Post -->
						<aside class="widget widget-recent-post">
							<div class="widget-title">
								<h3>Recent Post</h3>						
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images/widget/recent/recent-1.jpg" alt="recent-1"/></a>
								</div>
								<div class="recent-title">
									<a href="#">Like Robinson Crusoe it is Primitive as can be</a>
									<p><span><i class="fa fa-calendar"></i></span>July 29, 2015</p>
								</div>
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images/widget/recent/recent-2.jpg" alt="recent-2"/></a>
								</div>
								<div class="recent-title">
									<a href="#">There's nothing can hold me when I hold you</a>
									<p><span><i class="fa fa-calendar"></i></span>Aug 22, 2015</p>
								</div>
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images/widget/recent/recent-3.jpg" alt="recent-3"/></a>
								</div>
								<div class="recent-title">
									<a href="#">Five passengers set sail that day for a three hour</a>
									<p><span><i class="fa fa-calendar"></i></span>Sep 22, 2015</p>
								</div>
							</div>
						</aside><!-- Widget Recent Post /- -->
						<!-- Widget Archives -->
						<aside class="widget widget-archives">
							<div class="widget-title">
								<h3>Archives</h3>						
							</div>
							<ul class="categories-type">
								<li><a href="#" title="June 2015">June 2015</a><span>18</span></li>
								<li><a href="#" title="July 2015">July 2015</a><span>05</span></li>
								<li><a href="#" title="August 2014">August 2014</a><span>12</span></li>
								<li><a href="#" title="September 2014">September 2014</a><span>24</span></li>
							</ul>
						</aside><!-- Widget Archives /- -->
						<!-- Widget Tags -->
						<aside class="widget widget-tags">
							<div class="widget-title">
								<h3>Popular Tags</h3>						
							</div>
							<div class="tags-content">
								<a href="#" title="Maltese">Maltese</a>
								<a href="#" title="Pit Bull">Pit Bull</a>
								<a href="#" title="Sledge">Sledge</a>
								<a href="#" title="Labrador">Labrador</a>
								<a href="#" title="Baby Pug">Baby Pug</a>
								<a href="#" title="Birds">Birds</a>
								<a href="#" title="Molosseres">Molosseres</a>
								<a href="#" title="Coon hound">Coon hound</a>
							</div>
						</aside><!-- Widget Tags /- -->				
					</div><!-- Widget Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Blog List /- -->

		<!-- Newsletter -->
		<div id="newsletter-section" class="newsletter-section container-fluid no-padding">
			<!-- Container -->
			<div Class="container">
				<div class="row">
					<form>
						<h3>Subscribe Our Newsletter</h3>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div><!-- /input-group -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your E-mail">					
						</div><!-- /input-group -->
						<input type="submit" value="Go" />
					</form>
				</div>
			</div><!-- Container -->
		</div><!-- Newsletter /- -->
		
		<footer class="footer-main">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-about">
							<h3 class="widget-title">about Us</h3>
							<p>Hello we are Comre. We are here to provide you the best offers through our coupons. Hello we are company.</p>
							<ul>
								<li><img src="images/icon/ftr-location.png" alt="Address" />Washington Square Park, <span>NY, United States</span></li>
								<li><img src="images/icon/ftr-customer.png" alt="Phone" /> Customer Support : <span>+ 124 45 76 678</span></li>
								<li><img src="images/icon/ftr-email.png" alt="Mail" /><span>Email :</span><a href="mailto:mail@woodsman.com"> mail@woodsman.com</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-links">
							<h3 class="widget-title">Working Time</h3>
							<ul>
								<li>Monday <span>08:00 am  -  10:00 pm</span></li>
								<li>tuesday <span>08:00 am  -  10:00 pm</span></li>
								<li>wednesday <span>08:00 am  -  10:00 pm</span></li>
								<li>thursday <span>08:00 am  -  10:00 pm</span></li>
								<li>friday <span>08:00 am  -  10:00 pm</span></li>
								<li>Week End <span>CloSed</span></li>
								<li>Emergency Unit <span>Open Any Time</span></li>						
							</ul>
						</aside>
					</div>	
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-subscribe">
							<div class="subscribe-box">
								<h4>Subscribe To Mail!</h4>
								<p>Get our Daily email n.ewsletter with Special Services, Updates, Offers and more</p>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email Address">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">SignUp</button>
									</span>
								</div><!-- /input-group -->
							</div>
							<ul>
								<li><a href="#"><img src="images/icon/ftr-fb.png" alt="ftr" /></a></li>
								<li><a href="#"><img src="images/icon/ftr-g+.png" alt="ftr" /></a></li>
								<li><a href="#"><img src="images/icon/ftr-tumbler.png" alt="ftr" /></a></li>
								<li><a href="#"><img src="images/icon/ftr-dribbble.png" alt="ftr" /></a></li>
								<li><a href="#"><img src="images/icon/ftr-ln.png" alt="ftr" /></a></li>
								<li><a href="#"><img src="images/icon/ftr-tw.png" alt="ftr" /></a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="bottom-footer container-fluid no-padding">		
				<div class="container">
					<div class="row">
						<ul class="col-md-5 pull-left">
							<li><a href="#">Faq</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Client Support</a></li>
						</ul>
						
						<div class="col-md-7 pull-right">
							<p class="copyright">copyrights &copy; 2017 Mice Cab. All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</div><!-- Main Container -->
		
@endsection