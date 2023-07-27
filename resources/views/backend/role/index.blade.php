@extends('backend.layouts.app_backend')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Danh sách</h2>
        <a href="{{ route('get_admin.role.create') }}" class="btn btn-primary" style="color: azure;">Thêm mới</a>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Guard Name</th>
                        <th>Description</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles ?? [] as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->guard_name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('get_admin.role.update', $item->id) }}" class="btn btn-info"
                                    style="padding: 5px">Edit</a>
                                <a href="#">|</a>
                                <a href="{{ route('get_admin.role.delete', $item->id) }}" class="btn btn-danger"
                                    style="padding: 5px" id="delete_alert">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $roles->links() }}

@stop
