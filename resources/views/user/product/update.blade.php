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
                    <span>Cập nhật</span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mr-3">
            <h2> </h2>
            <a href="/" class="btn btn-primary">Trở về</a>
        </div>
        <div class="row">
            @include('user.product.form')
        </div>
    </div>

@stop
