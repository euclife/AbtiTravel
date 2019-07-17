@extends('layouts.index')
@section('title','Tours dan Travels Online')

@section('script')
<!--main js file start--> 
<script type="text/javascript" src="{{asset('template/main/js/jquery-1.11.3.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/bootstrap-select.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/datetimepicker/jquery.datetimepicker.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/parallax/jquery.parallax-1.1.3.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/owl/owl.carousel.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/isotope/jquery.isotope.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/bxslider/jquery-bxslider.js')}}"></script> 
<!-- pie chart js -->
<script type="text/javascript" src="{{asset('template/main/js/plugin/pie-circle/circles.js')}}"></script> 
<!-- pie chart js -->
<!--counter js-->
<script type="text/javascript" src="{{asset('template/main/js/plugin/counter/jquery.countTo.js')}}">
</script>
 <!--counter js-->
<script type="text/javascript" src="{{asset('template/main/js/plugin/counter/jquery.countdown.js')}}">
</script>
	<!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/jquery.themepunch.tools.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/jquery.themepunch.revolution.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.layeranimation.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.navigation.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.slideanims.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.actions.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.parallax.min.js')}}">
    </script>
    <!-- REVOLUTION JS FiLES -->
	<!-- video_popup -->
	<script type="text/javascript" src="{{asset('template/main/js/plugin/video-popup/jquery.magnific-popup.js')}}">
    </script>
	<!-- video_popup -->
	<!-- slick slider -->
	<script type="text/javascript" src="{{asset('template/main/js/plugin/slick/jquery-migrate-1.2.1.min.js')}}">
    </script>
	<script type="text/javascript" src="{{asset('template/main/js/plugin/slick/slick.min.js')}}"></script>
	<!-- slick slider -->
	<!-- video player js -->
	<script src="{{asset('template/main/js/plugin/video_player/mediaelement-and-player.min.js')}}"></script>
	<!-- video player js -->
	<!-- pricefilter -->
	<script src="{{asset('template/main/js/plugin/jquery-ui/jquery-ui.js')}}"></script>
	<!-- pricefilter-->
	<script type="text/javascript" src="{{asset('template/main/js/custom.js')}}"></script> 
	<!--main js file end-->
@endsection

@section('content')
    <div class="clearfix"></div>
	<!-- Home first slider start -->
	<div class="slider_tab_main">
  <div class="full_width home_slider">
	  <div class="example">
		  <article class="content" style="width:100%; float:left;">
			  <div id="rev_slider_116_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="layer-animations" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
				  <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
				  <div id="rev_slider_116_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
					  <ul style="width:100% !important;">
						  <!-- SLIDE  -->
						  <li data-index="rs-391" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Smooth Mask" data-description="">
							  <!-- MAIN IMAGE -->
							  <img src="{{asset('asset/image/Grenada-travel-41364718-1600-670.jpg')}}" alt="slide2" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							  <!-- LAYERS -->
							  <!-- LAYER NR. 1 -->
							  <div class="slider_left_part">
								  <div class="tp-caption NotGeneric-Title slideheading  tp-resizeme" id="slide-391-layer-1" data-x="100" 
								  data-hoffset="" data-y="center" data-voffset="-30" data-width="['auto','auto','auto','auto']" 
								  data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" 
								  data-transform_in="x:left;s:2000;e:Power4.easeInOut;" 
								  data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" 
								  data-splitin="none" data-splitout="none" data-responsive_offset="on" 
								  style=" z-index: 8;">
									  <h4 style="font-size:20px; color: white;">Nikmati perjalanan besar</h4>
									  <h3 style="font-size:30px; color: white;">Keliling dunia</h3>
									  <p style="font-size:13px; color: white; line-height:15px; border-bottom:1px solid #333333;padding-bottom: 19px;">
										Bersiaplah untuk petualangan baru dengan Wisatawan, Wisatawan<br/>
									 	 bekerja keras untuk mengamankan tarif hotel terbaik di tujuan paling .<br/>
										populer.</p>
										<div class="slider_buttons">
											<a href="#"  style=" border: 1px solid #fdb714; color: white;" class="large_slide_btn">Detail</a>
											<a href="#"  style=" border: 1px solid #fdb714; color: white;" class="large_slide_btn">pesan sekarang</a>
											
										</div>
									  
								  </div>
								  <!-- LAYER NR. 3 -->
								  
								  <!-- LAYER NR. 4 -->
							  </div>
						  </li>
						  <!--slide-->
						  <li data-index="rs-392" data-transition="parallaxhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide Mask" data-description="">
							  <!-- MAIN IMAGE -->
							  <img src="{{asset('asset/image/Book_your_trip.jpg')}}" alt="slide3" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							  <!-- LAYER NR. 1 -->
							  <div class="slider_left_part">
								  <div class="tp-caption NotGeneric-Title slideheading  tp-resizeme" id="slide-392-layer-1" data-x="100" 
								  data-hoffset="" data-y="center" data-voffset="-30" data-width="['auto','auto','auto','auto']" 
								  data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" 
								  data-transform_in="x:left;s:2000;e:Power4.easeInOut;" 
								  data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1000" 
								  data-splitin="none" data-splitout="none" data-responsive_offset="on" 
								  style=" z-index: 8;">
									  <h4 style="font-size:20px; color: white;">Nikmati perjalanan besar</h4>
									  <h3 style="font-size:30px; color: white;">Keliling dunia</h3>
									  <p style="font-size:13px; color: white; line-height:15px; border-bottom:1px solid #333333;padding-bottom: 19px;">
										Bersiaplah untuk petualangan baru dengan Wisatawan, Wisatawan<br/>
									 	 bekerja keras untuk mengamankan tarif hotel terbaik di tujuan paling .<br/>
										populer.</p>
										<div class="slider_buttons">
											<a href="#"  style=" border: 1px solid #fdb714; color: white;" class="large_slide_btn">Detail</a>
											<a href="#"  style=" border: 1px solid #fdb714; color: white;" class="large_slide_btn">pesan sekarang</a>
											
										</div>
									  
								  </div>
								  <!-- LAYER NR. 3 -->
								  
								  <!-- LAYER NR. 4 -->
							  </div>
						  </li>
						  <!--slide-->
					  </ul>
				  </div>
			  </div>
			  <!-- END REVOLUTION SLIDER -->
		  </article>
	  </div>
	  <!-- section end -->
  </div>
	<!-- Home first slider End -->
	<div class="home_tabs_search">
	<div class="full_width slider_form_main">
	 <div class="container">
	 <div class="row">
	 <div class="col-lg-12">
		<div class="slider_tabs">
            <div class="wsa_tab">
				<ul>
					<li> <a href="#building_search"><i class="fa fa-building-o"></i></a> </li>
					<li> <a href="#plane_search"> <i class="fa fa-plane"></i></a> </li>
					<li> <a href="#car_search"><i class="fa fa-car"></i></a> </li>
					<li> <a href="#local_hospital_search"> <i class="fa fa-hospital-o"></i></a></li>
				</ul>
            </div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="full_width slider_content_wrap">
			<div class="container">
			 <!-- first content_start -->
            <div id="building_search" class="main_content_form">
			 <!-- tab_search form start -->
			 <form>
				<div class="pull_left destination_field">
				 <label>destination</label>
					<input type="text" placeholder="Enter Destination">
				</div>
				<div class="pull_left check_in_field">
				<label>check in</label>
					<input type="text" id="Check_in_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left check_in_field">
				<label>check out</label>
				<input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left room_select_field">
				<label>rooms</label>
					<select  class="form-control selectpicker" data-live-search="true" id="search_rooms" >
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>
				<div class="pull_left room_select_field">
					<label>adults</label>
					<select  class="form-control selectpicker" data-live-search="true" id="search_adults" >
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>
				<div class="pull_left room_select_field ">
					<label>kids</label>
					<select class="form-control selectpicker" data-live-search="true" id="search_kids">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i> 
				</div>
				<div class="pull_left submit_field">
					<input type="search" placeholder="SEARCH" class="search_tabs">
					<button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
				</div>
				</form>
				<!-- tab_search form End -->
            </div>
			<!-- first content_end -->
            <div id="plane_search" class="main_content_form">
				<!-- tab_search form start -->
				<form>
					<div class="pull_left destination_field">
						<label>destination</label>
						<input type="text" placeholder="Enter Destination">
					</div>
					<div class="pull_left check_in_field">
						<label>check in</label>
						<input type="text" id="Check_in_date_tab_flight" placeholder="dd/mm/yyyy">
						<i class="fa fa-calendar"></i>
					</div>
					<div class="pull_left check_in_field">
						<label>check out</label>
						<input type="text" id="Check_out_date_tab_flight" placeholder="dd/mm/yyyy">
						<i class="fa fa-calendar"></i>
					</div>
					<div class="pull_left room_select_field">
						<label>rooms</label>
						<select  class="form-control selectpicker" data-live-search="true" id="search_rooms2" >
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
						</select>
						<i class="fa fa-caret-down"></i>
					</div>
					<div class="pull_left room_select_field">
						<label>adults</label>
						<select  class="form-control selectpicker" data-live-search="true" id="search_adults2" >
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
						</select>
						<i class="fa fa-caret-down"></i>
					</div>
					<div class="pull_left room_select_field">
						<label>kids</label>
						<select class="form-control selectpicker" data-live-search="true" id="search_kids2">
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
						</select>
						<i class="fa fa-caret-down"></i> 
					</div>
					<div class="pull_left submit_field">
						<input type="search" placeholder="SEARCH" class="search_tabs">
						<button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
					</div>
				</form>
				<!-- tab_search form End -->
				</div>
				<div id="car_search" class="main_content_form">
					<!-- tab_search form start -->
					<form>
						<div class="pull_left destination_field">
							<label>destination</label>
							<input type="text" placeholder="Enter Destination">
						</div>
						<div class="pull_left check_in_field">
							<label>check in</label>
							<input type="text" id="Check_in_date_tab_car" placeholder="dd/mm/yyyy">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="pull_left check_in_field">
							<label>check out</label>
							<input type="text" id="Check_out_date_tab_car" placeholder="dd/mm/yyyy">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>rooms</label>
							<select  class="form-control selectpicker" data-live-search="true" id="search_rooms3" >
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>adults</label>
							<select  class="form-control selectpicker" data-live-search="true" id="search_adults3" >
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>kids</label>
							<select class="form-control selectpicker" data-live-search="true" id="search_kids3">
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i> 
						</div>
						<div class="pull_left submit_field">
							<input type="search" placeholder="SEARCH" class="search_tabs">
							<button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
						</div>
					</form>
					<!-- tab_search form End -->
				</div>
				<div id="local_hospital_search" class="main_content_form">
					<!-- tab_search form start -->
					<form>
						<div class="pull_left destination_field">
							<label>destination</label>
							<input type="text" placeholder="Enter Destination">
						</div>
						<div class="pull_left check_in_field">
							<label>check in</label>
							<input type="text" id="Check_in_date_tab_hospital" placeholder="dd/mm/yyyy">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="pull_left check_in_field">
							<label>check out</label>
							<input type="text" id="Check_out_date_tab_hospital" placeholder="dd/mm/yyyy">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>rooms</label>
							<select  class="form-control selectpicker" data-live-search="true" id="search_rooms4" >
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>adults</label>
							<select  class="form-control selectpicker" data-live-search="true" id="search_adults4" >
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
						<div class="pull_left room_select_field">
							<label>kids</label>
							<select class="form-control selectpicker" data-live-search="true" id="search_kids4">
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
							</select>
							<i class="fa fa-caret-down"></i> 
						</div>
						<div class="pull_left submit_field">
							<input type="search" placeholder="SEARCH" class="search_tabs">
							<button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
						</div>
					</form>
					<!-- tab_search form End -->
				</div>
		</div>
		</div>
	</div>
	</div> <!-- slider_tab_main end -->
	<div class="full_width Travelite_world_section">
		<div class="container">
			<div class="row">
			
				<div class="heading_team">
					<h3>the world by type</h3>
					<p>Create stunning pages with our powerful admin panel. Functionality and usability combine. Travelllers Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals</p>
				</div>
				
						<div class="full_width rectangle_wrapper">
							@foreach($cat as $key)
								<div class="col_25 ractangle_box_cover">
								    	<div class="circle_icon">
										<i class="{{ $key->icon }} big_circle"></i>
										</div>
										<div class="full_width ractangle_inner">
										<img src="{{ asset('asset/image/'.$key->gambar) }}" alt="{{ $key->inisial }}">
										<div class="inner_ovelay">
											<h4>{{ $key->nama_kategori }}</h4>
											<p>8 tours available</p>
											</div>
										</div>
										<div class="circle_icon">
										<a href="{{ url('category/'.$key->inisial) }}" class="fa fa-arrow-right small_circle"></a>
									</div>
								</div>
							@endforeach
					</div>
			
			</div>
		</div>
	</div>
<!-- counter section End -->
   <!-- feature section start -->
	  <!-- slider_tab_main end -->
	  <div class="full_width Travelite_feature_section">
		  <div class="container">
			  <div class="row">
			  <div class="col-lg-3 col-md-3 col-sm-6">
				<div class="feature_box first_box">
					<h3 class="Travelite_heading_feature">features</h3>
					<p>Create stunning pages with our powerful admin </p>
				</div>
			  </div>
				  <div class="col-lg-3 col-md-3 col-sm-6 feature_box_wrapper">
					  <div class="feature_box ">
					      <div class="feature_box_content">
						  <i class="fa fa-usd"></i>
						  <h4 class="feature_title">price guarantee</h4>
						  </div>
						  <div class="feature_overlay">
							  <h4>price guarantee</h4>
							  <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration </p>
						  </div>
					  </div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-6 feature_box_wrapper">
					  <div class="feature_box ">
					  <div class="feature_box_content">
						 <i class="fa fa-lock"></i>
						 <h4 class="feature_title">trust & safety</h4>
						 </div>
						 <div class="feature_overlay">
						 <h4>trust & safety</h4>
						 <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration </p>
						 </div>
							
					  </div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-6 feature_box_wrapper">
					  <div class="feature_box ">
					    <div class="feature_box_content">
						  <i class="fa fa-thumbs-up"></i>
						   <h4 class="feature_title">good guidance</h4>
						   </div>
						  <div class="feature_overlay">
							  <h4>good guidance</h4>
							  <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration </p>
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	 </div>
   <!-- feature section end -->
   
   <!-- honeymoon package section start -->
	  <div class="full_width Travelite_package_section">
		  <div class="container">
			  <div class="row">
			  <div class="col-lg-5 col-md-6 col-sm-12">
				<div class="left_side_packages_part">
					<div class="packages_heading_para">
						<h3>Best Honeymoon Packages</h3>
						<p>Create stunning pages with our powerful admin panel. Functionality and usability combine. Travelllers Deals and Offers on
						</p>
					</div>
					
					<div class="full_width hnmn_packages">
						<div class="hnmn_pack_thumb">
								<img src="http://placehold.it/200x186/222222" alt="honeymoon-thumb">
							
							 <!-- overlay start-->
							 <div class="overlay_package">
							 <a href="#">
								<i class="fa fa-plus"></i>
								</a>
							 </div>
 							 <!-- overlay end-->
						</div>
						
						<div class="hnmn_pack_content">
							<h4 class="package_title">perth, australia</h4>
								<p>Create stunning pages with our powerful admin panel. Functionality and usability combine.
								Travelllers Deals and Offers on</p>
								<a href="#" class="black_btn all_pack_btn">see all packs</a>
							
						</div>
					</div>
					
					<div class="full_width hnmn_packages">
						<div class="hnmn_pack_thumb">
							<img src="http://placehold.it/200x186/222222" alt="honeymoon-thumb">
							
							<!-- overlay start-->
							<div class="overlay_package">
								<a href="#">
									<i class="fa fa-plus"></i>
								</a>
							</div>
							<!-- overlay end-->
						</div>
						
						<div class="hnmn_pack_content">
							<h4 class="package_title">perth, australia</h4>
							<p>Create stunning pages with our powerful admin panel. Functionality and usability combine.
							Travelllers Deals and Offers on</p>
							<a href="#" class="black_btn all_pack_btn">see all packs</a>
							
						</div>
					</div>
					
					<div class="full_width hnymn_package_button">
						<a href="#">buy now</a>
						<a href="#">more details</a>
					</div>
					
				</div>
			  </div>
				  <div class="col-lg-7 col-md-6 col-sm-12">
					  <div class="right_side_img">
						<img src="http://placehold.it/713x734" alt="couple image" class="img-responsive">
					  </div>
				  </div>
			  </div>
		  </div>
      </div>
   <!-- honeymoon package section start -->
   
	  <!-- count-down section start -->
	  <div class="full_width counter_section">
		  <div class="container">
			  <div class="row">
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="timer" id="counter1" data-to="1580" data-delay="100" data-speed="3000">1580</div>
					  <div class="chart" data-animated="bounceIn" data-delay="100">
						  <div class="percentage-light" data-percent="80">
							  <i class="fa fa-globe"></i>
						  </div>
						  <div class="counter_title">places to visit the world</div>
					  </div>
				  </div>
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="timer" id="counter2" data-to="1240" data-delay="100" data-speed="3000">1240</div>
					  <div class="chart" data-animated="bounceIn" data-delay="100">
						  <div class="percentage_blue" data-percent="90">
							  <i class="fa fa-plane"></i>
						  </div>
						  <div class="counter_title">airlines to travel</div>
					  </div>
				  </div>
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="timer" id="counter3" data-to="3850" data-delay="100" data-speed="3000">3850</div>
					  <div class="chart" data-animated="bounceIn" data-delay="100">
						  <div class="percentage_red" data-percent="85">
							  <i class="fa fa-car"></i>
						  </div>
						  <div class="counter_title">vip transport options</div>
					  </div>
				  </div>
				  
				  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					  <div class="timer" id="counter4" data-to="3850" data-delay="100" data-speed="3000">3850</div>
					  <div class="chart" data-animated="bounceIn" data-delay="100">
						  <div class="percentage_skyblue" data-percent="70">
							  <i class="fa fa-building-o"></i>
						  </div>
						  <div class="counter_title">amazing hotels to stay</div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
	  <!-- count-down section End -->
	  
	  
	  <!-- subscribe section start -->
	  <div class="full_width home_subscribe_section">
	  <div class="icon_circle_overlay"></div>
		  <div class="container">
			  <div class="row">
			   <div class="col-lg-12">
			   <div class="subscribe_middle_part">
			     <h3>Wanna Know Our Latest Offers and Deals Just Subcscribe Here</h3>
				   <div class="sbuscribe_widget_middle">
					   <input type="text" placeholder="ENTER YOUR EMAIL ID HERE" class="send_email">
					   <input type="submit" class="submit_subscribe">
				   </div>
				 
			    </div>
			  </div>
			  </div>
		  </div>
      </div>
<!-- subscribe section End -->
  

	

@endsection