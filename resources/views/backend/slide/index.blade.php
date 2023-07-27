@extends('backend.layouts.app_backend')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Slide</h2>
        <a href="{{ route('get_admin.slide.create') }}" class="btn btn-primary" style="color: azure;">Thêm mới</a>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides ?? [] as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                <img src="{{ pare_url_file($item->avatar) }}"
                                    style="width: 60px; height: 60px; border-radius: 10px; object-fit: contain"
                                    alt="">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->link }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="{{ route('get_admin.slide.update', $item->id) }}" class="btn btn-info"
                                    style="padding: 5px">Edit</a>
                                <a href="#">|</a>
                                <a href="{{ route('get_admin.slide.delete', $item->id) }}" class="btn btn-danger"
                                    style="padding: 5px" id="delete_alert">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $slides->links() }}

@stop
