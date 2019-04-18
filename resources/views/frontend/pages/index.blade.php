@extends('frontend.master')

@section('content')
    <section class="home-slider js-fullheight owl-carousel bg-white">
		@foreach($slider as $item_slider)
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url({{asset('storage/'.$item_slider->image)}});">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">{{$item_slider->name}}</h1>
		            <p>{{$item_slider->title}}</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url({{asset('images/menu-1.jpg')}});"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url({{asset('images/menu-2.jpg')}});"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url({{asset('images/menu-3.jpg')}});"></div>
		            		<h4>Australian Organic Beef</h4>
		            	</a>
		            </div>
		            <p><a href="{{$item_slider->url}}" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>
			@endforeach
    </section>
        <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					@foreach($about as $item_about)
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url({{asset('images/about.jpg')}}); position: relative">
						<a href="{{$item_about->url}}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
  						<span class="ion-ios-play"></span>
  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">{{$item_about->title}}</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>{!! $item_about->content !!}</p>
							<h3 class="mt-5">Special Recipe</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url({{asset('storage/'.$item_about->image_1)}});"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url({{asset('storage/'.$item_about->image_2)}});"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url({{asset('storage/'.$item_about->image_3)}});"></div>
	            		<h4>Australian Organic Beef</h4>
	            	</a>
	            </div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('images/bg_4.jpg')}});" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Chisi20</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Breakfast</h3>
        		</div>
						@foreach($breakfast as $item_breakfast)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_breakfast->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_breakfast->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_breakfast->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_breakfast->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Lunch</h3>
        		</div>
						@foreach($lunch as $item_lunch)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_lunch->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_lunch->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_lunch->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_lunch->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Dinner</h3>
        		</div>
						@foreach($dinner as $item_dinner)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_dinner->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_dinner->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_dinner->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_dinner->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>

        	<!--  -->
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Desserts</h3>
        		</div>
						@foreach($desserts as $item_desserts)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_desserts->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_desserts->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_desserts->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_desserts->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>
        	
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Wine Card</h3>
        		</div>
						@foreach($wine_card as $item_wine_card)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_wine_card->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_wine_card->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_wine_card->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_wine_card->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Drinks</h3>
        		</div>
						@foreach($drinks as $item_drinks)
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url({{asset('storage/'.$item_wine_card->image_3)}});"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{$item_wine_card->title}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{number_format($item_wine_card->price)}} VND</span>
	                </div>
	              </div>
	              <p><span>{{$item_wine_card->excerpt}}</span></p>
              </div>
            </div>
            @endforeach
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-black py-3 px-5">View All Menu</a></p>
        	</div>
        </div>
    	</div>

    </section>

    <section class="ftco-section testimony-section" style="background-image: url({{asset('images/bg_5.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('images/person_4.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{asset('images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Chef</span>
            <h2 class="mb-4">Our Mater Chef</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url({{asset('images/chef-4.jpg')}});"></div>
							<div class="text px-4 pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">CEO, Co Founder</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url({{asset('images/chef-2.jpg')}});"></div>
							<div class="text px-4 pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url({{asset('images/chef-3.jpg')}});"></div>
							<div class="text px-4 pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url({{asset('images/chef-1.jpg')}});"></div>
							<div class="text px-4 pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url({{asset('images/bg_6.jpg')}});"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Book a Table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>

@endsection