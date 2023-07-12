<form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên</label>
        <input type="text" name="name" placeholder="Tên slide" class="form-control"
            value="{{ old('name', $slide->name ?? '') }}">
        @error('name')
            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Link</label>
        <input type="text" name="link" placeholder="Link " class="form-control"
            value="{{ old('name', $slide->name ?? '') }}">
        @error('name')
            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('link') }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Hình ảnh</label>
        <input type="file" class="form-control" name="avatar">

        @if (isset($slide->avatar) && $slide->avatar)
            <img src="{{ pare_url_file($slide->avatar) }}" style="width: 60px; height: 60px; border-radius: 10px; margin-top: 10px" alt="">
        @endif

    </div>
    <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
</form>
