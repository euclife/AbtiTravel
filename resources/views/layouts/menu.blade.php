
	<div class="header_top">
	  <div class="container">
		<div class="row">   
		  <div class="col-md-6 col-sm-6">
			{{-- <p><i class="fa fa-phone"></i> For Support? Call Us: <span>+1 758-673-2214</span></p> --}}
		  </div>
		  <div class="col-md-6 col-sm-6">
			<div class="top_menu">
			  <ul>
				@guest
				  <li class="Travelite_login_alert"><a href="#">Login</a></li>
				  <li class="Travelite_signup_alert"><a href="#">Signup</a></li>
				@else
					<li><a  href="#" ><i class="fa fa-user"></i> {{ Auth::user()->name }} </a>
						  <ul class="sub-menu">
							<li><a href="">Profile</a></li>
							<li><a href="" onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">Logout</a></li>
						  </ul>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						</li>
				@endguest
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	  <!-- popup form Start -->
	  <div class="full_width login_wrapper">
		  <div class="row">
			  <div class="container">
				  <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-6 col-md-offset-6 col-sm-offset-6">
					  <!-- login form start -->
					  <div class="popup_alert_main Travelite_login_form">
						  <div class="login_heading">
							  masuk
							  <span class="close_btn"><i class="fa fa-times"></i></span>
						  </div>
						  <div class="popup_inner">
							  <form method="POST" action="{{ route('login') }}">
							  	@csrf
								  <input type="email" name="email" placeholder="Email"   class="input_login">
								  <input type="password" name="password" placeholder="Password" class="input_login">
								  <input type="checkbox" id="login_check" name="checkbox" class="checkbox_login">
								  <label for="login_check" class="remember_me">Ingat Saya</label>
								  <a href="{{route('password.request')}}" class="forgot_link">Lupa password?</a>
								  <input type="submit" value="Masuk" class="sub_signup">
							  </form>
							  <div class="have_an_acnt">
								  <p>Tidak punya akun?  <a class="Travelite_signup_alert" href="#">Daftar</a></p>
							  </div>
							  <div class="or_line">
								  <span>(Atau)</span>
							  </div>
							  <div class="social_links_login">
								  <ul>
									  <li class="facebook_login"><a href=""><i class="fa fa-address-card"></i>Masuk Sebagai Agen Tour</a></li>
									  <li class="gplus_login"><a href="{{url('login/google')}}"><i class="fa fa-google"></i>Masuk dengan Google</a></li>
								  </ul>
							  </div>
						  </div>
					  </div>
					  <!-- login form  End -->
					  <!-- signup form start -->
					  <div class="popup_alert_main Travelite_signup_form">
						  <div class="login_heading">
							  Daftar
							  <span class="close_btn"><i class="fa fa-times"></i></span>
						  </div>
						  <div class="popup_inner">
							  <form class="signup_form" method="POST" action="{{ route('register') }}">
							  	@csrf
								  <input type="text" name="name" placeholder="Nama" class="input_login">
								  <input type="email" name="email" placeholder="Email"   class="input_login">
								  <input type="password" name="password" placeholder="Password" class="input_login">
								  <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input_login">
								  <input type="checkbox" id="signup_check" name="checkbox" class="checkbox_login">
								  <label for="signup_check" class="remember_me">Saya menyetujui Ketentuan Layanan, Kebijakan Privasi, 
								  Kebijakan Pengembalian Uang, dan Ketentuan Jaminan.</label>
								  <input type="submit" value="Daftar Sekarang" class="sub_signup">
							  </form>
							  <div class="or_line">
								  <span>(Atau)</span>
							  </div>
							  <div class="social_links_login">
								  <ul>

									  <li class="facebook_login"><a href=""><i class="fa fa-address-card"></i>Daftar Sebagai Agen Tour</a></li>
									  <li class="gplus_login"><a href="{{url('login/google')}}"><i class="fa fa-google"></i>Daftar dengan Google</a></li>
								  </ul>
							  </div>
							  <div class="already_member"> sudah punya akun? <a class="Travelite_login_alert" href="#">masuk sekarang</a></div>
						  </div>
					  </div>
					  <!-- signup form  End -->
				  </div>
			  </div>
		  </div>
	  </div>
	  <!-- popup form  End -->
	<div class="header_bottom">
	  <div class="container">
		<div class="row">
		  <div class="col-md-2 col-sm-2">
			<div class="travel_logo">
				<a href="Home_01.html"><img src="{{asset('template/main/svg/Logo.svg')}}" alt="logo" /></a> 
			</div>
		  </div>
		  <div class="col-md-10 col-sm-10"> <a href="javascript:;" class="menu-toggle"></a>
			<div class="main_menu">
			  <ul>
				<li class="@yield('homeActive')"><a href="">Home</a></li>
				 <li><a href="{{url('tour')}}">tours</a>
					 </li>
				<li><a href="">special offers</a></li>
				<li><a href="Contact.html">contact</a></li>
				@guest
				@else
				<li><a href="#"><i class="fa fa-checkout"></i>Checkout</a></li>
				@endguest
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  