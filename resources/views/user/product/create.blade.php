@extends('frontend.layouts.app_frontend')
@section('content')

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcumb">
                    <a href="/">Trang chủ</a>
                    <span class="breadcumb-icon mx-1"><i class="fa-solid fa-angles-right"></i></span>
                    <a href="{{ route('get.user.product_index') }}">Sản phẩm</a>
                    <span class="breadcumb-icon mx-1"><i class="fa-solid fa-angles-right"></i></span>      
                    <span>Đăng tin</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    @include('backend.product.form')
                </div>
            </div>
        </div>
    </div>
    
@stop