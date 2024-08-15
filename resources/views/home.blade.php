@extends('layouts.app')
@section('content')
    {{--Content--}}
    <section class="homepage-slide">
        <div class="container">
            <div class="slide-content">
                <div class="slide-content__left">
                    <div class="slide-main swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="banner-slide-item">
                                        <figure><img src="dist/images/bb-slide-1.png" alt="bb-slide-1"></figure>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="banner-slide-item">
                                        <figure><img src="dist/images/bb-slide-1.png" alt="bb-slide-1"></figure>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="banner-slide-item">
                                        <figure><img src="dist/images/bb-slide-1.png" alt="bb-slide-1"></figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-content__right">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/sl-1.png" alt="sl-1"></figure>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/sl-2.png" alt="sl-2"></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-slidecate">
        <div class="container">
            <div class="homepage-slidecate__cate">
                <div class="slide-cate swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-1.svg" alt="cate-1"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-2.svg" alt="cate-2"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-3.svg" alt="cate-3"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-4.svg" alt="cate-4"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-5.svg" alt="cate-5"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slide-cate__item">
                                    <div class="item">
                                        <figure><img src="dist/images/cate-6.svg" alt="cate-6"></figure>
                                        <span>Deal hot<br>mỗi ngày</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="homepage-flashsale">
        <div class="container">
            <div class="homepage-flashsale__title">
                <div class="title-content">
                    <div class="left">
                        <div class="main-title title-content__title">
                            <figure><img src="dist/images/flash.svg" alt="flash"></figure>
                            <h2>Flash sale</h2>
                        </div>
                        <div class="title-content__countdown">
                            <label id="hours" class="label-time"></label>
                            <label id="minutes" class="label-time"></label>
                            <label id="seconds" class="label-time"></label>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#">Xem tất cả<i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="homepage-flash__content">
                    <div class="list-item">
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
                                <div class="products">
                                    <div class="product">
                                        <div class="product__img">
                                            <a href="#" class="img">
                                                <span class="label">25% OFF</span>
                                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__content__title">
                                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                                </h3>
                                            </div>
                                            <div class="product__content__price">
                                                <span class="price-old">539.380 đ</span>
                                                <span class="price-sale">600.000 đ</span>
                                            </div>
                                            <div class="product__content__meta-info">
                                                <a href="#">Mua ngay</a>
                                                <div class="bnt-info">
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
                            <div class="products">
                                <div class="product">
                                    <div class="product__img">
                                        <a href="#" class="img">
                                            <span class="label">25% OFF</span>
                                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__content__title">
                                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                            </h3>
                                        </div>
                                        <div class="product__content__price">
                                            <span class="price-old">539.380 đ</span>
                                            <span class="price-sale">600.000 đ</span>
                                        </div>
                                        <div class="product__content__meta-info">
                                            <a href="#">Mua ngay</a>
                                            <div class="bnt-info">
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                stroke="#292B2E" stroke-width="1.2"></path>
                                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path
                                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
                        <div class="products">
                            <div class="product">
                                <div class="product__img">
                                    <a href="#" class="img">
                                        <span class="label">25% OFF</span>
                                        <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                    </a>
                                </div>
                                <div class="product__content">
                                    <div class="product__content__title">
                                        <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                        </h3>
                                    </div>
                                    <div class="product__content__price">
                                        <span class="price-old">539.380 đ</span>
                                        <span class="price-sale">600.000 đ</span>
                                    </div>
                                    <div class="product__content__meta-info">
                                        <a href="#">Mua ngay</a>
                                        <div class="bnt-info">
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                            d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                            stroke="#292B2E" stroke-width="1.2"></path>
                                                    <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path
                                                            d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
                    <div class="products">
                        <div class="product">
                            <div class="product__img">
                                <a href="#" class="img">
                                    <span class="label">25% OFF</span>
                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                </a>
                            </div>
                            <div class="product__content">
                                <div class="product__content__title">
                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                    </h3>
                                </div>
                                <div class="product__content__price">
                                    <span class="price-old">539.380 đ</span>
                                    <span class="price-sale">600.000 đ</span>
                                </div>
                                <div class="product__content__meta-info">
                                    <a href="#">Mua ngay</a>
                                    <div class="bnt-info">
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                        d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                        stroke="#292B2E" stroke-width="1.2"></path>
                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path
                                                        d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </button>
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
                <div class="products">
                    <div class="product">
                        <div class="product__img">
                            <a href="#" class="img">
                                <span class="label">25% OFF</span>
                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                            </a>
                        </div>
                        <div class="product__content">
                            <div class="product__content__title">
                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                </h3>
                            </div>
                            <div class="product__content__price">
                                <span class="price-old">539.380 đ</span>
                                <span class="price-sale">600.000 đ</span>
                            </div>
                            <div class="product__content__meta-info">
                                <a href="#">Mua ngay</a>
                                <div class="bnt-info">
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path
                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                            </path>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
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
    <section class="main-banner homepage-banner-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 p-10 main-banner">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/banner-1.png" alt="banner-1"></figure>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-10 main-banner">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/banner-2.png" alt="banner-2"></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-popular">
        <div class="container">
            <div class="popular-content">
                <div class="popular-content__title">
                    <div class="main-title">
                        <figure><img src="dist/images/pplar.svg" alt="pplar"></figure>
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    <div class="popular-content__title-tab">
                        <div class="list-title">
                            <ul>
                                <li><a href="#">Iphone</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Trang sức</a></li>
                                <li><a href="#">Túi sách</a></li>
                                <li><a href="#">Bàn bóng bàn tiêu chuẩn</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="popular-content__list">
                    <div class="left">
                        <figure><img src="dist/images/bb-left.png" alt="bb-left"></figure>
                    </div>
                    <div class="right">
                        <div class="row">
                            <div class="col-6 col-sm-4 col-xl-3 p-10">
                                <div class="products">
                                    <div class="product">
                                        <div class="product__img">
                                            <a href="#" class="img">
                                                <span class="label">25% OFF</span>
                                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__content__title">
                                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                                </h3>
                                            </div>
                                            <div class="product__content__price">
                                                <span class="price-old">539.380 đ</span>
                                                <span class="price-sale">600.000 đ</span>
                                            </div>
                                            <div class="product__content__meta-info">
                                                <a href="#">Mua ngay</a>
                                                <div class="bnt-info">
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-xl-3 p-10">
                            <div class="products">
                                <div class="product">
                                    <div class="product__img">
                                        <a href="#" class="img">
                                            <span class="label">25% OFF</span>
                                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__content__title">
                                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                            </h3>
                                        </div>
                                        <div class="product__content__price">
                                            <span class="price-old">539.380 đ</span>
                                            <span class="price-sale">600.000 đ</span>
                                        </div>
                                        <div class="product__content__meta-info">
                                            <a href="#">Mua ngay</a>
                                            <div class="bnt-info">
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                stroke="#292B2E" stroke-width="1.2"></path>
                                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path
                                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-3 p-10">
                        <div class="products">
                            <div class="product">
                                <div class="product__img">
                                    <a href="#" class="img">
                                        <span class="label">25% OFF</span>
                                        <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                    </a>
                                </div>
                                <div class="product__content">
                                    <div class="product__content__title">
                                        <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                        </h3>
                                    </div>
                                    <div class="product__content__price">
                                        <span class="price-old">539.380 đ</span>
                                        <span class="price-sale">600.000 đ</span>
                                    </div>
                                    <div class="product__content__meta-info">
                                        <a href="#">Mua ngay</a>
                                        <div class="bnt-info">
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                            d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                            stroke="#292B2E" stroke-width="1.2"></path>
                                                    <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path
                                                            d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-xl-3 p-10">
                    <div class="products">
                        <div class="product">
                            <div class="product__img">
                                <a href="#" class="img">
                                    <span class="label">25% OFF</span>
                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                </a>
                            </div>
                            <div class="product__content">
                                <div class="product__content__title">
                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                    </h3>
                                </div>
                                <div class="product__content__price">
                                    <span class="price-old">539.380 đ</span>
                                    <span class="price-sale">600.000 đ</span>
                                </div>
                                <div class="product__content__meta-info">
                                    <a href="#">Mua ngay</a>
                                    <div class="bnt-info">
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                        d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                        stroke="#292B2E" stroke-width="1.2"></path>
                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path
                                                        d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </button>
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-3 p-10">
                <div class="products">
                    <div class="product">
                        <div class="product__img">
                            <a href="#" class="img">
                                <span class="label">25% OFF</span>
                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                            </a>
                        </div>
                        <div class="product__content">
                            <div class="product__content__title">
                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                </h3>
                            </div>
                            <div class="product__content__price">
                                <span class="price-old">539.380 đ</span>
                                <span class="price-sale">600.000 đ</span>
                            </div>
                            <div class="product__content__meta-info">
                                <a href="#">Mua ngay</a>
                                <div class="bnt-info">
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path
                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                            </path>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-3 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-3 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-3 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
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
        </div>
    </section>
    <section class="main-banner homepage-banner-2">
        <div class="container">
            <div class="item">
                <a href="#">
                    <figure><img src="dist/images/banner-3.png" alt="banner-3"></figure>
                </a>
            </div>
        </div>
    </section>
    <section class="homepage-seller homepage-popular">
        <div class="container">
            <div class="seller-content popular-content">
                <div class="seller-content__title popular-content__title">
                    <div class="main-title">
                        <figure><img src="dist/images/pplar.svg" alt="pplar"></figure>
                        <h2>Sản phẩm bán chạy</h2>
                    </div>
                    <div class="seller-content__title-tab popular-content__title-tab">
                        <div class="list-title">
                            <ul>
                                <li><a href="#">Iphone</a></li>
                                <li><a href="#">Đồng hồ</a></li>
                                <li><a href="#">Trang sức</a></li>
                                <li><a href="#">Túi sách</a></li>
                                <li><a href="#">Bàn bóng bàn tiêu chuẩn</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                                <li><a href="#">Ghế massage</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="seller-content__list popular-content__list">
                    <div class="right">
                        <div class="row">
                            <div class="col-6 col-sm-4 col-xl-2 p-10">
                                <div class="products">
                                    <div class="product">
                                        <div class="product__img">
                                            <a href="#" class="img">
                                                <span class="label">25% OFF</span>
                                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                            </a>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__content__title">
                                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                                </h3>
                                            </div>
                                            <div class="product__content__price">
                                                <span class="price-old">539.380 đ</span>
                                                <span class="price-sale">600.000 đ</span>
                                            </div>
                                            <div class="product__content__meta-info">
                                                <a href="#">Mua ngay</a>
                                                <div class="bnt-info">
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                                            <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-xl-2 p-10">
                            <div class="products">
                                <div class="product">
                                    <div class="product__img">
                                        <a href="#" class="img">
                                            <span class="label">25% OFF</span>
                                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__content__title">
                                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                            </h3>
                                        </div>
                                        <div class="product__content__price">
                                            <span class="price-old">539.380 đ</span>
                                            <span class="price-sale">600.000 đ</span>
                                        </div>
                                        <div class="product__content__meta-info">
                                            <a href="#">Mua ngay</a>
                                            <div class="bnt-info">
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-miterlimit="10"
                                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                stroke="#292B2E" stroke-width="1.2"></path>
                                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                              stroke-width="1.2" stroke-linecap="round"></path>
                                                        <path
                                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 p-10">
                        <div class="products">
                            <div class="product">
                                <div class="product__img">
                                    <a href="#" class="img">
                                        <span class="label">25% OFF</span>
                                        <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                    </a>
                                </div>
                                <div class="product__content">
                                    <div class="product__content__title">
                                        <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                        </h3>
                                    </div>
                                    <div class="product__content__price">
                                        <span class="price-old">539.380 đ</span>
                                        <span class="price-sale">600.000 đ</span>
                                    </div>
                                    <div class="product__content__meta-info">
                                        <a href="#">Mua ngay</a>
                                        <div class="bnt-info">
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-miterlimit="10"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path
                                                            d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                            stroke="#292B2E" stroke-width="1.2"></path>
                                                    <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                          stroke-width="1.2" stroke-linecap="round"></path>
                                                    <path
                                                            d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-xl-2 p-10">
                    <div class="products">
                        <div class="product">
                            <div class="product__img">
                                <a href="#" class="img">
                                    <span class="label">25% OFF</span>
                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                </a>
                            </div>
                            <div class="product__content">
                                <div class="product__content__title">
                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                    </h3>
                                </div>
                                <div class="product__content__price">
                                    <span class="price-old">539.380 đ</span>
                                    <span class="price-sale">600.000 đ</span>
                                </div>
                                <div class="product__content__meta-info">
                                    <a href="#">Mua ngay</a>
                                    <div class="bnt-info">
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                        d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                        stroke="#292B2E" stroke-width="1.2"></path>
                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                <path
                                                        d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </button>
                                        <button>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                            stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 p-10">
                <div class="products">
                    <div class="product">
                        <div class="product__img">
                            <a href="#" class="img">
                                <span class="label">25% OFF</span>
                                <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                            </a>
                        </div>
                        <div class="product__content">
                            <div class="product__content__title">
                                <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                                </h3>
                            </div>
                            <div class="product__content__price">
                                <span class="price-old">539.380 đ</span>
                                <span class="price-sale">600.000 đ</span>
                            </div>
                            <div class="product__content__meta-info">
                                <a href="#">Mua ngay</a>
                                <div class="bnt-info">
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-miterlimit="10"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                            <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                  stroke-width="1.2" stroke-linecap="round"></path>
                                            <path
                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                            </path>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-6 col-sm-4 col-xl-2 p-10">
            <div class="products">
                <div class="product">
                    <div class="product__img">
                        <a href="#" class="img">
                            <span class="label">25% OFF</span>
                            <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                        </a>
                    </div>
                    <div class="product__content">
                        <div class="product__content__title">
                            <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật Bản</a>
                            </h3>
                        </div>
                        <div class="product__content__price">
                            <span class="price-old">539.380 đ</span>
                            <span class="price-sale">600.000 đ</span>
                        </div>
                        <div class="product__content__meta-info">
                            <a href="#">Mua ngay</a>
                            <div class="bnt-info">
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                              stroke-width="1.2" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                                d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                stroke="#292B2E" stroke-width="1.2"></path>
                                        <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                              stroke-width="1.2" stroke-linecap="round"></path>
                                        <path
                                                d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                        </path>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" </div>
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            </button>
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
        </div>
    </section>
    <section class="main-banner homepage-banner-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 p-10 main-banner">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/banner-1.png" alt="banner-1"></figure>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-10 main-banner">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/banner-2.png" alt="banner-2"></figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-cate">
        <div class="container">
            <div class="homepage-cate__title">
                <div class="main-title">
                    <figure><img src="dist/images/list-cate.svg" alt="listcate"></figure>
                    <h2>Danh mục sản phẩm</h2>
                </div>
            </div>
            <div class="homepage-cate__content">
                <div class="cate-item">
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <figure><img src="dist/images/category-1.png" alt="category-1"></figure>
                            <div class="info">
                                <p>Sưu tầm đồ cổ</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section class="homepage-brand">
        <div class="container">
            <div class="homepage-brand__title">
                <div class="main-title">
                    <figure><img src="dist/images/list-brand.svg" alt="listbrand"></figure>
                    <h2>Thương hiệu nổi bật</h2>
                </div>
            </div>
            <div class="homepage-brand__content">
                <div class="brand-slide">
                    <div class="slide-brand swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slide-brand__item">
                                        <div class="item">
                                            <figure><img src="dist/images/brand-1.png" alt="brand-1"></figure>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="homepage-news">
        <div class="container">
            <div class="homepage-news__title">
                <div class="main-title">
                    <figure><img src="dist/images/list-news.svg" alt="listnews"></figure>
                    <h2>Tư vấn mua sản phẩm</h2>
                </div>
            </div>
            <div class="homepage-news__content">
                <div class="news-item">
                    <div class="row">
                        <div class="col-md-3 p-10">
                            <div class="item">
                                <a href="#" class="new__img">
                                    <figure><img src="dist/images/news-1.png" alt="news"></figure>
                                </a>
                                <div class="info">
                                    <h3><a href="#">Dịch vụ gửi hàng từ Mỹ về Việt Nam trọn gói, giá rẻ nhất</a></h3>
                                    <p>Không chỉ là sàn thương mại điện tử kết nối nguồn hàng trực tuyến đến từ Nhật Bản, Mỹ
                                        mà
                                        chúng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-10">
                            <div class="item">
                                <a href="#" class="new__img">
                                    <figure><img src="dist/images/news-1.png" alt="news"></figure>
                                </a>
                                <div class="info">
                                    <h3><a href="#">Dịch vụ gửi hàng từ Mỹ về Việt Nam trọn gói, giá rẻ nhất</a></h3>
                                    <p>Không chỉ là sàn thương mại điện tử kết nối nguồn hàng trực tuyến đến từ Nhật Bản, Mỹ
                                        mà
                                        chúng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-10">
                            <div class="item">
                                <a href="#" class="new__img">
                                    <figure><img src="dist/images/news-1.png" alt="news"></figure>
                                </a>
                                <div class="info">
                                    <h3><a href="#">Dịch vụ gửi hàng từ Mỹ về Việt Nam trọn gói, giá rẻ nhất</a></h3>
                                    <p>Không chỉ là sàn thương mại điện tử kết nối nguồn hàng trực tuyến đến từ Nhật Bản, Mỹ
                                        mà
                                        chúng</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-10">
                            <div class="item">
                                <a href="#" class="new__img">
                                    <figure><img src="dist/images/news-1.png" alt="news"></figure>
                                </a>
                                <div class="info">
                                    <h3><a href="#">Dịch vụ gửi hàng từ Mỹ về Việt Nam trọn gói, giá rẻ nhất</a></h3>
                                    <p>Không chỉ là sàn thương mại điện tử kết nối nguồn hàng trực tuyến đến từ Nhật Bản, Mỹ
                                        mà
                                        chúng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="homepage-procedure">
        <div class="container">
            <div class="homepage-procedure__title">
                <div class="main-title">
                    <h2>Quy trình mua hàng</h2>
                </div>
            </div>
            <div class="homepage-procedure__content">
                <div class="slide-procedure">
                    <div class="procedure-item">
                        <div class="swiper-slide">
                            <div class="item-prosedure">
                                <div class="img">
                                    <figure><img src="dist/images/prose-1.svg" alt="prose"></figure>
                                </div>
                                <div class="description">
                                    <h3>Tìm kiếm sản phẩm</h3>
                                    <p>Tìm Kiếm Từ Khoá Sản Phẩm Bạn Muốn Mua</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-prosedure">
                                <div class="img">
                                    <figure><img src="dist/images/prose-1.svg" alt="prose"></figure>
                                </div>
                                <div class="description">
                                    <h3>Tìm kiếm sản phẩm</h3>
                                    <p>Tìm Kiếm Từ Khoá Sản Phẩm Bạn Muốn Mua</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-prosedure">
                                <div class="img">
                                    <figure><img src="dist/images/prose-1.svg" alt="prose"></figure>
                                </div>
                                <div class="description">
                                    <h3>Tìm kiếm sản phẩm</h3>
                                    <p>Tìm Kiếm Từ Khoá Sản Phẩm Bạn Muốn Mua</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-prosedure">
                                <div class="img">
                                    <figure><img src="dist/images/prose-1.svg" alt="prose"></figure>
                                </div>
                                <div class="description">
                                    <h3>Tìm kiếm sản phẩm</h3>
                                    <p>Tìm Kiếm Từ Khoá Sản Phẩm Bạn Muốn Mua</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-prosedure">
                                <div class="img">
                                    <figure><img src="dist/images/prose-1.svg" alt="prose"></figure>
                                </div>
                                <div class="description">
                                    <h3>Tìm kiếm sản phẩm</h3>
                                    <p>Tìm Kiếm Từ Khoá Sản Phẩm Bạn Muốn Mua</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection