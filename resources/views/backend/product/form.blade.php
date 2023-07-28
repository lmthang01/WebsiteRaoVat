<form method="POST" action="" id="alert_form_submit" autocomplete="off" enctype="multipart/form-data">
    <div class="row mb-5">
        <div class="col-sm-8">
            @csrf
            {{-- Lấy dữ liệu order_date của sản phẩm dùng cho thống kê --}}
            <input type="hidden" name="order_date" value="{{ $product->order_date ?? '' }}">
            <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">

            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" name="name" placeholder="Tên sản phẩm" class="form-control"
                    value="{{ old('name', $product->name ?? '') }}">
                @error('name')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea name="description" id="" class="form-control" placeholder="Mô tả ..." cols="30" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
                @error('description')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('description') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea name="content" id="" class="form-control" placeholder="Mô tả ..." cols="30" rows="3">{{ old('content', $product->content ?? '') }}</textarea>
                @error('content')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('content') }}</small>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tỉnh thành</label>
                        <select name="province_id" class="form-control" id="loadDistrict">
                            <option value="">---Chọn tỉnh thành---</option>
                            @foreach ($provinces ?? [] as $item)
                                <option value="{{ $item->id }}"
                                    {{ ($product->province_id ?? 0) == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quận huyện</label>
                        <select name="district_id" class="form-control" id="districtsData">
                            <option value="">---Chọn quận huyện---</option>
                            @foreach ($activeDistricts ?? [] as $key => $item)
                                <option value="{{ $key }}" selected>{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phường xã</label>
                        <select name="ward_id" class="form-control" id="wardData">
                            <option value="">---Chọn phường xã---</option>
                            @foreach ($activeWards ?? [] as $key => $item)
                                <option value="{{ $key }}" selected>{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            @if (isset($images) && !$images->isEmpty())
                @foreach ($images as $item)
                    <a href="{{ route('get_admin.product.delete_image', $item->id) }}"
                        style="margin-bottom: 10px; display: inline-block;">
                        <img src="{{ pare_url_file($item->path) }}"
                            style="width: 100px; height: auto; margin-right: 10px; border: 1px solid #dedede; border-radius: 5px"
                            alt="">
                    </a>
                @endforeach
            @endif

            <div class="form-group">
                <label for="exampleInputEmail1">Album ảnh</label>
                <div class="file-loading">
                    <input type="file" name="file[]" id="images" multiple class="file"
                        data-overwrite-inital="false" data-min-file-count="0">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Danh mục</label>
                <select name="category_id" class="form-control" id="">
                    <option value="">----Chọn danh mục----</option>
                    @foreach ($categories ?? [] as $item)
                        <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}
                            {{ ($product->category_id ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="status" class="form-control" id="">
                    @foreach ($status ?? [] as $key => $item)
                        @if ($key == 1 && ($product->status ?? 0) == $key)
                            <option selected value="1">Khởi tạo</option>
                            <option value="2">Duyệt</option>
                            <option disabled value="3">Đã bán</option>
                            <option value="-1">Hủy bỏ</option>
                        @elseif($key == 2 && ($product->status ?? 0) == $key)
                            <option disabled value="1">Khởi tạo</option>
                            <option selected value="2">Duyệt</option>
                            <option value="3">Đã bán</option>
                            <option disabled value="-1">Hủy bỏ</option>
                        @elseif($key == 3 && ($product->status ?? 0) == $key)
                            <option disabled value="1">Khởi tạo</option>
                            <option disabled value="2">Duyệt</option>
                            <option selected value="3">Đã bán</option>
                            <option disabled value="-1">Hủy bỏ</option>
                        @elseif($key == -1 && ($product->status ?? 0) == $key)
                            <option disabled value="1">Khởi tạo</option>
                            <option disabled value="2">Duyệt</option>
                            <option disabled value="3">Đã bán</option>
                            <option selected value="-1">Hủy bỏ</option>
                        @endif
                        {{-- <option value="{{ $key }}" {{ ($product->status ?? 0) == $key ? 'selected' : '' }}>
                            {{ $item['name'] }}</option> --}}
                    @endforeach
                    @if (($product->status ?? 0) == 0)
                        <option selected value="1">Khởi tạo</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá sản phẩm</label>
                <input type="number" name="price" placeholder="10000" class="form-control "
                    value="{{ old('price', $product->price ?? '0') }}">
                @error('number')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('number') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input type="file" class="form-control" name="avatar">
                @if (isset($product->avatar) && $product->avatar)
                    <img src="{{ pare_url_file($product->avatar) }}"
                        style="width: 60px; height: 60px; border-radius: 10px; margin-top: 10px" alt="">
                @endif
            </div>
        </div>
    </div>
</form>

