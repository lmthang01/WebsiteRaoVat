<form autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-2">
            <p>Từ ngày: <input type="text" id="datepicker" class="form-control mt-2"></p>
            <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
        </div>
        <div class="col-md-2">
            <p>Đến ngày ngày: <input type="text" id="datepicker2" class="form-control mt-2"></p>
        </div>
        <div class="col-md-2">
            <p>Lọc theo:
                <select name="" class="dashboard-filter form-control mt-2" id="">
                    <option value="">---Chọn---</option>
                    <option value="7ngay">7 Ngày qua</option>
                    <option value="thangtruoc">Tháng trước</option>
                    <option value="thangnay">Tháng này</option>
                    <option value="365ngayqua">365 ngày qua</option>
                </select>
            </p>
        </div>
    </div>
</form>
