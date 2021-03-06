
        <!-- start newsletter-popup-area-section -->
        <section class="newsletter-popup-area-section">
            <div class="newsletter-popup-area">
                <div class="newsletter-popup-ineer">
                    <button class="btn newsletter-close-btn"><i class="pe-7s-close-circle"></i></button>
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/bee/popupbg.jpg') }}" alt>
                    </div>
                    <div class="details">
                        <h4>Get 25% discount shipped to your inbox</h4>
                        <p>Subscribe to our newsletter to receive timely updates to your favorite products</p>
                        <form method="post" action="{{ route('store.email') }}">    
                            @csrf
                            
                            <div>
                                <input type="email" name="email" placeholder="Enter your email" required />
                                <button type="submit">Subscribe</button>
                            </div>
                            <div>
                                <label class="checkbox-holder"> Don't show this popup again!
                                    <input type="checkbox" class="show-message">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end newsletter-popup-area-section -->