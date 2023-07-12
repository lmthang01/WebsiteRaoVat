@extends('backend.layouts.app_backend')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Sản phẩm</h2>
    <a href="{{ route('get_admin.product.create') }}" class="btn btn-primary"  style="color: azure;">Thêm mới</a>
</div>
<div>
    <form class="form-inline">
        <div class="form-group mb-2 mr-2">
          <label for="inputPassword2" class="sr-only">Tên</label>
          <input type="text" name="n" class="form-control" value="{{ Request::get('n') }}" placeholder="Nhập tên sản phẩm ">
        </div>

        <div class="form-group mb-2 mr-2">
            <label for="inputPassword2" class="sr-only">Trạng thái</label>
            <select name="status" class="form-control" id="">
                <option value="">-- Chọn trạng thái --</option>
                @foreach ($status ?? [] as $key => $item)
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
                <th>STT</th>
                <th>Avatar</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Người đăng</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Mô tả</th>
                <th>Ngày tạo</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products ?? [] as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>
                        <a href="" style="display: inline-block; position: relative;">
                            <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px; height: 60px; border-radius: 10px" alt="">
                            <span class="badge badge-danger" style="position: absolute; right: 10px; top: 10px;">{{ $item->images_count }}</span>
                        </a>
                       
                    </td>
                    <td>
                        {{ $item->name }} <br>
                        <span> {{ $item->province->name ?? "..." }} - {{ $item->district->name ?? "..." }} - {{ $item->ward->name ?? "..." }}</span>
                    </td>
                    <td>{{ $item->category->name ?? "[N\A]" }}</td>
                    <td>{{ $item->user->name ?? "[N\A]" }}</td>
                    <td>{{ number_format($item->price,0,',','.') }}đ</td>
                    <td>
                        <span class="{{ $item->getStatus($item->status)['class'] ?? "badge badge-light" }}">
                            {{ $item->getStatus($item->status)['name'] ?? "Tạm dừng" }}
                        </span>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ route('get_admin.product.update', $item->id) }}" class="btn btn-info" style="padding: 5px">Edit</a>
                        <a href="#">|</a>
                        <a href="{{ route('get_admin.product.delete', $item->id) }}" class="btn btn-danger" style="padding: 5px">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $products->links() }}
@stop