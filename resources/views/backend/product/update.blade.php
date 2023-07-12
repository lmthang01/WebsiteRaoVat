@extends('backend.layouts.app_backend')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h2>Cập nhật</h2>
    <a href="{{ route('get_admin.product.index') }}" class="btn btn-dark">Trở về</a>
</div>
{{-- <div class="row">
    <div class="col-md-8">
        @include('backend.product.form')
    </div>
</div> --}}

@include('backend.product.form')

@stop
