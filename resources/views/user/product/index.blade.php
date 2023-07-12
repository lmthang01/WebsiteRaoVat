@extends('frontend.layouts.app_frontend')
@section('content')

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcumb">
                    <a href="/">Trang chủ</a>
                    <span class="breadcumb-icon mx-1"><i class="fa-solid fa-angles-right"></i></span>
                    <a href="/">Sản phẩm</a>
                    <span class="breadcumb-icon mx-1"><i class="fa-solid fa-angles-right"></i></span>      
                    <span>Danh sách tin</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Sản phẩm</h2>
                    <a href="{{ route('get_admin.product.create') }}">Thêm mới</a>
                </div>
                <div>
                    <form class="form-inline">
                        <div class="form-group mb-2 mr-2">
                            <label for="inputPassword2" class="sr-only">Tên</label>
                            <input type="text" name="n" class="form-control" value="{{ Request::get('n') }}" placeholder="Tìm tên . . .">
                        </div>

                        <div class="form-group mb-2 mr-2">
                            <label for="inputPassword2" class="sr-only">Trạng thái</label>
                            <select name="status" id="" class="form-control">
                                <option value="">--- Trạng thái ---</option>
                                @foreach($status ?? [] as $key => $item)
                                    <option value="{{ $key }}" {{ (Request::get('status') ?? 0) == $key ? "selected" : "" }}>{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th style="width: 30%">Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products ?? [] as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <a href="{{ route('get.product.by_slug',['slug' => $item->slug]) }}" target="_blank" style="display: inline-block;position: relative">
                                        <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px;height: 60px; border-radius: 10px" alt="">
                                        <span class="badge badge-danger" style="position: absolute;right: 10px;top: 10px">{{ $item->images_count }}</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('get.product.by_slug',['slug' => $item->slug]) }}" target="_blank" style="font-size: 13px;display: inherit">{{ $item->name }}</a>
                                    <span style="font-size: 12px">{{ $item->province->name ?? "..." }} - {{ $item->district->name ?? "..." }} - {{ $item->ward->name ?? "..." }}</span>
                                    <br>
                                    <a style="font-size: 13px" href="{{ route('get.user.product_update', $item->id) }}">Cập nhật</a>
                                    <a style="font-size: 13px" href="{{ route('get.user.product_delete', $item->id) }}">Xoá</a>
                                </td>
                                <td>
                                    <span style="font-size: 13px">{{ $item->category->name ?? "[N\A]" }}</span>
                                </td>
                                <td>
                                    <span style="font-size: 13px">{{ number_format($item->price,0,',','.') }}đ</span>
                                </td>
                                <td>
                                    <span style="font-size: 11px" class="{{ $item->getStatus($item->status)['class'] ?? "badge badge-light" }}">{{ $item->getStatus($item->status)['name'] ?? "Tạm dừng" }}</span>
                                </td>
                                <td>
                                    <span style="font-size: 13px">{{ $item->created_at }}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop