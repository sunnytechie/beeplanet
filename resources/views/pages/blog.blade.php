@extends('layouts.app')

@section('content')

            <!-- start page-title -->
            <section class="page-title" style="background-image: url('{{ asset('assets/images/bee/bg2.jpg') }}')">
                <div class="page-title-container">
                    <div class="page-title-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <h2 style="color: #fff">Blog</h2>
                                    <ol class="breadcrumb">
                                        <li><a style="color: #ddd" href="/">Home</a></li>
                                        <li style="color: #fff">Blog</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end container -->
                    </div>
                </div>
            </section>
            <!-- end page-title -->     
    
    
            <!-- start blog-pg-section -->
            <section class="blog-pg-section section-padding">
                <div class="container-1410">
                    <div class="row">
                        <div class="col col-md-9">
                            <div class="blog-content">
                                <div class="post format-standard-image">
                                    <div class="entry-media">
                                        <img src="assets/images/blog/img-1.jpg" alt>
                                    </div>
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <div class="date">27 Nov 2020</div>
                                            <div class="tags"><a href="#">Fashion</a><a href="#">Trend</a></div>
                                        </div>
                                        <h3><a href="#">Appearance is the first impression you convey to others major factor that contributes</a></h3>
                                        <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked out the entire. </p>
                                        <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                    </div>
                                </div>
                                <div class="post format-standard">
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <div class="date">27 Nov 2020</div>
                                            <div class="tags"><a href="#">Fashion</a><a href="#">Trend</a></div>
                                        </div>
                                        <h3>Clothing stores and looking for clothing store slogans that could perfectly describe your outfits to customers then</h3>
                                        <p>Collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with</p>
                                        <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                    </div>
                                </div>
                                <div class="post format-gallery">
                                    <div class="entry-media post-slider">
                                        <img src="assets/images/blog/img-2.jpg" alt>
                                        <img src="assets/images/blog/img-1.jpg" alt>
                                    </div>
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <div class="date">27 Nov 2020</div>
                                            <div class="tags"><a href="#">Fashion</a><a href="#">Trend</a></div>
                                        </div>
                                        <h3><a href="#">Fascinating insights into the process and interesting examinations of how we</a></h3>
                                        <p>Collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with</p>
                                        <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                    </div>
                                </div>
                                <div class="post format-quote">
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <div class="date">27 Nov 2020</div>
                                            <div class="tags"><a href="#">Fashion</a><a href="#">Trend</a></div>
                                        </div>
                                        <h3><a href="#">Clothing stores and looking for clothing store slogans that could perfectly describe your outfits to customers then</a></h3>
                                    </div>
                                </div>
                                <div class="post format-video">
                                    <div class="entry-media video-holder">
                                        <img src="assets/images/blog/img-3.jpg" alt>
                                        <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
                                            <i class="fi flaticon-play-button"></i>
                                        </a>
                                    </div>
                                    <div class="entry-details">
                                        <div class="entry-meta">
                                            <div class="date">27 Nov 2020</div>
                                            <div class="tags"><a href="#">Fashion</a><a href="#">Trend</a></div>
                                        </div>
                                        <h3><a href="#">Fascinating insights into the process and interesting examinations of how we</a></h3>
                                        <p>Collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with</p>
                                        <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a>
                                    </div>
                                </div>
                                <div class="pagination-wrapper pagination-wrapper-left">
                                    <ul class="pg-pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <i class="fi flaticon-back"></i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <i class="fi flaticon-next"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3">
                            <div class="blog-sidebar">
                                <div class="widget search-widget">
                                    <h3>Search</h3>
                                    <form>
                                        <div>
                                            <input type="text" placeholder="Search Post..">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="widget category-widget">
                                    <h3>Categories</h3>
                                    <ul>
                                        <li><a href="#">Funding <span>(2)</span></a></li>
                                        <li><a href="#">Charity organization  <span>(7)</span></a></li>
                                        <li><a href="#">Helpless  <span>(51)</span></a></li>
                                        <li><a href="#">Charity <span>(5)</span></a></li>
                                        <li><a href="#">Children <span>(10)</span></a></li>
                                    </ul>
                                </div>
                                <div class="widget recent-post-widget">
                                    <h3>Recent post</h3>
                                    <div class="posts">
                                        <div class="post">
                                            <div class="img-holder">
                                                <img src="assets/images/recent-posts/img-1.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <h4><a href="#">Upright, raising a heavy fur muff that covered the whole lower </a></h4>
                                                <span class="date">Jan 19 2021</span>
                                            </div>
                                        </div>
                                        <div class="post">
                                            <div class="img-holder">
                                                <img src="assets/images/recent-posts/img-2.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <h4><a href="#">Arm towards the viewer pegor then turned to look out the window </a></h4>
                                                <span class="date">Jan 19 2021</span>
                                            </div>
                                        </div>
                                        <div class="post">
                                            <div class="img-holder">
                                                <img src="assets/images/recent-posts/img-3.jpg" alt>
                                            </div>
                                            <div class="details">
                                                <h4><a href="#">Housed in a nice, gilded frameshowed a lady fitted out with</a></h4>
                                                <span class="date">Jan 19 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget about-widget">
                                    <h3>About</h3>
                                    <p>Aowards the viewer hregor then turned to look out the window at the dull weather towards the viewer regor then turned to look </p>
                                </div>
                                <div class="widget tag-widget">
                                    <h3>Tags</h3>
                                    <ul>
                                        <li><a href="#">Charity</a></li>
                                        <li><a href="#">Organization</a></li>
                                        <li><a href="#">Donation</a></li>
                                        <li><a href="#">Manfacturing</a></li>
                                        <li><a href="#">Children</a></li>
                                        <li><a href="#">Funds</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end blog-pg-section -->

@endsection