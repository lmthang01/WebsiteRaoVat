<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Province;
use \Illuminate\Support\Facades\File;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category:id,name', 'user:id,name', 'province:id,name', 'district:id,name', 'ward:id,name') 
            ->withCount('images'); // Lấy từ Model

        if ($name = $request->n) // Tìm bằng tên
            $products->where('name', 'like', '%' . $name . '%');

        if ($s = $request->status) // Tìm bằng trạng thái
            $products->where('status', $s);

        $products = $products
            ->orderByDesc('id')
            ->paginate(10); // Phân trang 20 dòng

        $model = new Product();
        $status = $model->getStatus();

        $viewData = [
            'products' => $products,
            'query' => $request->query(),
            'status' => $status
        ];
        return view('backend.product.index', $viewData)->with('i', (request()->input('page', 1) -1) *5);
    }

    public function create()
    {
        $categories = Category::all();
        $model = new Product();
        $status = $model->getStatus();
        $provinces = Province::all();

        return view('backend.product.create', compact('categories', 'status', 'provinces'));
    }

    public function store(ProductRequest $request)
    { // Thêm mới
        // dd($request->all());
        try {
            $data = $request->except('_token', 'avatar'); // Lấy dữ liệu từ $request gửi lên trừ _token và avatar
            $data['slug'] = Str::slug($request->name);
            $data['created_at'] = Carbon::now();

            if ($request->avatar) {
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) {
                    $data['avatar'] = $file['name'];
                }
            }

            $data['user_id'] = Auth::user()->id; // Hiển thị user đăng bán

            $product = Product::create($data);

            if ($request->file) {
                $this->sysncAlbumImageAndProduct($request->file, $product->id);
            }
        } catch (\Exception $exception) {
            Log::error("ERROR => ProductController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.product.index');
        }
        toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get_admin.product.index');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $model = new Product();
        $status = $model->getStatus();
        $provinces = Province::all();
        $product = Product::findOrFail($id);

        // Hiển thị district
        $activeDistricts = DB::table('districts')->where('id', $product->district_id)->pluck('name', 'id')->toArray();

        $activeWards = DB::table('wards')->where('id', $product->ward_id)->pluck('name', 'id')->toArray();

        $images = ProductImage::where('product_id', $id)->orderByDesc('id')->get();

        $viewData = [
            'product' => $product,
            'categories' => $categories,
            'status' => $status,
            'images' => $images,
            'provinces' => $provinces,
            'activeDistricts' => $activeDistricts,
            'activeWards' => $activeWards,
        ];

        return view('backend.product.update', $viewData); // compact(): Tạo mảng với giá trị 'product'
    }

    public function update(ProductRequest $request, $id)
    {
        try {
            $data = $request->except('_token', 'avatar');
            $data['slug'] = Str::slug($request->name);
            $data['updated_at'] = Carbon::now();

            if ($request->avatar) {
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) {
                    $data['avatar'] = $file['name'];
                }
            }

            Product::find($id)->update($data);

            if ($request->file) {
                $this->sysncAlbumImageAndProduct($request->file, $id);
            }
        } catch (\Exception $exception) {
            Log::error("ERROR => ProductController@store => " . $exception->getMessage());
            toastr()->error('Cập nhật thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.product.update', $id);
        }

        toastr()->success('Cập nhật thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get_admin.product.index');
    }

    public function delete(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            if ($product) $product->delete();
        } catch (\Exception $exception) {
            Log::error("ERROR => ProductController@delete => " . $exception->getMessage());
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
        }

        toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get_admin.product.index');
    }

    /* Hiển thị album ảnh */
    public function sysncAlbumImageAndProduct($files, $productID)
    {
        foreach ($files as $key => $fileImage) {
            $ext = $fileImage->getClientOriginalExtension();
            $extend = [
                'png', 'jpg', 'jpeg', 'PNG', 'JPG'
            ];

            if (!in_array($ext, $extend)) return false;

            $filename = date('Y-m-d__') . Str::slug($fileImage->getClientOriginalName()) . '.' . $ext;
            $path = public_path() . '/uploads/' . date('Y/m/d/');

            if (!File::exists($path))
                @mkdir($path, 0777, true);

            // di chuyển vào thư mục upload
            $fileImage->move($path, $filename);
            DB::table('products_images')->insert([
                'name' => $fileImage->getClientOriginalName(),
                'path' =>  $filename,
                'product_id' => $productID,
                'created_at' => Carbon::now(),
            ]);
        }
    }

    /* Xóa album ảnh */
    public function deleteImage($id)
    {
        $image = ProductImage::find($id);
        if ($image) $image->delete();

        return redirect()->back();
    }
}
