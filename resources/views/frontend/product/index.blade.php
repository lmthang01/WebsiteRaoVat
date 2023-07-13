@extends('frontend.layouts.app_frontend')
@section('title_page', $productDetail->name)
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb">
                        <a href="#">Chợ tốt Xe</a>
                        <span class="breadcumb-icon mx-1"><i class="fa-solid fa-angles-right"></i></span>
                        <span>Xe máy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail-product-image">
                        <div class="gallery">
                            <div class="gallery-image-preview position-relative d-none d-md-block">
                                <img src="{{ pare_url_file($productDetail->avatar) }}" alt="Đang tải avatar" width="100%">
                                <span class="preview-image-number"></span>
                                <span class="time-post-image">Tin đăng vào {{ $productDetail->created_at }}</span>
                            </div>
                            {{-- Load album ảnh --}}
                            <div class="gallery-product-slide owl-carousel">
                                @foreach ($images ?? [] as $item)
                                    <div>
                                        <img src="{{ pare_url_file($item) }}" alt="" width="100%" data-image-number="1"
                                            onmouseover="previewImage(this)">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="detail-product-title">
                        <h1>
                            <div class="img-partner">

                            </div>
                            {{ $productDetail->name }}
                        </h1>
                        <div class="price-wrapper d-flex justify-content-between">
                            <p class="product-detail-price">{{ number_format($productDetail->price, 0, ',', '.') }} đ</p>
                            <div>
                                <a href="#">
                                    <i class="fa-regular fa-share-from-square"></i>
                                    <span style="font-size: 12px;">Chia sẻ</span>
                                </a>
                                <a href="#" class="ml-2 d-inline-block">
                                    <i class="fa-regular fa-share-from-square"></i>
                                    <span style="font-size: 12px;">Chia sẻ</span>
                                </a>
                            </div>
                        </div>
                        <div class="description">
                            <div>
                                <span><i class="fa-solid fa-location-crosshairs"></i></span>
                                <span> {{ $productDetail->province->name ?? '...' }} -
                                    {{ $productDetail->district->name ?? '...' }} -
                                    {{ $productDetail->ward->name ?? '...' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="detail-product-description">
                        <h3 class="title">
                            Mô tả chi tiết
                        </h3>
                        {!! $productDetail->content !!}
                        <a href="#">Nhấn để hiện số</a>
                    </div>
                    <div class="detail-product-parameter">
                        <h3 class="title">
                            Thông số kỹ thuật
                        </h3>
                        <div class="d-flex ">

                            <div class="w-50">
                                <span><i class="fa-regular fa-address-card"></i></span>
                                <span class="ml-2">
                                    Hãng xe: <a href="#">Honda</a>
                                </span>
                            </div>
                            <div class="w-50">
                                <span><i class="fa-regular fa-address-card"></i></span>
                                <span class="ml-2">
                                    Hãng xe: <a href="#">Honda</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product-service">
                        <h3 class="title">
                            Các dịch vụ tiện ích
                        </h3>
                        <div class="d-flex">
                            <a href="#" class="d-flex flex-column align-items-center mr-2">
                                <img src="/assets/img/service.png" alt="" width="36px" class="mb-1">
                                <span>Định giá xe cũ</span>
                            </a>
                            <a href="#" class="d-flex flex-column align-items-center mr-2">
                                <img src="/assets/img/service.png" alt="" width="36px" class="mb-1">
                                <span>Định giá xe cũ</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 no-padding">
                    <div class="sidebar">

                        <div class="detail-product-info-user">
                            <a href="#" class="d-flex">
                                <div class="product-info-user_thumbnail">
                                    <img src="{{ pare_url_file($productDetail->user->avatar ?? "") }}" width="100%" style="border-radius: 50%">
                                </div>
                                <div class="product-info-user-main">
                                    <div class="d-flex">
                                        <h3 class="title">
                                            {{ $productDetail->user->name ?? '' }}
                                        </h3>
                                        <button>
                                            <span>Xem cửa hàng</span>
                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                        </button>
                                    </div>
                                    <div>
                                        <span class="product-info-user-main-icon"><i class="fa-solid fa-shop"></i></span>
                                        <span>Cửa hàng</span>
                                    </div>
                                    <div>
                                        <span class="product-info-user-main-icon" style="font-size: 8px;"><i
                                                class="fa-solid fa-circle"></i></span>
                                        <span>Hoạt động 12 giờ trước</span>
                                    </div>
                                    <div class="detail-product-evalution">
                                        <div class="d-flex align-items-center ">

                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                        </div>
                                        <span>4.3</span>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="detail-product-ispartner-wrapper">
                            <div class="detail-product-ispartner">

                                <div class="ispartner-main d-flex align-items-center">
                                    <div class="ispartner-icon">

                                    </div>
                                    <span class="ispartner-text font-weight-bold">
                                        Là Đối Tác Chợ Tốt
                                    </span>
                                    <span class="ispartner-open"><i class="fa-solid fa-angle-up"></i></span>
                                </div>
                                <div class="ispartner-list mt-3 d-flex flex-column">
                                    <div class="ispartner-item my-1 d-flex">
                                        <div class="ispartner-icon">

                                        </div>
                                        <span class="ispartner-text">
                                            Đối Tác cam kết tình trạng xe và giá đúng như mô tả
                                        </span>
                                    </div>
                                    <div class="ispartner-item my-1 d-flex">
                                        <div class="ispartner-icon">

                                        </div>
                                        <span class="ispartner-text">
                                            Đối Tác cam kết tình trạng xe và giá đúng như mô tả
                                        </span>
                                    </div>
                                </div>
                                <a href="#" class="ispartner-link">Tìm hiểu thêm</a>
                            </div>
                        </div>
                        <div class="contact-with-saler">
                            <div class="chat">
                                <div class="chat-title">
                                    <span>Liên hệ với người bán</span>
                                    <span
                                        style="color: #9b9b9b;
                                    font-size: 12px;
                                    display: flex;
                                    font-weight: 400;">Phản
                                        hồi</span>
                                </div>
                                <div class="chat-main">
                                    <ul class="list-chat">
                                        <li class="item-chat">
                                            Xe còn hay đã bán rồi ạ?
                                        </li>
                                        <li class="item-chat">
                                            Xe còn hay đã bán rồi ạ?
                                        </li>
                                        <li class="item-chat">
                                            Xe còn hay đã bán rồi ạ?
                                        </li>
                                        <li class="item-chat">
                                            Xe còn hay đã bán rồi ạ?
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lead-button">
                                <a href="#" class="button-call d-flex">
                                    <div>
                                        <span><i class="fa-solid fa-phone-volume"></i></span>
                                        <span class="ml-2 d-inline-block">{{ $productDetail->user->phone ?? "" }}</span>
                                    </div>
                                    <span>Bấm số để gọi</span>
                                </a>
                                <a href="#" class="button-chat d-flex">
                                    <div>
                                        <span><i class="fa-solid fa-phone-volume"></i></span>
                                    </div>
                                    <span>Chat với người bán</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lead-button-mobile">
        <a href="#" class="chat-btn">
            <span class="chat-btn-icon">
                <img src="/assets/img/chat.png" alt="" width="20px" height="20px">
            </span>
            <span>Chat</span>
        </a>
        <a href="#" class="sms-btn">
            <span class="chat-btn-icon">
                <img src="/assets/img/chat.png" alt="" width="20px" height="20px">
            </span>
            <span>Chat</span>
        </a>
        <a href="#" class="call-btn">
            <span class="chat-btn-icon">
                <img src="/assets/img/call.png" alt="" width="20px" height="20px">
            </span>
            <span class="ml-2">Gọi điện</span>
        </a>
    </div>
    <div class="detail-product-related-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="detail-product-related">
                        <div class="detail-product-related-title">
                            <h3 class="title mb-0">
                                Tin rao khác
                            </h3>
                            <a href="#">Xem tất cả</a>
                        </div>
                        <div class="detail-product-related-slider owl-carousel">
                            @foreach ($productNews ?? [] as $item)
                                <div class="product-item ">
                                    <div class="product-thumbnail position-relative">
                                        <a href="{{ route('get.product.by_slug', ['slug' => $item->slug]) }}">
                                            <img src="{{ pare_url_file($item->avatar) }}"
                                                alt="{{ $item->name }}" width="100%">
                                        </a>
                                        <div class="product-heart">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-title d-flex ">
                                            <h3>
                                                <a href="{{ route('get.product.by_slug', ['slug' => $item->slug]) }}" title="{{ $item->name }}" class="product-link">{{ $item->name }}</a>
                                            </h3>
                                        </div>
                                        <span class="product-price ">
                                            {{ number_format($item->price,0,',','.') }} đ
                                        </span>
                                    </div>
                                    <div class="product-footer d-flex align-items-center">
                                        <a href="#" class="d-flex align-items-center">
                                            <img src="/assets/img/user.svg" alt="" width="16px"
                                                height="16px">
                                        </a>
                                        <div class="dot-divider">

                                        </div>
                                        <div class="product-time mx-1 d-flex align-items-center">
                                            <span>15 giờ trước</span>
                                        </div>
                                        <div class="dot-divider">

                                        </div>
                                        <div class="product-address mx-1 d-flex align-items-center">
                                            <span>Thành phố hồ chí minh</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(img) {
            let totalImage = document.querySelectorAll('.gallery-product-slide img')
            let previewImg = document.querySelector('.gallery-image-preview img');
            previewImg.src = img.src;
            let imageNumber = img.getAttribute('data-image-number');
            let previewImageNumber = document.querySelector('.preview-image-number');
            previewImageNumber.innerHTML = imageNumber + "/" + totalImage.length;
        }
    </script>
@stop
