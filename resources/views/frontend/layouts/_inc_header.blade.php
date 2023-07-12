<header class="wrapper_header">
    <div class="menu-header">

        <div class="container">
            <div class="row">
                <div class="col-lg-2 d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="header-logo">
                        <a href="/">

                            <img src="{{ asset('assets/img/transparent_logo.webp') }} " alt="" width="100%"
                                height="35px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 d-none d-md-block">
                    <nav class="nav-header h-100">
                        <ul class="list-menu d-flex justify-content-end h-100 align-items-center">
                            {{-- <li class="item-menu d-flex align-items-center px-3">
                                <a href="#" class="link-menu d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4" width="1em" height="1em" fill="none" class="aw__i1xnxzjm"><g fill="currentColor"><path d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z"></path><path d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576"></path></g></svg>
                                    <span class="ml-2">Quản lý tin</span>
                                </a>
                            </li>
                            <li class="item-menu d-flex align-items-center px-3">
                                <a href="#" class="link-menu d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4" width="1em" height="1em" fill="none" class="aw__i1xnxzjm"><g fill="currentColor"><path d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z"></path><path d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576"></path></g></svg>
                                    <span class="ml-2">Đơn hàng</span>
                                </a>
                                <ul class="sub-menu">
                                    <svg width="15.999999999999998" height="15.999999999999998" preserveAspectRatio="xMaxYMax" viewBox="0 0 15.999999999999998 8" style="position: absolute; left: 60px; transform: translateX(-50%); will-change: top, left; bottom: 100%;"><path fill="#ffffff" stroke-width="0" stroke="#ffffff" d="M 0 8 H 15.999999999999998 C 8.999999999999998 1 7.999999999999999 0 7.999999999999999 0 C 7.999999999999999 0 6.999999999999999 1 0 8"></path><path fill="#ffffff" d="M 0 8 H 15.999999999999998 L 15.999999999999998 8 H 0 Z"></path></svg>
                                    <li class="sub-item">
                                        <a href="#" class="sub-link">
                                            <span>Đơn mua</span>
                                        </a>
                                    </li>
                                    <li class="sub-item">
                                        <a href="#" class="sub-link">
                                            <span>Đơn mua</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="item-menu d-flex align-items-center px-3">
                                <a href="#" class="link-menu d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" data-type="monochrome" viewBox="0 0 26.272 24.4" width="1em" height="1em" fill="none" class="aw__i1xnxzjm"><g fill="currentColor"><path d="M7.93 10.791c1.502.355 3.04.533 4.582.528 2.287 0 4.535-.382 6.17-1.05.974-.465.557-.225 1.246-.702l.528-.464c.369.736.992 1.27 1.508 1.712l.22.191a7.999 7.999 0 01.976 3.8c0 4.424-3.738 8.162-8.162 8.162-4.424 0-8.162-3.738-8.162-8.162a7.99 7.99 0 011.095-4.015zm-5.464-4.9l.232-.141a8.086 8.086 0 01-.217-.403l-.017-.032a10.24 10.24 0 01-.448-1.03 6.989 6.989 0 002.028.831 1.23 1.23 0 001.382-.646l.254-.145c1.734-.037 3.48-.766 5.172-1.471 1.276-.532 2.48-1.034 3.55-1.192.67-.1 1.308-.15 1.892-.15 1.63 0 2.86.386 3.552 1.114.464.489.68 1.129.64 1.9-.025.51.267.981.734 1.186.438.19.972.097 1.32-.226.126.099.27.172.427.216.413.115.652.216.8.338.16.13.314.364.503.76.876 1.832.478 2.79-.181 4.376l-.018.045c-.126-.435-.291-.77-.587-1.054a11.595 11.595 0 00-.546-.488c-.516-.442-1.05-.898-1.231-1.458A1.222 1.222 0 0019.6 7.82l-.385.399c-.825.547-.582.377-.98.615-.04.018-.08.035-.12.05-1.46.597-3.503.94-5.603.94-1.59 0-3.253-.195-4.567-.534a1.236 1.236 0 00-.937.137c-.232.14-.34.38-.633 1.022l-.143.313c-.19-.714-.428-1.595-.605-2.055a1.228 1.228 0 00-.52-.614c-.8-.473-1.456-1.03-1.952-1.659a4.43 4.43 0 01-.077-.1l-.076-.106a6.617 6.617 0 01-.299-.472l-.191.11.187-.114-.233.14zm23.154.264c-.213-.448-.417-.783-.66-1.045l.62.31-.62-.883c-.345-.49-.967-.77-1.708-.77-.463 0-.914.107-1.274.295-.06-.958-.417-1.802-1.048-2.466C19.634.232 17.25-.271 14.183.182c-1.254.185-2.602.747-3.906 1.291-1.6.667-3.255 1.357-4.734 1.357-1.92-.205-2.354-.722-3.372-1.783l.086.795.009.065c.039.248.15.516.327.793.069.11.147.218.232.325-.886-.538-1.602-1.343-2.17-2.43L.345 0 .153.644C-.32 2.23.387 4.523 1.13 5.993l.02.046.005.005c.08.156.164.311.252.464l.084.14.014.023c.085.142.175.28.27.416l.016.022c.06.086.124.17.189.253.593.75 1.36 1.413 2.283 1.97.895 2.367 1.099 4.39 1.145 5.17-.004.1-.005.202-.005.304 0 5.2 4.394 9.594 9.594 9.594 5.2 0 9.595-4.394 9.595-9.594 0-.133-.003-.265-.01-.396.21-1.031.555-1.859.888-2.66.704-1.696 1.312-3.16.15-5.595z"></path><path d="M11.84 14.937a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m6.547 0a1.052 1.052 0 000-2.1 1.052 1.052 0 000 2.1m-3.328 5.912c1.97 0 3.767-.987 4.69-2.576a.718.718 0 00-1.24-.72c-.667 1.149-1.99 1.863-3.45 1.863-1.462 0-2.784-.714-3.451-1.863a.711.711 0 00-.436-.332.717.717 0 00-.803 1.052c.922 1.589 2.72 2.576 4.69 2.576"></path></g></svg>
                                    <span class="ml-2">Quản lý tin</span>
                                </a>
                            </li> --}}
                            <li class="item-menu d-flex align-items-center pl-3">
                                <a href="#" class="link-menu d-flex align-items-center">
                                    <img src="{{ pare_url_file(\Auth::user()->avatar ?? '') }}"
                                        onerror="this.src='https://123code.net/images/preloader.png';" alt=""
                                        width="34px" height="34px">
                                    <span class="ml-2">{{ Auth::user()->name ?? 'Chưa đăng nhập' }}</span>
                                    <span class="ml-2">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </span>
                                </a>
                                <div class="profile-user">
                                    <div class="profile-top">
                                        <div class="info d-flex align-items-start">
                                            <div class="user-avt position-relative">
                                                <a href="#" class="user-avt-main">
                                                    <img src="{{ pare_url_file(\Auth::user()->avatar ?? '') }}"
                                                        onerror="this.src='https://123code.net/images/preloader.png';"
                                                        alt="" width="34px" height="34px">
                                                    <img src="./assets/img/25118033.jpg" alt="" width="100%">
                                                </a>
                                                <img src="./assets/img/edit-filled.svg" alt="edit" class="edit-avt">
                                            </div>
                                            <div class="user-info">
                                                <h3 class="user-name">
                                                    <a href="#">Chợ tốt</a>
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
                                                    <span style="color: var(--color-star);" class="ml-1">Chưa có đánh
                                                        giá</span>
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
                                                    <img class="ml-1" src="./assets/img/good-point.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <span>Điểm tốt</span>
                                                <div class="d-flex align-items-center">
                                                    <span class="font-weight-bold">0</span>
                                                    <img class="ml-1" src="./assets/img/good-point.svg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-bottom d-flex flex-column">
                                        <ul class="list-manage">
                                            <h3 class="title-manage">
                                                Tin đăng
                                            </h3>
                                            <li class="item-manage">
                                                <a href="{{ route('get.user.product_index')}}" class="link-manage d-flex align-items-center">
                                                    <img src="{{ asset('images/escrow_buy_orders.svg') }}" alt=""
                                                        class="img-manage" width="24px" height="24px"
                                                        style="object-fit: contain; margin-right: 12px;">
                                                    <span>Danh sách</span>
                                                </a>
                                            </li>
                                            <li class="item-manage">
                                                <a href="{{ route('get.user.product_create')}}" class="link-manage d-flex align-items-center">
                                                    <img src="{{ asset('images/add-new.svg') }}" alt="Thêm mới"
                                                        class="img-manage" width="24px" height="24px"
                                                        style="object-fit: contain; margin-right: 12px;">
                                                    <span>Thêm mới</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-manage">
                                            <h3 class="title-manage">
                                                Thông tin cá nhân
                                            </h3>
                                            @if (Auth::check())
                                                <li class="item-manage">
                                                    <a href="{{ route('get.user.update_profile') }}" class="link-manage d-flex align-items-center">
                                                        <img src="{{ asset('images/setting.svg') }}" alt=""
                                                            class="img-manage" width="24px" height="24px"
                                                            style="object-fit: contain; margin-right: 12px;">
                                                        <span>Cập nhật thông tin</span>
                                                    </a>
                                                </li>
                                                <li class="item-manage">
                                                    <a href="{{ route('get.logout') }}" title="Đăng xuất" class="link-manage d-flex align-items-center">
                                                        <img src="{{ asset('images/logout.svg') }}" alt=""
                                                            class="img-manage" width="24px" height="24px"
                                                            style="object-fit: contain; margin-right: 12px;">
                                                        <span>Đăng xuất</span>
                                                    </a>
                                                </li>
                                            @else
                                                <li class="item-manage">
                                                    <a href="{{ route('get.login') }}" title="Đăng nhập" class="link-manage d-flex align-items-center">
                                                        <img src="{{ asset('images/setting.svg') }}" alt=""
                                                            class="img-manage" width="24px" height="24px"
                                                            style="object-fit: contain; margin-right: 12px;">
                                                        <span>Đăng nhập</span>
                                                    </a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="search-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="search-item position-relative d-flex">
                        <form style="width: 100%" action="{{ route('get.search') }}">
                            <input type="text" name="k" value="{{ Request::get('k') }}" placeholder="Tìm kiếm trên Chợ Tốt" style="width: 100%">
                            <button class="position-absolute btn-search">
                                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-md-block">
                    <div class="create-news d-flex h-100">
                        <a href="{{ route('get.user.product_create') }}" class="btn-create w-100 d-flex align-items-center justify-content-center">
                            <span class="btn-create-icon"><i class="fa-regular fa-pen-to-square"></i></span>
                            <span class="btn-create-text ml-2">Đăng tin</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-mobile">
    <ul class="header-mobile-list d-flex mb-0 py-1 position-relative">
        <li class="header-mobile-item">
            <a href="#" class="header-mobile-link active d-flex flex-column align-items-center">
                <span class="header-mobile-icon"><i class="fa-solid fa-house"></i></span>
                <span class="header-mobile-text">Trang chủ</span>
            </a>
        </li>
        <li class="header-mobile-item">
            <a href="#" class="header-mobile-link  d-flex flex-column align-items-center">
                <span class="header-mobile-icon"><i class="fa-solid fa-house"></i></span>
                <span class="header-mobile-text">Trang chủ</span>
            </a>
        </li>
        <li class="header-mobile-item">
            <a href="#" class="header-mobile-link create-post d-flex flex-column align-items-center">
                <span class="header-mobile-icon"><i class="fa-regular fa-pen-to-square"></i></span>
                <span class="header-mobile-text">Đăng tin</span>
            </a>
        </li>
        <li class="header-mobile-item">
            <a href="#" class="header-mobile-link  d-flex flex-column align-items-center">
                <span class="header-mobile-icon"><i class="fa-solid fa-house"></i></span>
                <span class="header-mobile-text">Trang chủ</span>
            </a>
        </li>
        <li class="header-mobile-item">
            <a href="#" class="header-mobile-link open-profile-user d-flex flex-column align-items-center">
                <span class="header-mobile-icon"><i class="fa-solid fa-house"></i></span>
                <span class="header-mobile-text">Trang chủ</span>
            </a>

        </li>

    </ul>
</div>
