@extends('backend.layouts.app_backend')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Thêm mới user</h2>
    <a href="{{ route('get_admin.user.index') }}" class="btn btn-dark">Trở về</a>
</div>
<div class="row">
    <div class="col-md-8">
        @include('backend.user.form')
    </div>
</div>

@stop