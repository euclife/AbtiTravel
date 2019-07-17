@extends('layouts.index')
@section('title','Tours dan Travels Online')

@section('script')
<!--Page main section end--> 
<!--main js file start--> 
<script type="text/javascript" src="{{asset('template/main/js/jquery-1.11.3.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/bootstrap.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/bootstrap-select.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/datetimepicker/jquery.datetimepicker.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/parallax/jquery.parallax-1.1.3.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/owl/owl.carousel.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/isotope/jquery.isotope.js') }}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/bxslider/jquery-bxslider.js') }}"></script> 
<!-- pie chart js --> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/pie-circle/circles.js') }}"></script> 
<!-- pie chart js --> 
<!--counter js--> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/counter/jquery.countTo.js') }}"></script> 
<!--counter js--> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/counter/jquery.countdown.js')}}"></script> 
<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/jquery.themepunch.tools.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/jquery.themepunch.revolution.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.slideanims.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/revolution/js/revolution.extension.parallax.min.js')}}"></script> 
<!-- REVOLUTION JS FiLES --> 
<!-- video_popup --> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/video-popup/jquery.magnific-popup.js')}}"></script> 
<!-- video_popup --> 
<!-- slick slider --> 
<script type="text/javascript" src="{{asset('template/main/js/plugin/slick/jquery-migrate-1.2.1.min.js')}}"></script> 
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
 
    <!--page title Start-->
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(http://placehold.it/1599x640);">
      <ul>
        <li><a href="javascript:;">Tour package - booking</a></li>
      </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>
    <div class="full_width destinaion_sorting_section">
      <div class="container">
        <div class="row space_100"> 
          <!-- left sidebar start --> 
          <!-- left sidebar end --> 
          <!-- right main start -->
          <div class="col-lg-12">
            <div class="tour_package_booking_section"> 
              <!-- package tabs start -->
              <div id="tour_booking_tabs"> 
                <!-- tabs start -->
                <div class="tour_booking_tabs">
                  <ul>
                    <li><a href="#booking_details">Booking Details</a></li>
                    <li><a href="#personal_info">Personal Info</a></li>
                    <li><a href="#payment_info">Payment Info</a></li>
                    <li><a href="#confirmation">Confirmation</a></li>
                  </ul>
                </div>
                <!-- tabs end --> 
                <!-- booking_details Start -->
                <div id="booking_details" class="main_content_area hotel_main_content">
                  <div class="inner_container"> 
                    <!--  tab inner section two Start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>tour Details</h5>
                        <span></span> </div>
                      <div class="tab_inner_body full_width">
                        <div class="col-lg-9 col-md-9"> 
                          <!--  review area start -->
                          <div class="tab_review_area"> <img src="{{ asset('upload/img/'.$data->foto_highlit) }}" alt="review image">
                            <div class="review_content">
                              <div class="top_head_bar">
                                <h4>{{ $data->nama_tour }}</h4>
                                <span class="country_span">Australlia</span> </div>
                              <div class="review_star_cover">
                                <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <span>345 Reviews</span> </div>
                            </div>
                          </div>
                          <!--  review area end --> 
                        </div>
                        <div class="right_includes_hotel col-lg-3 col-md-3">
                          <div class="check_in_out_wrap">
                            <div class="check_in">
                              <label>Keberangkatan</label>
                              <div class="check_in_box"> <span class="day">{{ date('D', strtotime($data->tgl_keberangkatan)) }}</span> <span class="date">{{ date('d', strtotime($data->tgl_keberangkatan)) }}</span> <span class="month">{{ date('M', strtotime($data->tgl_keberangkatan)) }}</span> </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- tab include area Start -->
                        <div class="inludes_hotel_booking">
                          <div class="left_lists col-lg-6 col-md-6">
                            <table>
                              <tr>
                                <td class="label_list">Orang</td>
                                <td>-</td>
                                <td>{{ $orang }}</td>
                              </tr>
                            </table>
                          </div>
                          <div class="left_lists col-lg-6 col-md-6">
                            <div class="table_bold">

                              <table>
                                <tr>
                                  <td class="label_list">harga</td>
                                  <td>-</td>
                                  <td class="bold">Rp. {{ number_format($data->biaya) }}</td>
                                </tr>
                              </table>
                            
                            </div>
                          </div>
                        </div>
                        <!-- tab include area End --> 
                      </div>
                      <!--  tab inner body  End--> 
                      
                    </div>
                    <!-- tab inner section end --> 
                    
                  </div>
                  <!--  inner_container --> 
                  
                  <!-- total row Start-->
                  <div class="full_width total_price_row">
                    <p>Total Harga - </p>
                    <h2> Rp. {{ number_format($total) }}</h2>
                  </div>
                  <!-- total row End--> 
                  
                  <!-- proceed button -->
                  <div class="full_width t_align_c">
                    <button type="submit" value="proceed to next step" class="btn_green proceed_buttton btns">proceed to next step</button>
                  </div>
                  <!-- proceed button --> 
                </div>
                <!-- booking_details End --> 
                <!-- personal_info Start -->
                <div id="personal_info" class="main_content_area hotel_main_content"> 
                  <!--  tab inner section three Start -->
                  <div class="inner_container">
                    <form class="package_booking_main">
                      <div class="tab_inner_section inner_section_2 hotel_inner_section">
                        <div class="tab_inner_body full_width"> 
                          <!--  package_booking_form start -->
                          <div class="package_booking_form">
                            <div class="col-md-12">
                              <input type="text" placeholder="First Name" name="firstname" class="booking_input" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col-md-12">
                              <input type="email" placeholder="Email" name="email" class="booking_input" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Address" name="Address" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Town/City" name="Cofirm_Email" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Zip Code" name="zip_code" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Country" name="country_code" class="booking_input">
                            </div>
                            <div class="col-lg-12">
                              <textarea placeholder="Special Requirement" class="booking_textarea" ></textarea>
                            </div>
                          </div>
                          <!--  package_booking_form END --> 
                        </div>
                        <!--  tab_inner_body end -->
                        
                        <div class="checkbox_book top_margin">
                          <input id="check1" type="checkbox" name="check" value="check1">
                          <label for="check1">I want receive Travelite promotional and offers in the future</label>
                        </div>
                      </div>
                      <!--  tab inner three section End --> 
                      <!-- proceed button -->
                      <div class="full_width t_align_c">
                        <button type="submit" value="proceed to next step" class="btn_green proceed_buttton btns">proceed to next step</button>
                      </div>
                      <!-- proceed button -->
                    </form>
                  </div>
                  <!--  inner container end --> 
                </div>
                <!-- personal_info End --> 
                <!-- payment_info Start -->
                <div id="payment_info" class="main_content_area hotel_main_content"> 
                  <!-- inner_container Start -->
                  <div class="inner_container"> 
                    <!--  tab inner three section Start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>Detail Pembayaran</h5>
                      </div>
                      <!--  tab_inner_body Start-->
                      <div class="tab_inner_body full_width">
                        <div class="payment_details_main"> 
                          <!-- Review content main -->
                          <div class=" col-lg-8 col-md-8 review_content">
                            <div class="top_head_bar">
                              <h4>{{ $data->nama_tour }} </h4>
                              <span class="country_span">Australia</span> <span class="time_date"><i class="fa fa-clock-o"></i>{{ $data->hari }}</span> </div>
                            <div class="review_star_cover">
                              <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span>345 Reviews</span> </div>
                          </div>
                          <!-- Review content main -->
                          <div class="col-lg-4 col-md-4">
                            <div class="payment_table table_bold">
                              <ul>
                                <li> <span>Harga pokok</span><span class="bold">Rp. {{ number_format($data->biaya) }}</span> </li>
                                <li> <span>Orang</span><span class="bold">{{ $orang }}</span> </li>
                                <li class="total_row"> <span>Total</span><span>Rp. {{ number_format($total) }}</span> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- payment_details_main end --> 
                      </div>
                      <!--  tab_inner_body end --> 
                    </div>
                    <!--  tab inner three section End --> 
                    <!--  tab inner  section start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>payment method</h5>
                      </div>
                      <!--  tab_inner_body Start-->
                      <div class="tab_inner_body full_width">
                        <div class="payment_mathod_tabs" id="payment_vertical_tabs">
                          <div class="payment_vertical_tabs">
                            <ul>
                              <li><a href="#credit_card">credit card</a></li>
                              <li><a href="#debit_card">debit card</a></li>
                              <li><a href="#net_banking">net banking</a></li>
                              <li><a href="#paypal">paypal</a></li>
                            </ul>
                          </div>
                          <!-- credit card  content -->
                          <div id ="credit_card" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- credit card content end --> 
                          <!-- debit card content start -->
                          <div id ="debit_card" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck2" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck2">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- debit card content End --> 
                          <!-- Net Banking  content Start -->
                          <div id ="net_banking" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck3" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck3">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- Net Banking  content End --> 
                          <!-- Paypal card content Start -->
                          <div id ="paypal" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck4" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck4">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- Paypal card content End --> 
                        </div>
                        <!-- payment tab main end --> 
                      </div>
                      <!--  tab_inner_body end --> 
                    </div>
                    <!--  tab inner three section End --> 
                  </div>
                  <!-- inner_container end --> 
                </div>
                <!-- content area end --> 
                <!-- payment_info End --> 
                <!-- confirmation Start -->
                <div id="confirmation" class="main_content_area hotel_main_content">
                  <div class="inner_container"> 
                    <!-- confirmation message -->
                    <div class="full_width confirmation_msg"> <span>Thank you. Your Booking is Confirmed Now</span> </div>
                    <!-- confirmation message End--> 
                    <!--  tab inner three section Start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>payment Details</h5>
                      </div>
                      <!--  tab_inner_body Start-->
                      <div class="tab_inner_body full_width">
                        <div class="payment_details_main"> 
                          <!-- Review content main -->
                          <div class=" col-lg-9 col-md-9 review_content">
                            <div class="top_head_bar">
                              <h4>MARLUS HOTEL </h4>
                              <span class="country_span">Brisbane, Australia</span> <span class="time_date"><i class="fa fa-clock-o"></i>3days</span> </div>
                            <div class="review_star_cover">
                              <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span>345 Reviews</span> </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="doller_left">
                              <h2>$1000</h2>
                              <p>Per Person</p>
                            </div>
                          </div>
                        </div>
                        <!-- payment_details_main end --> 
                        <!-- table section main start-->
                        <div class="full_width package_table_section">
                          <div class="col-lg-6 col-md-6 border_right">
                            <div class="payment_table_package">
                              <table class="table">
                                <tr>
                                  <td>Starting Date</td>
                                  <td>:</td>
                                  <td>20 sep 2015</td>
                                </tr>
                                <tr>
                                  <td>Starting Date</td>
                                  <td>:</td>
                                  <td>27 Jan 2015</td>
                                </tr>
                                <tr>
                                  <td>Day</td>
                                  <td>:</td>
                                  <td>3</td>
                                </tr>
                                <tr>
                                  <td>Adults</td>
                                  <td>:</td>
                                  <td>2</td>
                                </tr>
                                <tr>
                                  <td>Children</td>
                                  <td>:</td>
                                  <td>1</td>
                                </tr>
                              </table>
                            </div>
                            <!--  Payment Table End --> 
                          </div>
                          <div class="col-lg-6 col-md-6"> 
                            <!--  Payment Table Start -->
                            <div class="payment_table_package table_bold">
                              <table>
                                <tr>
                                  <td>base price</td>
                                  <td class="bold">$1000</td>
                                </tr>
                                <tr>
                                  <td>extra persons(1)</td>
                                  <td class="bold">$1000</td>
                                </tr>
                                <tr>
                                  <td>Taxes</td>
                                  <td class="bold">$120</td>
                                </tr>
                                <tr>
                                  <td>discount</td>
                                  <td class="bold">(-)$1000</td>
                                </tr>
                                <tr class="total_row">
                                  <td>Total</td>
                                  <td>$1900</td>
                                </tr>
                              </table>
                              <!--  Payment Table End --> 
                            </div>
                          </div>
                        </div>
                        <!-- table section main end-->
                        <div class="full_width total_price_row">
                          <p>Total Price - </p>
                          <h2>$1900</h2>
                        </div>
                      </div>
                      <!--  tab_inner_body end --> 
                    </div>
                    <!--  tab inner three section End --> 
                    <!-- information_section start -->
                    <div class="full_width information_section">
                      <div class="information_title"> Traveler Information </div>
                      <div class="full_width information_table_main">
                        <div class="col-lg-6 col-md-6 border_right">
                          <div class="payment_table_package">
                            <table class="table">
                              <tr>
                                <td>Booking Number :</td>
                                <td>0090038968</td>
                              </tr>
                              <tr>
                                <td>First Name :</td>
                                <td>Steve</td>
                              </tr>
                              <tr>
                                <td>Last Name :</td>
                                <td>Joseph</td>
                              </tr>
                              <tr>
                                <td>Email :</td>
                                <td>stevejoseph@host.com</td>
                              </tr>
                            </table>
                          </div>
                          <!--  Payment Table End --> 
                        </div>
                        <div class="col-lg-6 col-md-6 border_right">
                          <div class="payment_table_package">
                            <table class="table">
                              <tr>
                                <td>Address :</td>
                                <td>20 sep 2015</td>
                              </tr>
                              <tr>
                                <td>Town/City :</td>
                                <td>27 Jan 2015</td>
                              </tr>
                              <tr>
                                <td>Zip Code : </td>
                                <td>63800</td>
                              </tr>
                              <tr>
                                <td>Country :</td>
                                <td>Your Country Name Here</td>
                              </tr>
                            </table>
                          </div>
                          <!--  Payment Table End --> 
                        </div>
                      </div>
                      <!-- information_table End --> 
                    </div>
                    <!-- information_section End --> 
                    
                    <!-- information_section start -->
                    <div class="full_width information_section space_top_65">
                      <div class="information_title"> payment Information </div>
                      <!-- information_table End -->
                      <div class="full_width information_table_main">
                        <div class="paymentinfo_list">
                          <ul>
                            <li>You have now confirmed and guaranteed your booking by credit card.</li>
                            <li>All payments are to be made at the hotel during your stay, unsess otherwise stated in the hotel policies or in the room conditions.</li>
                            <li>Please note that your credit card may be pre-authorised prior to your arrival.</li>
                          </ul>
                          <p>This Package accepts the following forms of payment :</p>
                          <span>Credit Card (Visa)</span> </div>
                      </div>
                      <!-- information_table End --> 
                      <!-- information_table End -->
                      <div class="full_width information_table_main">
                        <div class="booking_text t_align_c">
                          <p>If you can change or cancel your booking via out online self service tool <a href="#">here. </a></p>
                          <span>We Wish You a Pleasent stay</span> </div>
                      </div>
                      <!-- information_table End -->
                      <div class="full_width t_align_c">
                        <button type="button" value="proceed to next step" class="btn_green proceed_buttton btns">print booking</button>
                      </div>
                    </div>
                    <!-- information_section End --> 
                  </div>
                  <!--  inner container --> 
                </div>
                <!-- confirmation End --> 
              </div>
              <!-- package tabs End --> 
            </div>
            <!-- right main start --> 
          </div>
          <!-- col-lg-9-end --> 
        </div>
        <!--  row main --> 
      </div>
      <!-- container --> 
    </div>
    <!-- main wrapper -->
    <div class="clearfix"></div>
    <div class="full_width section_booking_bottom">
      <div class="icon_circle_overlay"></div>
      <div class="container">
        <div class="row">
          <div class="middle_text full_width">
            <h2>Get up to 20% Offer</h2>
            <h5>On Booking Flights Along with Tour Packages</h5>
            <div class="coupon_offer"> Use Coupon Code: <span>FLI20</span> </div>
          </div>
        </div>
      </div>
    </div>
    <!--content body end--> 
    <!--footer start-->
    <!--footer end-->
@endsection