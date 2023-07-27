@extends('backend.layouts.app_backend')
@section('content')
    <h2>Tổng quan</h2>
    <div class="row mt-3">
        <div class="col-sm-4">
            <div class="box p-3 mb-2 bg-primary text-white rounded text-center">
                <a href="{{ route('get_admin.user.index') }}">
                    <h5 class="text-white">Thành viên <b>{{ $toltalUsers }}</b></h5>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box p-3 mb-2 bg-danger text-white rounded text-center">
                <a href="{{ route('get_admin.product.index') }}">
                    <h5 class="text-white">Tin đăng <b>{{ $toltalProduct }}</b></h5>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box p-3 mb-2 bg-info text-white rounded text-center">
                <a href="{{ route('get_admin.category.index') }}">
                    <h5 class="text-white">Danh mục <b>{{ $toltalCategory }}</b></h5>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <h4>Thống kê</h4>
        <div class="row mt-3">
            <div class="col">
                @include('backend.home.form')
            </div>
            <div class="col-md-12">
                <div id="chart" style="height: 250px;"></div>
            </div>
        </div>
    </div>

    {{-- <div class="row mt-5">
        <div class="col-md-6">
            <h2>Thành viên mới</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Active</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users ?? [] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <span class="{{ $item->getStatus($item->status)['class'] ?? 'badge badge-light' }}">
                                        {{ $item->getStatus($item->status)['name'] ?? 'Tạm dừng' }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Tin mới</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Người đăng</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products ?? [] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name ?? '[N\A]' }}</td>
                                <td>{{ $item->user->name ?? '[N\A]' }}</td>
                                <td>{{ number_format($item->price, 0, ',', '.') }}đ</td>
                                <td>
                                    <span class="{{ $item->getStatus($item->status)['class'] ?? 'badge badge-light' }}">
                                        {{ $item->getStatus($item->status)['name'] ?? 'Tạm dừng' }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@stop
