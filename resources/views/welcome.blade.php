@extends('layouts.landing')
@section('content')
    <div class="th-hero-wrapper hero-3" id="hero"
        data-bg-src="{{ asset('landing-page/assets/img/hero/hero_bg_3_1.jpg') }}">
        <video class="hero-video" id="video" src="{{ asset('landing-page/assets/img/hero/hero-3-video.mp4') }}"
            loop="" muted="" autoplay="">
        </video>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-12">
                    <div class="hero-style3 text-center">
                        <div class="btn-wrap justify-content-center">
                            <a href="property.html" class="th-btn style-border th-btn-icon">Sales</a>
                            <a href="property.html" class="th-btn style-border th-btn-icon">Rentals</a>
                            <a href="property.html" class="th-btn style-border th-btn-icon">Commercial</a>
                        </div>
                        <h1 class="hero-title text-white">
                            SIRAB <br>
                            (Sistem Informasi Rusunawa)
                        </h1>
                        <form class="property-search-form">
                            <label>Property Search</label>
                            <div class="form-group">
                                <i class="far fa-search"></i>
                                <input class="form-control" type="text" placeholder="Lisiting ID or Location">
                            </div>
                            <select class="form-select">
                                <option value="category" selected="selected">Category</option>
                                <option value="luxury">Luxury</option>
                                <option value="commercial">Commercial</option>
                            </select>
                            <select class="form-select">
                                <option value="offer_type" selected="selected">Offer Type</option>
                                <option value="popularity">Popularity</option>
                                <option value="rating">Rating</option>
                                <option value="date">Latest</option>
                            </select>
                            <button class="th-btn" type="submit"><i class="far fa-search"></i> Search</button>
                        </form>
                        <div class="scroll-down">
                            <a href="#property-sec" class="hero-scroll-wrap"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========--><!--==============================
                                                                                                                                                                        Property Area 2
                                                                                                                                                                        ==============================-->
    <section class="space overflow-hidden" id="property-sec">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="40%" data-right="1%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_1.jpg') }}" alt="img">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="35%" data-left="0%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-5 col-lg-8">
                    <div class="title-area">
                        <span class="sub-title">Featured Listing</span>
                        <h2 class="sec-title text-theme">Find Your Dream Home Today </h2>
                        <p class="text-theme">Quis nulla blandit vulputate morbi adipiscing sem vestibulum. Nulla turpis
                            integer dui sed posuere sem. Id molestie mi arcu gravida lorem potenti.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs property-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="rent-tab" data-bs-toggle="tab"
                                    data-bs-target="#rent-tab-pane" type="button" role="tab"
                                    aria-controls="rent-tab-pane" aria-selected="true">Rent</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane"
                                    type="button" role="tab" aria-controls="buy-tab-pane"
                                    aria-selected="false">Buy</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content property-tab-content position-relative">
                <div class="tab-pane fade show active" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab"
                    tabindex="0">
                    <div class="slider-area property-slider2 slider-drag-wrap">
                        <div class="swiper th-slider"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"spaceBetween":"32","grabCursor":"true","slideToClickedSlide":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-1.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Town
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-2.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Family
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-3.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Apartments
                                                        House</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-4.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Modern
                                                        House</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-1.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Town
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-2.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Family
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                    <div class="slider-area property-slider2 slider-drag-wrap">
                        <div class="swiper th-slider"
                            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"spaceBetween":"32","grabCursor":"true","slideToClickedSlide":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-1.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img src="{{ asset('assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img src="{{ asset('assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img src="{{ asset('assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Town
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-2.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Family
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-3.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Apartments
                                                        House</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-4.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Modern
                                                        House</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-1.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Town
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="property-card2">
                                        <div class="property-card-thumb img-shine">
                                            <img src="{{ asset('landing-page/assets/img/property/property2-2.png') }}"
                                                alt="img">
                                        </div>
                                        <div class="property-card-meta">
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-1.svg') }}"
                                                    alt="img">Bed
                                                4</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-2.svg') }}"
                                                    alt="img">Bath
                                                2</span>
                                            <span><img
                                                    src="{{ asset('landing-page/assets/img/icon/property-icon1-3.svg') }}"
                                                    alt="img">1500
                                                sqft</span>
                                        </div>
                                        <div class="property-card-details">
                                            <div class="media-left">
                                                <h4 class="property-card-title"><a href="property-details.html">Family
                                                        Houses</a></h4>
                                                <h5 class="property-card-price">$ 1500.00 USD/night</h5>
                                                <p class="property-card-location">California</p>
                                            </div>
                                            <div class="btn-wrap">
                                                <a href="property-details.html"
                                                    class="th-btn style-border2 th-btn-icon">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--==============================
                                                                                                                                                                        Counter Area
                                                                                                                                                                        ==============================-->
    <div class="space bg-theme">
        <div class="container th-container2">
            <div class="counter-card-wrap style2">
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">20</span>+</h2>
                        <p class="box-text text-light">Years of Experiences</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">12</span>k+</h2>
                        <p class="box-text text-light">Featured Projects</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">985</span>+</h2>
                        <p class="box-text text-light">Modern Houses</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">85</span>+</h2>
                        <p class="box-text text-light">Team Members</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">25</span>k+</h2>
                        <p class="box-text text-light">Satisfied clieants</p>
                    </div>
                </div>
                <div class="counter-card style2">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number text-white">45</span>k</h2>
                        <p class="box-text text-light">Trusted Partners</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                        Service Area
                                                                                                                                                                        ==============================-->
    <section class="service-area-3 space overflow-hidden">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-2%" data-right="30%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title">Services</span>
                        <h2 class="sec-title text-theme">Your Best Possible Solutions</h2>
                        <p class="text-theme">Our thoughtfully designed neighborhood, which offers a special blend of
                            eco-friendly living and convenience, is a monument to sustainable growth.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="service.html" class="th-btn style2 th-btn-icon">Browse All Services</a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider service-slider3"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-1.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Trusted Developer</a></h3>
                            <p class="box-text">Generous amounts of south facing glazing maximize the solar gains for most
                                of the year.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/1-1.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-2.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Safe & Trustworthy</a></h3>
                            <p class="box-text">All living, dining, kitchen and play areas were devised by attached to the
                                home.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon4-1.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Zero Commissions</a></h3>
                            <p class="box-text">The studio used the existing foundations to reduce client costs and worked.
                            </p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-3.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Dedicated Support</a></h3>
                            <p class="box-text">All-inclusive real estate services to facilitate the easy management of
                                your properties.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-1.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Trusted Developer</a></h3>
                            <p class="box-text">Generous amounts of south facing glazing maximize the solar gains for most
                                of the year.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/1-1.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-2.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Safe & Trustworthy</a></h3>
                            <p class="box-text">All living, dining, kitchen and play areas were devised by attached to the
                                home.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon4-1.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Zero Commissions</a></h3>
                            <p class="box-text">The studio used the existing foundations to reduce client costs and worked.
                            </p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style3">
                            <div class="service-card-icon">
                                <img src="{{ asset('landing-page/assets/img/icon/service-icon3-3.svg') }}"
                                    alt="Icon">
                            </div>
                            <h3 class="box-title"><a href="property-details.html">Dedicated Support</a></h3>
                            <p class="box-text">All-inclusive real estate services to facilitate the easy management of
                                your properties.</p>
                            <div class="service-img img-shine">
                                <img src="{{ asset('landing-page/assets/img/service/3-2.png') }}" alt="img">
                                <a href="property-details.html" class="icon-btn">
                                    <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                        alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>

    <!--==============================
                                                                                                                                                                        About Area
                                                                                                                                                                        ==============================-->
    <div class="overflow-hidden bg-theme space overflow-hidden">
        <div class="about-3-bg-shape text-white sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="15%"
            data-left="3%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_1.jpg') }}" alt="img">
        </div>
        <div class="about-3-bg-shape sec-bg-shape2-2 text-white wave-anim shape-mockup d-xl-block d-none" data-top="30%"
            data-right="3%" data-bg-src="{{ asset('landing-page/assets/img/shape/section_shape_2_2.jpg') }}">
        </div>
        <div class="about-3-bg-shape text-white sec-bg-shape2-3 jump-reverse shape-mockup d-xl-block d-none"
            data-top="25%" data-left="3%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="about-3-bg-shape text-white sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="37%"
            data-right="38%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5">
                    <div class="title-area text-center">
                        <span class="sub-title text-white">About Us</span>
                        <h2 class="sec-title text-white">Our Behind Story</h2>
                        <p class="text-light">While surrounded by the splendor of nature, a concept of balancing luxury and
                            sustainability. Realar Residence therefore became a symbol of this admirable endeavor.</p>
                        <div class="btn-wrap justify-content-center">
                            <a href="about.html" class="th-btn mb-0 style-white2 th-btn-icon">More About Realar</a>
                            <a href="about.html" class="th-btn mb-0 style-border3 th-btn-icon">More About Realar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container th-container2">
            <ul class="about-3-thumb-list">
                <li class="gallery-card">
                    <a class="popup-image jump" href="{{ asset('landing-page/assets/img/gallery/3-1.png') }}">
                        <img src="{{ asset('landing-page/assets/img/gallery/3-1.png') }}" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump-reverse" href="{{ asset('landing-page/assets/img/gallery/3-2.png') }}">
                        <img src="{{ asset('landing-page/assets/img/gallery/3-2.png') }}" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump-reverse" href="{{ asset('landing-page/assets/img/gallery/3-3.png') }}">
                        <img src="{{ asset('landing-page/assets/img/gallery/3-3.png') }}" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image" href="{{ asset('landing-page/assets/img/gallery/3-4.png') }}">
                        <img src="{{ asset('landing-page/assets/img/gallery/3-4.png') }}" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
                <li class="gallery-card">
                    <a class="popup-image jump" href="{{ asset('landing-page/assets/img/gallery/3-5.png') }}">
                        <img src="{{ asset('landing-page/assets/img/gallery/3-5.png') }}" alt="img">
                        <i class="fal fa-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                        Portfolio Area
                                                                                                                                                                        ==============================-->
    <section class="space overflow-hidden overflow-hidden">
        <div class="project-bg-shape3-1 sec-bg-shape2-1 jump shape-mockup d-xxl-block d-none" data-bottom="5%"
            data-right="0%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title">Projects</span>
                        <h2 class="sec-title text-theme">Our Latetst Projects</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="project.html" class="th-btn style2 th-btn-icon">Browse All Project</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider slider-drag-wrap" id="projectSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_1.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">01. Luxury Apartment</a>
                                    </h3>
                                    <p class="portfolio-text">Architects and engineers collaborate to create detail design
                                        plans that translate concepts into realar team feasible structures. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_2.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">02. Family House</a></h3>
                                    <p class="portfolio-text">Many modern construction companies focus on sale sustainable
                                        building practices, realar incorporating eco-friendly material energy-efficient.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_3.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">03. Luxury Bedroom</a>
                                    </h3>
                                    <p class="portfolio-text">Architects and engineers collaborate to create detail design
                                        plans that translate concepts into realar team feasible structures. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_4.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">04. Eco House</a></h3>
                                    <p class="portfolio-text">Many modern construction companies focus on sale sustainable
                                        building practices, realar incorporating eco-friendly material energy-efficient.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_1.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">01. Luxury Apartment</a>
                                    </h3>
                                    <p class="portfolio-text">Architects and engineers collaborate to create detail design
                                        plans that translate concepts into realar team feasible structures. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_2.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">02. Family House</a></h3>
                                    <p class="portfolio-text">Many modern construction companies focus on sale sustainable
                                        building practices, realar incorporating eco-friendly material energy-efficient.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_3.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">03. Luxury Bedroom</a>
                                    </h3>
                                    <p class="portfolio-text">Architects and engineers collaborate to create detail design
                                        plans that translate concepts into realar team feasible structures. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="portfolio-card style3">
                                <div class="portfolio-img">
                                    <img src="{{ asset('landing-page/assets/img/project/project_3_4.png') }}"
                                        alt="project image">
                                    <a href="property-details.html" class="icon-btn">
                                        <div class="icon">
                                            <img src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img">
                                        </div>
                                        Look More
                                    </a>
                                </div>
                                <div class="portfolio-content">
                                    <h3 class="portfolio-title"><a href="property-details.html">04. Eco House</a></h3>
                                    <p class="portfolio-text">Many modern construction companies focus on sale sustainable
                                        building practices, realar incorporating eco-friendly material energy-efficient.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
                                                                                                                                                                        Video Area
                                                                                                                                                                        ==============================-->
    <div class="video-area-2 space overflow-hidden" data-bg-src="assets/img/bg/video-bg-2-1.png">
        <div class="container th-container2">
            <div class="row gy-50 flex-row-reverse">
                <div class="col-lg-7">
                    <div class="video-wrap2 mb-lg-0 mb-40">
                        <h2 class="video-title text-theme">We Manage Your Project, <br class="d-xl-block d-none"> You Run
                            Your Life</h2>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-btn popup-video">
                            <span class="play-btn style5"><i class="fa-sharp fa-solid fa-play"></i></span>
                            Play Video
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appointment-wrap2 bg-theme me-xxl-5">
                        <h2 class="form-title text-white">Schedule a visit</h2>
                        <form action="mail.php" method="POST" class="appointment-form ajax-contact">
                            <div class="row">
                                <div class="form-group style-border3 col-12">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name*">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group style-border3 col-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email*">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group style-border3 col-md-12">
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden>Select Service Type</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Residencial">Residencial</option>
                                        <option value="Deluxe">Deluxe</option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>
                                <div class="col-12 form-group style-border3">
                                    <i class="far fa-comments"></i>
                                    <textarea placeholder="Type Your Message" class="form-control"></textarea>
                                </div>
                                <div class="col-12 form-btn mt-4">
                                    <button class="th-btn style-border">Submit Message <span class="btn-icon"><img
                                                src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                        Client Area
                                                                                                                                                                        ==============================-->
    <div class="client-area-1 bg-theme space">
        <div class="container th-container2">
            <div class="swiper th-slider has-shadow" id="clientSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_1.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_2.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_3.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_4.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_5.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_6.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_1.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_2.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_3.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_4.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_5.svg" alt="Image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="assets/img/brand/brand_1_6.svg" alt="Image">
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                        Subscribe Area
                                                                                                                                                                        ==============================-->
    <div class="space overflow-hidden z-index-common" data-bg-src="assets/img/bg/subscribe-bg-3-1.png"
        data-overlay="theme" data-opacity="8">
        <div class="container th-container2">
            <div class="row gx-35">
                <div class="col-xxl-4 col-lg-5">
                    <div class="title-area">
                        <h2 class="sec-title text-white">Keep Up On What’s Happening</h2>
                    </div>
                    <form action="#" class="subscribe-form">
                        <div class="form-group style-white style-radius gx-4">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <button class="th-btn style-border">Subscribe Now <span class="btn-icon"><img
                                    src="assets/img/icon/paper-plane.svg" alt="img"></span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="location-map contact-sec-map z-index-3">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address bg-theme">
                <div class="thumb">
                    <img src="assets/img/property/property_inner_1.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">Address:</h4>
                    <p class="text">Brooklyn, New York 11233, United States</p>
                    <h4 class="title">Post Code:</h4>
                    <p class="text">12345</p>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                        Testimonial Area
                                                                                                                                                                        ==============================-->
    <section class="overflow-hidden space">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-bottom="2%" data-left="-1%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_1.jpg') }}" alt="img">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-top="-1%" data-right="10%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title">Testimonial</span>
                        <h2 class="sec-title text-theme">What Our Customers Says</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider3" class="slider-arrow style5 default slider-prev"><img
                                    src="{{ asset('landing-page/assets/img/icon/arrow-left.svg') }}"
                                    alt=""></button>
                            <button data-slider-next="#testiSlider3" class="slider-arrow style5 default slider-next"><img
                                    src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                    alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="swiper th-slider testi-slider3" id="testiSlider3"
                data-slider-options='{"spaceBetween":"32","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"},"1400":{"slidesPerView":"3"}},"centeredSlides": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="{{ asset('landing-page/assets/img/icon/qoute.svg') }}" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="{{ asset('landing-page/assets/img/testimonial/testi_2_2.png') }}"
                                        alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_2.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_2_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Andrew Simon</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style3">
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I
                                discovered Ecoland Residence. From the moment I stepped into this community, I knew it was
                                where I wanted to live. The commitment to eco-friendly living, coupled with modern
                                amenities, is truly commendable.”</p>
                            <div class="testi-grid_review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="testi-card_profile">
                                <div class="quote-icon">
                                    <img src="assets/img/icon/qoute.svg" alt="icon">
                                </div>
                                <div class="avatar">
                                    <img src="assets/img/testimonial/testi_1_1.png" alt="avatar">
                                </div>
                                <div class="testi-card_profile-details">
                                    <h3 class="testi-card_name">Ralph Edwards</h3>
                                    <span class="testi-card_desig">Property Expert</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
                                                                                                                                                                        Team Area
                                                                                                                                                                        ==============================-->
    <section class="space bg-theme overflow-hidden">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xxl-block d-none text-white" data-bottom="0%" data-left="1%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-4 col-lg-6">
                    <div class="title-area">
                        <span class="sub-title text-white">Team Member</span>
                        <h2 class="sec-title text-white">Meet The Awesome Team</h2>
                        <p class="text-light">Realar help you easily create a real estate trading website. With the
                            function Register, Login, Post real estate news.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="team.html" class="th-btn style-border th-btn-icon">View All Team</a>
                    </div>
                </div>
            </div>
            <div class="slider-area team-slider3">
                <div class="swiper th-slider slider-drag-wrap" id="teamSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}},"grabCursor":"true"}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('landing-page/assets/img/team/team_2_1.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Janny Wilson</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_2.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Andrew Richard</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img src="assets/img/icon/phone.svg"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_3.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Zarin Wilson</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_4.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Michel Smith</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_1.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Janny Wilson</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('landing-page/assets/img/team/team_2_2.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Andrew Richard</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('landing-page/assets/img/team/team_2_3.png') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Zarin Wilson</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card style3">
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="assets/img/team/team_2_4.png" alt="Team">
                                    </div>
                                    <div class="th-social-wrap">
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i
                                                    class="fab fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <a class="icon-btn" href="team-details.html"><img
                                                src="{{ asset('landing-page/assets/img/icon/arrow-right.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
                                <div class="team-card-content">
                                    <div class="media-left">
                                        <h3 class="box-title"><a href="team-details.html">Michel Smith</a></h3>
                                        <span class="team-desig">Property Expert</span>
                                    </div>
                                    <a class="icon-btn" href="tel:09876543210"><img
                                            src="{{ asset('landing-page/assets/img/icon/phone.svg') }}"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
                                                                                                                                                                        Blog Area
                                                                                                                                                                        ==============================-->
    <section class="overflow-hidden space">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="4%">
            <img src="{{ asset('landing-page/assets/img/shape/section_shape_2_3.jpg') }}" alt="img">
        </div>
        <div class="container th-container2">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title">News & Blog</span>
                        <h2 class="sec-title text-theme">Read Our Insights</h2>
                        <p class="sec-text text-theme">Architects and engineers collaborate to create detailed design
                            plans that translate concepts into feasible structures. </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="blog.html" class="th-btn style2 th-btn-icon">Browse All Blog</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow slider-drag-wrap" id="blogSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"4"}},"autoHeight":true}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog_3_1.jpg" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">April 22, 2024</a>
                                        <a href="blog.html">08 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Innovative structures rise,
                                            blending Construction and project</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_2.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">June 16, 2024</a>
                                        <a href="blog.html">10 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">What trends do we expect to start
                                            growing in the coming future?</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_3.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">April 22, 2024</a>
                                        <a href="blog.html">08 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Living sustainability: A day in
                                            the life at realar residence</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_4.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">June 16, 2024</a>
                                        <a href="blog.html">10 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The workplace tells and screams
                                            for more top story bloggers.</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_1.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">April 22, 2024</a>
                                        <a href="blog.html">08 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Innovative structures rise,
                                            blending Construction and project</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_2.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">June 16, 2024</a>
                                        <a href="blog.html">10 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">What trends do we expect to start
                                            growing in the coming future?</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_3.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">April 22, 2024</a>
                                        <a href="blog.html">08 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Living sustainability: A day in
                                            the life at realar residence</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style3">
                                <div class="blog-img">
                                    <img src="{{ asset('landing-page/assets/img/blog/blog_3_4.jpg') }}"
                                        alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html">June 16, 2024</a>
                                        <a href="blog.html">10 min read</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">The workplace tells and screams
                                            for more top story bloggers.</a></h3>
                                    <a href="blog-details.html" class="th-btn style-border2 th-btn-icon">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
