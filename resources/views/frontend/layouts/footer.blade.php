  <!-- Begin Footer Area -->
  <div class="footer">
 <div class="footer-static-middle">
    <div class="container">
        <div class="footer-logo-wrap pt-50 pb-35">
            <div class="row">
                <!-- Begin Footer Logo Area -->
                <div class="col-lg-8 col-md-8">
                    @php
                        $footer=DB::table('settings')->get();
                    @endphp
                    <div class="footer-logo">
                        @foreach($footer as $data)
                        <img src="{{$data->photo}}" alt="{{$data->photo}}">
                        <p class="info">
                           {!!$data->description!!}
                        </p>
                    </div>
                    <ul class="des">
                        <li>
                            <span>Địa chỉ: </span>
                           {{$data->address}}
                        </li>
                        <li>
                            <span>Điện thoại: </span>
                            <a href="#">{{$data->phone}}</a>
                        </li>
                        <li>
                            <span>Email: </span>
                            <a href="{{$data->email}}">{{$data->email}}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <!-- Begin Footer Block Area -->
                <div class="col-lg-4">
                    <div class="footer-block">
                        <h3 class="footer-block-title">Theo Chúng Tôi</h3>
                        <ul class="social-link">
                            <li class="twitter">
                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="rss">
                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                            <li class="google-plus">
                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Block Area End Here -->
            </div>
        </div>
    </div>
</div>
 <!-- Begin Footer Static Top Area -->
 <div class="footer-static-top">
    <div class="container">
        <!-- Begin Footer Shipping Area -->
        <div class="footer-shipping pt-60 pb-55 pb-xs-25">
            <div class="row">
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="{{asset('frontend/images/shipping-icon/1.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Giao hàng miễn phí</h2>
                            <p>Và trả lại miễn phí. Xem thanh toán để biết ngày giao hàng.</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="{{asset('frontend/images/shipping-icon/2.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Thanh Toán An Toàn</h2>
                            <p>Thanh toán bằng các phương thức thanh toán an toàn và phổ biến nhất thế giới.</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="{{asset('frontend/images/shipping-icon/3.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Mua Sắm Trực Tuyến</h2>
                            <p>Bảo vệ người mua của chúng tôi bao gồm việc mua hàng của bạn từ khi nhấp chuột đến khi giao hàng.</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
                <!-- Begin Li's Shipping Inner Box Area -->
                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                    <div class="li-shipping-inner-box">
                        <div class="shipping-icon">
                            <img src="{{asset('frontend/images/shipping-icon/4.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-text">
                            <h2>Hỗ Trợ 24/7</h2>
                            <p>Có một câu hỏi? Gọi cho Chuyên gia hoặc trò chuyện trực tuyến.</p>
                        </div>
                    </div>
                </div>
                <!-- Li's Shipping Inner Box Area End Here -->
            </div>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="#">© 2023. Công ty cổ phần Thế Giới Di Động. GPDKKD:  
                    Địa chỉ: Số 10 Ngõ 80 Xuân Phương Quận Nam Từ Liêm Hà Nội</a></li>
                
            </ul>
        </div>
        <!-- Footer Shipping Area End Here -->
    </div>
</div>

