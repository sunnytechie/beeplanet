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
                                            <form class="woocommerce-ordering" method="get">
                                                <select name="orderby" class="orderby">
                                                     <option value="menu_order" selected='selected'>Default sorting</option>
                                                    <option value="popularity">Sort by popularity</option>
                                                    <option value="rating">Sort by average rating</option>
                                                    <option value="date">Sort by newness</option>
                                                    <option value="price">Sort by price: low to high</option>
                                                    <option value="price-desc">Sort by price: high to low</option>
                                                </select>
                                                <input type="hidden" name="post_type" value="product" />                    
                                            </form>                            
                                        </div>
                                        <ul class="products">
                                            <li class="product">
                                                <div class="product-holder">
                                                    <div class="product-badge discount">-27%</div>
                                                    <a href="#"><img src="assets/images/shop/img-1.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Fashion tops</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>79</bdi>
                                                            </span>
                                                        </ins>
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>129</bdi>
                                                            </span>
                                                        </del>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
    
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-1.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Fashion tops</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
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
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-2.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Women's T-shirt</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>150</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
    
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-2.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Women's T-shirt</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-2"  class="product-count" type="text" value="1" name="product-count-2">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-3.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Cotton Short Sleeve</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>147</bdi>
                                                            </span>
                                                        </ins>
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>200</bdi>
                                                            </span>
                                                        </del>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-3.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Cotton Short Sleeve</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-3" class="product-count" type="text" value="1" name="product-count-3">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-4.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Stylish black coat</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>79</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-4.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Stylish black coat</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-4" class="product-count" type="text" value="1" name="product-count-4">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-5.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Tops ladis sleeve</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-5.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Tops ladis sleeve</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-5" class="product-count" type="text" value="1" name="product-count-5">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-6.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Exclusive hot curti</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
    
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-6.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Exclusive hot curti</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-6" class="product-count" type="text" value="1" name="product-count-6">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-7.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Ladis T-shirt</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-7.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Ladis T-shirt</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-7" class="product-count" type="text" value="1" name="product-count-7">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-8.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Sleeve cotton t-shirt</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-8.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Sleeve cotton t-shirt</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-8" class="product-count" type="text" value="1" name="product-count-8">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-9.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Gray Fitness T-Shirt</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-9.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Two Colure Hoodie</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-9" class="product-count" type="text" value="1" name="product-count-9">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-10.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Shirt Isolated White for Men</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-10.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Two Colure Hoodie</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-10" class="product-count" type="text" value="1" name="product-count-10">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->                                            
                                            </li>
    
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-11.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Stylish Smart Watch</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-11.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Two Colure Hoodie</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-12" class="product-count" type="text" value="1" name="product-count-12">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
                                            <li class="product">
                                                <div class="product-holder">
                                                    <a href="#"><img src="assets/images/shop/img-12.jpg" alt></a>
                                                    <div class="shop-action-wrap">
                                                        <ul class="shop-action">
                                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h4><a href="#">Fashionable skirt</a></h4>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                            </span>
                                                        </ins>
                                                    </span>
                                                    <p class="product-description">Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper </p>
                                                </div>
                                                <div class="quick-view-single-product">
                                                    <div class="view-single-product-inner clearfix">
                                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                                        <div class="img-holder">
                                                            <img src="assets/images/shop/img-12.jpg" alt>
                                                        </div>
                                                        <div class="product-details">
                                                            <h4>Fashionable skirt</h4>
                                                            <div class="price">
                                                                <span class="current">$45.00</span>
                                                                <span class="old">$55.00</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star"></i>
                                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                                <span>(2 Customer review)</span>
                                                            </div>
                                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                                            <div class="product-option">
                                                                <form class="form">
                                                                    <div class="product-row">
                                                                        <div>
                                                                            <input id="product-count-13" class="product-count" type="text" value="1" name="product-count-13">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit">Add to cart</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div> 
                                                            <div class="thb-product-meta-before">
                                                                <div class="add-to-wishlist">
                                                                    <a href="#" class="add_to_wishlist">
                                                                        <i class="pe-7s-like"></i>
                                                                        <span>Add To Wishlist</span>
                                                                    </a>
                                                                </div>
                                                                <div class="product_meta">
                                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end quick-view-single-product -->
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pagination-wrapper">
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
    
                                <div class="shop-sidebar">
                                    <div class="widget widget_search">
                                        <div class="search-widget">
                                           <form class="searchform">
                                                <div>
                                                    <input type="text" placeholder="Search...">
                                                    <button type="submit"><i class="ti-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                                
                                    <div class="widget widget_price_filter">
                                        <h3>Filter By Price</h3>
                                        <div class="filter-price">
                                            <form>
                                                <div id="slider-range"></div>
                                                <p>Price : <input type="text" id="amount"></p>
                                                <button>filter</button>
                                            </form>
                                        </div>
                                    </div> 
    
                                    <div class="widget woocommerce widget_product_categories">
                                        <h3>Filter by categories</h3>
                                        <ul class="product-categories">
                                            <li class="cat-item cat-parent">
                                                <a href="#">Clothing</a>
                                                <ul class="children">
                                                    <li class="cat-item cat-item-213">
                                                        <a href="#">Accessories</a>
                                                    </li>
                                                    <li class="cat-item cat-item-212">
                                                        <a href="#">Hoodies</a>
                                                    </li>
                                                    <li class="cat-item cat-item-211">
                                                        <a href="#">Tshirts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Decor</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Music</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="#">Uncategorized</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                                        <h3>Filter by Color</h3>
                                        <ul class="woocommerce-widget-layered-nav-list">
                                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                <a href="#">Blue</a> 
                                                <span class="count">(4)</span>
                                            </li>
                                            <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                                <a href="#">Blue</a> 
                                                <span class="count">(4)</span>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="widget woocommerce widget_product_tag_cloud">
                                        <h3>Filter by Product tags</h3>
                                        <div class="tagcloud">
                                            <a href="#" class="tag-cloud-link">Women</a>
                                            <a href="#" class="tag-cloud-link">Collection</a>
                                            <a href="#" class="tag-cloud-link">Jense</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div> <!-- end container -->
            </section>
            <!-- end shop-section -->

@endsection