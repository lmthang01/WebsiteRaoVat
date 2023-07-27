
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title_page')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-free-6.4.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


@include('frontend.layouts._inc_header')
<div class="profile-user-mobile">
    <div class="profile-top">
        <div class="info d-flex align-items-start">
            <div class="user-avt position-relative">
                <a href="#" class="user-avt-main">

                    <img src="/assets/img/25118033.jpg" alt="" width="100%">
                </a>
                <img src="/assets/img/edit-filled.svg" alt="edit" class="edit-avt">
            </div>
            <div class="user-info">
                <h3 class="user-name">
                    <a href="#" >Chợ tốt</a>
                </h3>
                <div class="user-evaluate d-flex align-items-center">
                    <span class="mr-1 font-weight-bold">0.0</span>
                    <div class="star">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <span style="color: var(--color-star);" class="ml-1">Chưa có đánh giá</span>
                </div>
                <div class="is-divider">

                </div>
                <div class="user-more-info d-flex">
                    <div class="user-follower">
                        <span class="font-weight-bold">0</span>
                        <span>Người theo dõi</span>
                    </div>
                    <div class="is-divider vertical">

                    </div>
                    <div class="user-follower">
                        <span class="font-weight-bold">0</span>
                        <span>Người theo dõi</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-points d-flex">
            <div class="mr-2">
                <span>Điểm tốt</span>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold">0</span>
                    <img class="ml-1" src="/assets/img/good-point.svg" alt="">
                </div>
            </div>
            <div>
                <span>Điểm tốt</span>
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold">0</span>
                    <img class="ml-1" src="/assets/img/good-point.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="profile-bottom d-flex flex-column">
        <ul class="list-manage">
            <h3 class="title-manage">
                Quản lý đơn hàng
            </h3>
            <li class="item-manage">
                <a href="#" class="link-manage d-flex align-items-center">
                    <img src="/assets/img/escrow_buy_orders.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                </a>
            </li>
            <li class="item-manage">
                <a href="#" class="link-manage d-flex align-items-center">
                    <img src="/assets/img/escrow_buy_orders.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                </a>
            </li>
            <li class="item-manage">
                <a href="#" class="link-manage pay d-flex align-items-center">
                    <img src="/assets/img/escrow.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                    <span class="font-weight-bold ml-auto link-now">Liên kết ngay <i class="fa-solid fa-angle-right ml-1"></i></span>
                </a>
            </li>
        </ul>
        <ul class="list-manage">
            <h3 class="title-manage">
                Quản lý đơn hàng
            </h3>
            <li class="item-manage">
                <a href="#" class="link-manage d-flex align-items-center">
                    <img src="/assets/img/escrow_buy_orders.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                </a>
            </li>
            <li class="item-manage">
                <a href="#" class="link-manage d-flex align-items-center">
                    <img src="/assets/img/escrow_buy_orders.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                    <div class="label-new">Mới</div>
                </a>
            </li>
            <li class="item-manage">
                <a href="#" class="link-manage pay d-flex align-items-center">
                    <img src="/assets/img/escrow.svg" alt="" class="img-manage" width="24px" height="24px" style="object-fit: contain; margin-right: 12px;">
                    <span>Đơn mua</span>
                    <span class="font-weight-bold ml-auto link-now">Liên kết ngay <i class="fa-solid fa-angle-right ml-1"></i></span>
                </a>
            </li>
        </ul>
    </div>
</div>
@yield('content')
<footer class="wrapper_footer d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="item-footer">
                    <h3 class="title-footer">
                        TẢI ỨNG DỤNG CHỢ TỐT
                    </h3>
                    <div class="d-flex">
                        <div class="pr-3 w-50">
                            <img src="/assets/img/group-qr.webp" alt="" width="100%">
                        </div>
                        <div class="w-50">
                            <a href="#">

                                <img class="pb-3" src="/assets/img/ios.svg" alt=""  width="100%">
                            </a>
                            <a href="#">

                                <img class="pb-3" src="/assets/img/ios.svg" alt=""  width="100%">
                            </a>
                            <a href="#">

                                <img class="pb-3" src="/assets/img/ios.svg" alt=""  width="100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item-footer">
                    <h3 class="title-footer">
                        TẢI ỨNG DỤNG CHỢ TỐT
                    </h3>
                    <ul class="menu-footer-list">
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>

                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item-footer">
                    <h3 class="title-footer">
                        TẢI ỨNG DỤNG CHỢ TỐT
                    </h3>
                    <ul class="menu-footer-list">
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>

                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                        <li class="menu-footer-item">
                            <a href="#" class="menu-footer-link">
                                Trung tâm trợ giúp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="item-footer">
                    <h3 class="title-footer">
                        TẢI ỨNG DỤNG CHỢ TỐT
                    </h3>
                    <ul class="d-flex">
                        <li class="mr-2">
                            <a href="#">
                                <img src="/assets/img/facebook.svg" alt="">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#">
                                <img src="/assets/img/facebook.svg" alt="">
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#">
                                <img src="/assets/img/facebook.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-footer">
                    <h3 class="title-footer">
                        TẢI ỨNG DỤNG CHỢ TỐT
                    </h3>
                    <ul class="d-flex">
                        <li class="mr-2">
                            <a href="#">
                                <img src="/assets/img/certificate.webp" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-mobile d-block d-md-none">
    <div class="footer-mobile-top px-2">
        <div class="d-flex align-items-center justify-content-between">

            <div>
                <img src="/assets/img/logo-ct-primary.png" alt="" width="96px">
            </div>
            <div class="d-flex justify-content-end flex-column">
                <div class="d-flex align-items-center justify-content-end" style="gap: 8px; color: #FF8800; font-size: 12px;">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                </div>
                <span style="font-size: 14px;  color: #777777;">109.000 Bình chọn</span>
            </div>
        </div>
        <div style="margin-top: 12px;">
            <h3 class="title-footer text-left"> Tải ngay ứng dụng - Mua bán cực sung</h3>
            <div class="d-flex justify-content-between">
                <img src="/assets/img/ios.svg" alt="">
                <img src="/assets/img/ios.svg" alt="">
                <img src="/assets/img/ios.svg" alt="">
            </div>
        </div>
    </div>
    <div class="footer-mobile-bottom px-2">
        <ul class="d-flex justify-content-around" style="margin: 16px 0">
            <li>
                <a href="#" style="font-size: 10px;color: #777777; text-transform: uppercase;">
                    Trợ giúp
                </a>
            </li>

            <li>
                <a href="#" style="font-size: 10px;color: #777777; text-transform: uppercase;">
                    Trợ giúp
                </a>
            </li>
            <li>
                <a href="#" style="font-size: 10px;color: #777777; text-transform: uppercase;">
                    Trợ giúp
                </a>
            </li>
        </ul>
        <ul class="d-flex justify-content-around" style="margin: 16px 0">
            <li>
                <a href="#" style="font-size: 10px;color: #777777; text-transform: uppercase;">
                    Trợ giúp
                </a>
            </li>

            <li>
                <a href="#" style="font-size: 10px;color: #777777; text-transform: uppercase;">
                    Trợ giúp
                </a>
            </li>
        </ul>
        <div>
            <img src="/assets/img/certificate.webp" alt="">
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="{{ asset('assets/css/bootstrap-4.0.0-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/css/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- Confirm delete --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- Xử lý alert form delete, submit start --}}
<script type="text/javascript">
    $(function() {
        $(document).on('click', '#delete_alert', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            // console.log(link);
            Swal.fire({
                title: 'Bạn có chắc muốn xóa không ?',
                text: "Bạn không thể khôi phục lại dữ liệu sau khi xóa !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;

                }
            })

        })
    });
    $('#alert_form_submit').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Bạn có muốn lưu dữ liệu không ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });
</script>
{{-- Xử lý alert form delete, submit end --}}
</body>
</html>
