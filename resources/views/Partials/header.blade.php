<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="header_iner d-flex justify-content-between align-items-center">
            <div class="sidebar_icon d-lg-none">
              <i class="ti-menu"></i>
            </div>
            <div class="line_icon open_miniSide d-none d-lg-block">
              <img src="img/line_img.png" alt />
            </div>
            <div class="header_right d-flex justify-content-between align-items-center">
              <div class="header_notification_warp d-flex align-items-center">
               
                <li>
                  <a class="bell_notification_clicker nav-link-notify" href="#">
                    <img src="{{asset('img/bell.png')}}" alt />
                  </a>

                  <div class="Menu_NOtification_Wrap">
                    <div class="notification_Header">
                      <h4>Notifications</h4>
                    </div>
                    <div class="Notification_body">
                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/2.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>Cool Marketing</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>

                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/4.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>Awesome packages</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>

                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/3.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>what a packages</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>

                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/2.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>Cool Marketing</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>

                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/4.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>Awesome packages</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>

                      <div class="single_notify d-flex align-items-center">
                        <div class="notify_thumb">
                          <a href="#"><img src="img/staf/3.png" alt /></a>
                        </div>
                        <div class="notify_content">
                          <a href="#">
                            <h5>what a packages</h5>
                          </a>
                          <p>Lorem ipsum dolor sit amet</p>
                        </div>
                      </div>
                    </div>
                    <div class="nofity_footer">
                      <div class="submit_button text-center pt_20">
                        <a href="#" class="btn_1 green">See More</a>
                      </div>
                    </div>
                  </div>
                </li>
              </div>
              <div class="profile_info d-flex align-items-center">
                <div class="profile_thumb mr_20">
                  <img src="img/transfer/4.png" alt="#" />
                </div>
                <div class="author_name">
                  <h4 class="f_s_15 f_w_500 mb-0">{{ Auth::user()->name }}</h4>
                  <p class="f_s_12 f_w_400">{{ Auth::user()->type }}</p>
                </div>
                <div class="profile_info_iner">
                  <div class="profile_author_name">
                    <p>{{ Auth::user()->type }}</p>
                    <h5>  {{ Auth::user()->name }}</h5>
                  </div>
                  <div class="profile_info_details">
                    <a href="#">My Profile </a>
                    <a href="#">Settings</a>
                   
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                               
                    <!-- <a href="#">Log Out </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
