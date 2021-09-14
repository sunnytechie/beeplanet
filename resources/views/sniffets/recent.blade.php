<!-- start trendy-product-section -->
<section class="trendy-product-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <h2>Recent products</h2>
                </div>
                <a href="#" class="more-products">More products</a>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="products-wrapper">
                    <ul class="products product-row-slider">

                        @foreach ($productRecents as $product)
                        <li class="product">
                            <div class="product-holder">
                                <div class="product-badge discount">{{ $product->badge }}</div>
                                <a href="#"><img src="{{ $product->thumbnail }}" alt></a>
                                <div class="shop-action-wrap">
                                    <ul class="shop-action">
                                        <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                        {{-- <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                        <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4><a href="#">{{ $product->title }}</a></h4>
                                <span class="woocommerce-Price-amount amount">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol"></span>{{ $product->price }}</bdi>
                                        </span>
                                    </ins>
                                </span>
                            </div>

                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img src="{{ $product->thumbnail }}" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4>{{ $product->title }}</h4>
                                        <div class="price">
                                            <span class="current">{{ $product->price }}</span>
                                        {{-- </div>
                                        <div class="rating">
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                            <span>(2 Customer review)</span>
                                        </div> --}}
                                        <p>{{ $product->description }}</p>
                                        {{-- <div class="product-option">
                                            <form class="form">
                                                <div class="product-row">
                                                    <div>
                                                        <input id="product-count" class="product-count" type="text" value="1" name="product-count">
                                                    </div>
                                                    <div>
                                                        <button type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>  --}}
                                        <div class="thb-product-meta-before">
                                            <div class="add-to-wishlist">
                                                <a href="#" class="add_to_wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    <span>Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU: <span class="sku">{{ $product->sku }}</span></span>
                                                <span class="posted_in">Categories: {{ $product->category }}</span>
                                                <span class="tagged_as">Tags: {{ $product->tag }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end quick-view-single-product -->
                        </li> 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end trendy-product-section -->