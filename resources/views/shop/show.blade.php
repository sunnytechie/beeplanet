@extends('layouts.app')

@section('content')

            <!-- start page-title -->
            <section class="page-title" style="background-image: url('{{ asset('assets/images/bee/bg4.jpg') }}')">
                <div class="page-title-container">
                    <div class="page-title-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <h2 style="color: #fff">Shop</h2>
                                    <ol class="breadcrumb">
                                        <li><a href="/" style="color: #ddd">Home</a></li>
                                        <li style="color: #fff">Shop</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end container -->
                    </div>
                </div>
            </section>
            <!-- end page-title -->     
    
    
            <!-- start shop-section -->
            <section class="shop-section section-padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="shop-area clearfix">
                                <div class="woocommerce-content-wrap">
                                    <div class="woocommerce-content-inner">
                                        <div class="woocommerce-toolbar-top">
                                            <p class="woocommerce-result-count">Showing 1–12 of 70 results</p>
                                            <div class="products-sizes">
                                                <a href="#" class="grid-4 active">
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </a>
                                                <a href="#" class="grid-3">
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-view">
                                                    <div class="grid-draw-line">
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw-line">
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <div class="grid-draw-line">
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </a>
                                            </div>
                                                                     
                                        </div>
                                        <ul class="products">
                                            @foreach ($products as $product)
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
                                    <div class="pagination-wrapper">
                                        {!! $products->links() !!}
                                    </div>
                                </div>
    
                                <div class="shop-sidebar">    
                                    <div class="widget woocommerce widget_product_categories">
                                        <h3>Filter by categories</h3>
                                        <ul class="product-categories">
                                            
                                            <li class="cat-item">
                                                <a href="/shop/1/show">Smart Switches.</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="/shop/2/show">Cameras</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="/shop/3/show">Smartlocks</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="4">Smart Sockets</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="5">Smart bolds</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="6">Smart remote controls</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Uncategorized</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div> <!-- end container -->
            </section>
            <!-- end shop-section -->

@endsection