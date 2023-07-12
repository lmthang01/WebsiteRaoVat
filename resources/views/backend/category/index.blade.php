@extends('backend.layouts.app_backend')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Danh mục</h2>
    <a href="{{ route('get_admin.category.create') }}" class="btn btn-primary"  style="color: azure;">Thêm mới</a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>STT</th>
                <th>Avatar</th>
                <th>Tên danh mục</th>
                <th>Slug</th>
                <th>Mô tả</th>
                <th>Ngày tạo</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category ?? [] as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>
                        <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px; height: 60px; border-radius: 10px" alt="Avatar">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ route('get_admin.category.update', $item->id) }}" class="btn btn-info" style="padding: 5px">Edit</a>
                        <a href="#">|</a>
                        <a href="{{ route('get_admin.category.delete', $item->id) }}" class="btn btn-danger" style="padding: 5px">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $category->links() }}
@stop