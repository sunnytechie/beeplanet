<!-- start instagram-section -->
<section class="instagram-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="instagram-inner">
                    <div class="instagram-text">
                        <h3>Follow our instagram</h3>
                        <p>@BeeSmartPlanet</p>
                    </div>
                    {{-- <div class="instagram-grids clearfix">
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/1.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/3.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/4.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/2.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/5.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="assets/images/instagram/6.jpg" alt></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end instagram-section -->        


<!-- start site-footer -->
<footer class="site-footer">
    <div class="container-1410">
        <div class="row widget-area">
            <div class="col-lg-4 col-xs-6  widget-col about-widget-col">
                <div class="widget newsletter-widget">
                   <div class="inner">
                        <h3>Sign Up Now & Get 10% Off</h3>
                        <p>Get timely updates from your favorite products</p>
                        <form method="post" action="{{ route('store.email') }}">    
                            @csrf

                            <div class="input-1">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address *" required>
                            </div>
                            <div class="submit clearfix">
                                <button type="submit">Subcribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6 widget-col">
                <div class="widget contact-widget">
                    <h3>Contact info</h3>
                    <ul>
                        <li>Phone: 888-999-000-1425</li>
                        <li>Email: Info@beeplanet.tech,
                            Sales@beeplanet.tech</li>
                        <li>Address: 22/1 natinoal city austria, dreem land, Huwai</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget company-widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Best services</a></li>
                        <li><a href="#">Recent insight</a></li>
                        <li><a href="#">Shipping guid</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>                        
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget payment-widget">
                    <h3>Payment & Shipping</h3>
                    <ul>
                        <li><a href="#">Payment method</a></li>
                        <li><a href="#">Tearms of use</a></li>
                        <li><a href="#">Shipping policy</a></li>
                        <li><a href="#">Shipping guide</a></li>
                        <li><a href="#">Return policy</a></li>
                    </ul>
                </div>                        
            </div>
       </div>            
    </div> <!-- end container -->

    <div class="lower-footer">
        <div class="container-1410">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lower-footer-inner clearfix">
                        <div>
                            <p>&copy; 2021 WP Studio , All Rights Reserved</p>
                        </div>
                        <div class="social">
                            <ul class="clearfix">
                                <li><a href="#" title="Facebook">fb</a></li>
                                <li><a href="#" title="Twitter">tw</a></li>
                                <li><a href="#" title="Instagram">ig</a></li>
                                <li><a href="#" title="Pinterest">pr</a></li>
                            </ul>
                        </div>
                        <div class="extra-link">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Promo T&amp;Cs Apply</a></li>
                                @guest
                                    @else
                                    @if (Auth::user()->user_type == 1)
                                    <li><a href="{{ route('product.index') }}">Admin</a></li>
                                @endif
                                @endguest
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end site-footer -->