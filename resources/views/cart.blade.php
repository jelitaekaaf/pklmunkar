{{-- @extends('layouts.front')
@section('content') --}}
       <!-- CSS here -->
   <link rel="stylesheet" href="front/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="front/assets/css/animate.css">
   <link rel="stylesheet" href="front/assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="front/assets/css/slick.css">
   <link rel="stylesheet" href="front/assets/css/nice-select.css">
   <link rel="stylesheet" href="front/assets/css/fontawesome.min.css">
   <link rel="stylesheet" href="front/assets/css/jquery-ui.css">
   <link rel="stylesheet" href="front/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="front/assets/css/spacing.css">
   <link rel="stylesheet" href="front/assets/css/meanmenu.css">
   <link rel="stylesheet" href="front/assets/css/main.css">
 <!-- preloader -->
 <div id="preloader">
    <div class="preloader">
          <span></span>
          <span></span>
    </div>
 </div>
 <!-- preloader end  -->

 <!-- Scroll-top -->
 <button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
 </button>
 <!-- Scroll-top-end-->

 <!-- header-area-start -->
 <header>
    <div class="header-top space-bg">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="header-welcome-text ">
                   <span>Welcome to our international shop! Enjoy free shipping on orders $100 & up.</span>
                   <a href="shop-2.html">Shop Now<i class="fal fa-long-arrow-right"></i></a>
                </div>
             </div>
             <div class="col-xl-4 d-none d-xl-block">
                <div class="headertoplag d-flex align-items-center justify-content-end">
                   <div class="headertoplag__lang">
                      <ul>
                         <li>
                            <a href="#">
                               English
                               <span><i class="fal fa-angle-down"></i></span>
                            </a>
                            <ul class="header-meta__lang-submenu">
                               <li>
                                  <a href="#">Arabic</a>
                               </li>
                               <li>
                                  <a href="#">Spanish</a>
                               </li>
                               <li>
                                  <a href="#">Mandarin</a>
                               </li>
                            </ul>
                         </li>
                      </ul>
                   </div>
                   <div class="menu-top-social">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-behance"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="#"><i class="fab fa-linkedin"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="mainmenuarea d-none d-xl-block">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-9">
                <div class="mainmenu d-flex align-items-center">
                   <div class="mainmenu__search">
                      <form action="#">
                         <div class="mainmenu__search-bar p-relative">
                            <button class="mainmenu__search-icon"><i class="fal fa-search"></i></button>
                            <input type="text" placeholder="Search products...">
                         </div>
                      </form>
                   </div>
                   <div class="mainmenu__main d-flex align-items-center p-relative">
                      <div class="main-menu">
                         <nav id="mobile-menu">
                            <ul>
                               <li class="has-dropdown">
                                  <a href="index.html">Home</a>
                                  <ul class="submenu">
                                     <li><a href="index.html">Wooden  Home</a></li>
                                     <li><a href="index-2.html">Fashion Home</a></li>
                                     <li><a href="index-3.html">Furniture Home</a></li>
                                     <li><a href="index-4.html">Cosmetics Home</a></li>
                                     <li><a href="index-5.html">Food Grocery</a></li>
                                  </ul>
                               </li>
                               <li class="has-dropdown">
                                  <a href="shop">Shop</a>
                                  <ul class="submenu">
                                     <li><a href="shop">Shop</a></li>
                                     <li><a href="cart">Cart</a></li>
                                     <li><a href="checkout">Checkout</a></li>
                                     <li><a href="track">Product Track</a></li>
                                  </ul>
                               </li>
                               <li class="has-dropdown has-megamenu">
                                  <a href="about.html">Pages</a>
                                  <ul class="submenu mega-menu">
                                     <li>
                                        <a class="mega-menu-title">Page layout</a>
                                        <ul>
                                           <li><a href="shop.html">Shop filters v1</a></li>
                                           <li><a href="shop-2.html">Shop filters v2</a></li>
                                           <li><a href="shop-details.html">Shop sidebar</a></li>
                                           <li><a href="shop-details-2.html">Shop Right sidebar</a></li>
                                           <li><a href="shop-location.html">Shop List view</a></li>
                                        </ul>
                                     </li>
                                     <li>
                                        <a class="mega-menu-title">Page layout</a>
                                        <ul>
                                           <li><a href="about.html">About</a></li>
                                           <li><a href="cart.html">Cart</a></li>
                                           <li><a href="checkout.html">Checkout</a></li>
                                           <li><a href="sign-in.html">Sign In</a></li>
                                           <li><a href="sign-in.html">Log In</a></li>
                                        </ul>
                                     </li>
                                     <li>
                                        <a class="mega-menu-title">Page type</a>
                                        <ul>
                                           <li><a href="track.html">Product Track</a></li>
                                           <li><a href="wishlist.html">Wishlist</a></li>
                                           <li><a href="error.html">404 / Error</a></li>
                                           <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                     </li>
                                  </ul>
                               </li>
                               <li class="has-dropdown">
                                  <a href="blog.html">Blog</a>
                                  <ul class="submenu">
                                     <li><a href="blog.html">Blog</a></li>
                                     <li><a href="blog-details.html">Blog Details</a></li>
                                  </ul>
                               </li>
                               <li><a href="contact">Contact</a></li>
                            </ul>
                         </nav>
                      </div>
                      <div class="mainmenu__logo">
                         <a href="index.html"><img src="front/assets/img/logo/logo.png" alt=""></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3">
                <div class="header-meta d-flex align-items-center justify-content-end">
                   <div class="header-meta__value mr-15">
                      <select>
                         <option>USD</option>
                         <option>YEAN</option>
                         <option>EURO</option>
                      </select>
                   </div>
                   <div class="header-meta__social d-flex align-items-center ml-25">
                      <button class="header-cart p-relative tp-cart-toggle">
                         <i class="fal fa-shopping-cart"></i>
                         <span class="tp-product-count">2</span>
                      </button>
                      <a href="sign-in.html"><i class="fal fa-user"></i></a>
                      <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- header-area-end -->

 <!-- header-xl-sticky-area -->
 <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-2 col-lg-3">
             <div class="logo">
                <a href="index.html"><img src="front/assets/img/logo/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-xl-6 col-lg-6">
             <div class="main-menu">
                <ul>
                   <li class="has-dropdown">
                      <a href="index.html">Home</a>
                      <ul class="submenu">
                         <li><a href="index.html">Wooden  Home</a></li>
                         <li><a href="index-2.html">Fashion Home</a></li>
                         <li><a href="index-3.html">Furniture Home</a></li>
                         <li><a href="index-4.html">Cosmetics Home</a></li>
                         <li><a href="index-5.html">Food Grocery</a></li>
                      </ul>
                   </li>
                   <li class="has-dropdown">
                      <a href="shop.html">Shop</a>
                      <ul class="submenu">
                         <li><a href="shop.html">Shop</a></li>
                         <li><a href="shop-2.html">Shop 2</a></li>
                         <li><a href="shop-details.html">Shop Details </a></li>
                         <li><a href="shop-details-2.html">Shop Details 2</a></li>
                         <li><a href="shop-location.html">Shop Location</a></li>
                         <li><a href="cart.html">Cart</a></li>
                         <li><a href="sign-in.html">Sign In</a></li>
                         <li><a href="checkout.html">Checkout</a></li>
                         <li><a href="wishlist.html">Wishlist</a></li>
                         <li><a href="track.html">Product Track</a></li>
                      </ul>
                   </li>
                   <li class="has-dropdown has-megamenu">
                      <a href="about.html">Pages</a>
                      <ul class="submenu mega-menu">
                         <li>
                            <a class="mega-menu-title">Page layout</a>
                            <ul>
                               <li><a href="shop.html">Shop filters v1</a></li>
                               <li><a href="shop-2.html">Shop filters v2</a></li>
                               <li><a href="shop-details.html">Shop sidebar</a></li>
                               <li><a href="shop-details-2.html">Shop Right sidebar</a></li>
                               <li><a href="shop-location.html">Shop List view</a></li>
                            </ul>
                         </li>
                         <li>
                            <a class="mega-menu-title">Page layout</a>
                            <ul>
                               <li><a href="about.html">About</a></li>
                               <li><a href="cart.html">Cart</a></li>
                               <li><a href="checkout.html">Checkout</a></li>
                               <li><a href="sign-in.html">Sign In</a></li>
                               <li><a href="sign-in.html">Log In</a></li>
                            </ul>
                         </li>
                         <li>
                            <a class="mega-menu-title">Page type</a>
                            <ul>
                               <li><a href="track.html">Product Track</a></li>
                               <li><a href="wishlist.html">Wishlist</a></li>
                               <li><a href="error.html">404 / Error</a></li>
                               <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                         </li>
                      </ul>
                   </li>
                   <li class="has-dropdown">
                      <a href="blog.html">Blog</a>
                      <ul class="submenu">
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                   </li>
                   <li><a href="contact.html">Contact</a></li>
                </ul>
             </div>
          </div>
          <div class="col-xl-4 col-lg-9">
             <div class="header-meta-info d-flex align-items-center justify-content-end">
                <div class="header-meta__social  d-flex align-items-center"> 
                   <button class="header-cart p-relative tp-cart-toggle">
                      <i class="fal fa-shopping-cart"></i>
                      <span class="tp-product-count">2</span>
                   </button>
                   <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                </div>
                <div class="header-meta__search-5 ml-25">
                   <div class="header-search-bar-5">
                      <form action="#">
                         <div class="search-info-5 p-relative">
                            <button class="header-search-icon-5"><i class="fal fa-search"></i></button>
                            <input type="text" placeholder="Search products...">
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- header-xl-sticky-end -->

 <!-- header-md-lg-area -->
 <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-3 col-md-4 d-flex align-items-center">
             <div class="header-canvas flex-auto">
                <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
             </div>
             <div class="logo">
                <a href="index.html"><img src="front/assets/img/logo/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-lg-9 col-md-8">
             <div class="header-meta-info d-flex align-items-center justify-content-between">
                <div class="header-search-bar">
                   <form action="#">
                      <div class="search-info p-relative">
                         <button class="header-search-icon"><i class="fal fa-search"></i></button>
                         <input type="text" placeholder="Search products...">
                      </div>
                   </form>
                </div>
                <div class="header-meta__social d-flex align-items-center ml-25">
                   <button class="header-cart p-relative tp-cart-toggle">
                      <i class="fal fa-shopping-cart"></i>
                      <span>2</span>
                   </button>
                   <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-3 d-flex align-items-center">
             <div class="header-canvas flex-auto">
                <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
             </div>
          </div>
          <div class="col-6">
             <div class="logo text-center">
                <a href="index.html"><img src="front/assets/img/logo/logo.png" alt="logo"></a>
             </div>
          </div>
          <div class="col-3">
             <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                <div class="header-meta m-0 d-flex align-items-center">
                   <div class="header-meta__social d-flex align-items-center"> 
                      <button class="header-cart p-relative tp-cart-toggle">
                         <i class="fal fa-shopping-cart"></i>
                         <span>2</span>
                      </button>
                      <a href="sign-in.html"><i class="fal fa-user"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- header-md-lg-area -->

 <!-- sidebar-menu-area -->
 <div class="tpsideinfo">
    <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
    <div class="tpsideinfo__search text-center pt-35">
       <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
       <form action="#">
          <input type="text" placeholder="Search Products...">
          <button><i class="fal fa-search"></i></button>
       </form>
    </div>
    <div class="tpsideinfo__nabtab">
       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
             <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
          </li>
          <li class="nav-item" role="presentation">
             <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
          </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
             <div class="mobile-menu"></div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
             <div class="tpsidebar-categories">
                <ul>
                   <li><a href="shop.html">Furniture</a></li>
                   <li><a href="shop.html">Wooden</a></li>
                   <li><a href="shop.html">Lifestyle</a></li>
                   <li><a href="shop-2.html">Shopping</a></li>
                   <li><a href="track.html">Track Product</a></li>
                </ul>
             </div>
          </div>
          </div>
    </div>
    <div class="tpsideinfo__account-link">							
       <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
    </div>
    <div class="tpsideinfo__wishlist-link">
       <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
    </div>
 </div> 
 <div class="body-overlay"></div>
 <!-- sidebar-menu-area-end -->

 <!-- header-cart-start -->
 <div class="tpcartinfo tp-cart-info-area p-relative">
    <button class="tpcart__close"><i class="fal fa-times"></i></button>
    <div class="tpcart">
       <h4 class="tpcart__title">Your Cart</h4>
       <div class="tpcart__product">
          <div class="tpcart__product-list">
             <ul>
                <li>
                   <div class="tpcart__item">
                      <div class="tpcart__img">
                         <img src="front/assets/img/banner/banner-2-03.jpg" alt="">
                         <div class="tpcart__del">
                            <a href="#"><i class="far fa-times-circle"></i></a>
                         </div>
                      </div>
                      <div class="tpcart__content">
                         <span class="tpcart__content-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a>
                         </span>
                         <div class="tpcart__cart-price">
                            <span class="quantity">1 x</span>
                            <span class="new-price">$138.00</span>
                         </div>
                      </div>
                   </div>
                </li>
                <li>
                   <div class="tpcart__item">
                      <div class="tpcart__img">
                         <img src="front/assets/img/banner/banner-2-04.jpg" alt="">
                         <div class="tpcart__del">
                            <a href="#"><i class="far fa-times-circle"></i></a>
                         </div>
                      </div>
                      <div class="tpcart__content">
                         <span class="tpcart__content-title"><a href="shop-details.html">Purab Enormous Miranda Bottle</a>
                         </span>
                         <div class="tpcart__cart-price">
                            <span class="quantity">1 x</span>
                            <span class="new-price">$162.8</span>
                         </div>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
          <div class="tpcart__checkout">
             <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                <span> Subtotal:</span>
                <span class="heilight-price"> $300.00</span>
             </div>
             <div class="tpcart__checkout-btn">
                <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                <a class="tpcheck-btn" href="checkout.html">Checkout</a>
             </div>
          </div>
       </div>
       <div class="tpcart__free-shipping text-center">
          <span>Free shipping for orders <b>under 10km</b></span>
       </div>
    </div>
 </div>
 <div class="cartbody-overlay"></div>
 <!-- header-cart-end -->

 <!-- main-area-start -->
 <main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg" data-background="front/assets/img/banner/breadcrumb-01.jpg">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                <div class="tp-breadcrumb">
                   <div class="tp-breadcrumb__link mb-10">
                      <span class="breadcrumb-item-active"><a href="index.html">Home</a></span>
                      <span>Cart</span>
                   </div>
                   <h2 class="tp-breadcrumb__title">Product Cart</h2>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- breadcrumb-area-end -->
        
    <!-- cart area -->
    <section class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
       <div class="container">
       <div class="row">
          <div class="col-12">
                <form action="#">
                   <div class="table-content table-responsive">
                      <table class="table">
                            <thead>
                               <tr>
                                  <th class="product-thumbnail">Images</th>
                                  <th class="cart-product-name">Courses</th>
                                  <th class="product-price">Unit Price</th>
                                  <th class="product-quantity">Quantity</th>
                                  <th class="product-subtotal">Total</th>
                                  <th class="product-remove">Remove</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td class="product-thumbnail">
                                     <a href="shop-details.html"><img src="front/assets/img/product/home-three/product-60.jpg" alt="">
                                     </a>
                                  </td>
                                  <td class="product-name">
                                     <a href="shop-details.html">Evo Lightweight Granite Chair</a>
                                  </td>
                                  <td class="product-price">
                                     <span class="amount">$130.00</span>
                                  </td>
                                  <td class="product-quantity">
                                        <span class="cart-minus">-</span>
                                        <input class="cart-input" type="text" value="1"/>
                                        <span class="cart-plus">+</span>
                                  </td>
                                  <td class="product-subtotal">
                                     <span class="amount">$130.00</span>
                                  </td>
                                  <td class="product-remove">
                                     <a href="#"><i class="fa fa-times"></i></a>
                                  </td>
                               </tr>
                               <tr>
                                  <td class="product-thumbnail">
                                     <a href="shop-details.html"><img src="front/assets/img/product/home-one/product-8.jpg"  alt="">
                                     </a>
                                  </td>
                                  <td class="product-name">
                                     <a href="shop-details.html">Miko Wooden Bluetooth Speaker</a>
                                  </td>
                                  <td class="product-price">
                                     <span class="amount">$120.50</span>
                                  </td>
                                  <td class="product-quantity">
                                        <span class="cart-minus">-</span>
                                        <input class="cart-input" type="text" value="1"/>
                                        <span class="cart-plus">+</span>
                                  </td>
                                  <td class="product-subtotal">
                                     <span class="amount">$120.50</span>
                                  </td>
                                  <td class="product-remove">
                                     <a href="#"><i class="fa fa-times"></i></a>
                                  </td>
                               </tr>
                            </tbody>
                      </table>
                   </div>
                   <div class="row">
                      <div class="col-12">
                            <div class="coupon-all">
                               <div class="coupon">
                                  <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                        placeholder="Coupon code" type="text">
                                  <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply
                                        Coupon</button>
                               </div>
                               <div class="coupon2">
                                  <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                               </div>
                            </div>
                      </div>
                   </div>
                   <div class="row justify-content-end">
                      <div class="col-md-5 ">
                            <div class="cart-page-total">
                               <h2>Cart totals</h2>
                               <ul class="mb-20">
                                  <li>Subtotal <span>$250.00</span></li>
                                  <li>Total <span>$250.00</span></li>
                               </ul>
                               <a href="checkout.html" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                            </div>
                      </div>
                   </div>
                </form>
          </div>
       </div>
       </div>
    </section>
    <!-- cart area end-->

    </main>
    <!-- main-area-end -->

    <!-- footer-area-start -->
    <footer>
       <div class="footer-area secondary-footer black-bg-2 pt-65">
          <div class="container">
             <div class="main-footer pb-15 mb-30">
                <div class="row">
                   <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="footer-widget footer-col-1 mb-40">
                         <div class="footer-logo mb-30">
                            <a href="index.html"><img src="front/assets/img/logo/logo-white.png" alt="logo"></a>
                         </div>
                         <div class="footer-content">
                            <p>Elegant pink origami design three <br> dimensional view and decoration co-exist. <br>
                               Great for adding a decorative touch to <br> any room’s decor.</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-2 col-md-4 col-sm-6">
                      <div class="footer-widget footer-col-2 ml-30 mb-40">
                         <h4 class="footer-widget__title mb-30">Information</h4>
                         <div class="footer-widget__links">
                            <ul>
                               <li><a href="#">Custom Service</a></li>
                               <li><a href="#">FAQs</a></li>
                               <li><a href="track.html">Ordering Tracking</a></li>
                               <li><a href="contact.html">Contacts</a></li>
                               <li><a href="#">Events</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-2 col-md-4 col-sm-6">
                      <div class="footer-widget footer-col-3 mb-40">
                         <h4 class="footer-widget__title mb-30">My Account</h4>
                         <div class="footer-widget__links">
                            <ul>
                               <li><a href="contact.html">Delivery Infomation</a></li>
                               <li><a href="#">Privacy Policy</a></li>
                               <li><a href="#">Discount</a></li>
                               <li><a href="#">Custom Service</a></li>
                               <li><a href="#">Terms & Condition</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-2 col-md-4 col-sm-6">
                      <div class="footer-widget footer-col-4 mb-40">
                         <h4 class="footer-widget__title mb-30">Social Network</h4>
                         <div class="footer-widget__links">
                            <ul>
                               <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                               <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                               <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                               <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                               <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-8">
                      <div class="footer-widget footer-col-5 mb-40">
                         <h4 class="footer-widget__title mb-30">Popular Keywords</h4>
                         <div class="footer-widget__links keyword">
                            <a href="shop.html">Makeup</a>
                            <a href="shop.html">Dresses For Girls</a>
                            <a href="shop.html">T-Shirts</a>
                            <a href="shop.html">Sandals</a>
                            <a href="shop.html">Headphones</a>
                            <a href="shop.html">Baby dolls</a>
                            <a href="shop.html">Blazers</a>
                            <a href="shop.html">For Men</a>
                            <a href="shop.html">Handbags</a>
                            <a href="shop.html">Ladies Watches</a>
                            <a href="shop.html">Bags</a>
                            <a href="shop.html">Sport Shoes</a>
                            <a href="shop.html">Reebok Shoes</a>
                            <a href="shop.html">Puma Shoes</a>
                            <a href="shop.html">Boxers</a>
                            <a href="shop.html">Wallets</a>
                            <a href="shop.html">Tops</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="footer-cta pb-20">
                <div class="row justify-content-between">
                   <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6">
                      <div class="footer-cta__contact">
                         <div class="footer-cta__icon">
                            <i class="far fa-phone"></i>
                         </div>
                         <div class="footer-cta__text">
                            <a href="tel:0123456">980. 029. 666. 99</a>
                            <span>Working 8:00 - 22:00</span>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                      <div class="footer-cta__source">
                         <div class="footer-cta__source-content">
                            <h4 class="footer-cta__source-title">Download App on Mobile</h4>
                            <p>15% discount on your first purchase</p>
                         </div>
                         <div class="footer-cta__source-thumb">
                            <a href="#"><img src="front/assets/img/footer/f-google.jpg" alt="google"></a>
                            <a href="#"><img src="front/assets/img/footer/f-app.jpg" alt="app"></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="footer-copyright black-bg-2">
             <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-6 col-lg-7 col-md-5">
                      <div class="footer-copyright__content">
                         <span>Copyright 2022 <a href="index.html">©Ninico</a>. All rights reserved. Powered by <a
                               href="https://themeforest.net/user/theme_pure/portfolio">Theme_Pure</a>.</span>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-5 col-md-7">
                      <div class="footer-copyright__brand">
                         <img src="front/assets/img/footer/f-brand-icon-01.png" alt="footer-brand">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </footer>
    <!-- footer-area-end -->

     <!-- JS here -->
     <script src="front/assets/js/jquery.js"></script>
     <script src="front/assets/js/waypoints.js"></script>
     <script src="front/assets/js/bootstrap.bundle.min.js"></script>
     <script src="front/assets/js/swiper-bundle.js"></script>
     <script src="front/assets/js/slick.js"></script>
     <script src="front/assets/js/magnific-popup.js"></script>
     <script src="front/assets/js/nice-select.js"></script>
     <script src="front/assets/js/counterup.js"></script>
     <script src="front/assets/js/wow.js"></script>
     <script src="front/assets/js/isotope-pkgd.js"></script>
     <script src="front/assets/js/imagesloaded-pkgd.js"></script>
     <script src="front/assets/js/countdown.js"></script>
     <script src="front/assets/js/ajax-form.js"></script>
     <script src="front/assets/js/jquery-ui.js"></script>
     <script src="front/assets/js/meanmenu.js"></script>
     <script src="front/assets/js/main.js"></script>
{{-- @endsection --}}