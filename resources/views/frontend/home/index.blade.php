@extends('frontend.layouts.app_frontend')
@section('title_page', 'Trang chủ')
@section('content')
    <div class="content1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider owl-carousel owl-theme">
                        @foreach ($slides as $item)
                            <div class="slider-img">
                                <a href="{{ $item->link }}">
                                    <img src="{{ pare_url_file($item->avatar) }}" alt="{{ $item->name }}" width="100%">
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="sub-menu-slider owl-carousel">
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>
                        <div class="sub-menu-slider-item">
                            <a href="#"
                                class="sub-menu-slider-link d-flex flex-column align-items-center justify-content-center position-relative">
                                <img src="./assets/img/f457a1319b2daf6a8f1941b1a2c29995-2818814541369099881.webp"
                                    alt="" class="sub-menu-slider-img">
                                <span>Thu mua điện thoại</span>
                                <div class="sub-menu-slider-new position-absolute">Mới</div>
                            </a>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="content2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category">
                        <h3 class="title">Khám phá danh mục</h3>
                        <ul class="list-category owl-carousel position-relative">
                            @foreach ($categories->chunk(1) ?? [] as $category)
                                <li class="col-category d-flex flex-column align-items-center">
                                    @foreach ($category as $item)
                                        <a href="{{ route('get.category.by_slug', ['slug' => $item->slug]) }}"
                                            title="{{ $item->name }}"
                                            class="item-category d-flex flex-column align-items-center">
                                            <img src="{{ pare_url_file($item->avatar) }}" alt="{{ $item->name }}"
                                                width="84px" height="84px" class="category-img">
                                            <span>{{ $item->name }}</span>
                                        </a>
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">
                        Tin đăng dành cho bạn
                    </h3>
                </div>
            </div>
            <div class="row no-gutters mt-2">
                @foreach ($productNews ?? [] as $item)
                    <div class="col-lg-2dot4 col-6 col-md-4">
                        <div class="product-item ">
                            <div class="product-thumbnail position-relative">
                                <a href="{{ route('get.product.by_slug', ['slug' => $item->slug]) }}">
                                    <img src="{{ pare_url_file($item->avatar) }}" alt="{{ $item->name }}" width="100%">
                                </a>
                                <div class="product-heart">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="product-title d-flex justify-content-between">
                                    <h3>
                                        <a href="{{ route('get.product.by_slug', ['slug' => $item->slug]) }}"
                                            title="{{ $item->name }}" class="product-link">{{ $item->name }}</a>
                                    </h3>
                                    <div class="product-more position-relative">
                                        <span class="d-flex justify-content-start"><i
                                                class="fa-solid fa-ellipsis-vertical"></i></span>
                                        <div class="product-more-option">
                                            <ul class="mb-0">
                                                <li>
                                                    <a href="#" class="d-flex align-items-center p-2">
                                                        <img src="./assets/img/1.png" alt="" width="16px"
                                                            height="16px">
                                                        <p>Xa khu vực sống</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center p-2">
                                                        <img src="./assets/img/1.png" alt="" width="16px"
                                                            height="16px">
                                                        <p>Xa khu vực sống</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="d-flex align-items-center p-2">
                                                        <img src="./assets/img/1.png" alt="" width="16px"
                                                            height="16px">
                                                        <p>Xa khu vực sống</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="product-price ">
                                    {{ number_format($item->price, 0, ',', '.') }} đ
                                </span>
                            </div>
                            <div class="product-footer d-flex align-items-center">
                                <a href="#" class="d-flex align-items-center">
                                    <img src="{{ pare_url_file($item->user->avatar ?? '') }}"
                                        onerror="this.src='{{ asset('/assets/img/default_user.png') }}';" alt=""
                                        width="25px" height="25px" style="border-radius: 50%">
                                </a>
                                {{-- <div class="dot-divider">
                                </div> --}}
                                <div class="product-time mx-1 d-flex align-items-center">
                                    <span>{{ $item->created_at->diffForHumans() }} : </span> 
                                    {{-- <span>{{ $item->created_at->format('d-m-Y') }}</span> --}}
                                </div>
                                {{-- <div class="dot-divider">
                                </div> --}}
                                <div class="product-address mx-1 d-flex align-items-center">
                                    <span>{{ $item->province->name ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-more">
                        {{-- <a href="#">Xem thêm</a> --}}
                    </h4>
                </div>
            </div>
        </div>
    </div>
@stop
