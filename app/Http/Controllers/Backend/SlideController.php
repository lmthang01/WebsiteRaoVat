<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SlideController extends Controller
{
    public function index(){
        $slides = Slide::orderByDesc('id')->paginate(10); // Phân trang 20 dòng
        $viewData = [
            'slides' => $slides
        ];
        return view('backend.slide.index', $viewData)->with('i', (request()->input('page', 1) -1) *5);
    }

    public function create(){
        return view('backend.slide.create');
    }

    public function store(Request $request){
        // dd($request->all());
        try {
            $data = $request->except('_token', 'avatar'); // Lấy dữ liệu từ $request gửi lên trừ _token và avatar
            $data['created_at'] = Carbon::now();

            if($request->avatar){
                $file = upload_image('avatar');
                if(isset($file['code']) && $file['code'] == 1){
                    $data['avatar'] = $file['name'];
                }
            }

            $slide = Slide::create($data);
        } catch (\Exception $exception) {
            Log::error("ERROR => SlideController@store => ". $exception->getMessage());
            return redirect()->route('get_admin.slide.index');
        }
        return redirect()->route('get_admin.slide.index');
    }

    public function edit($id){
        $slide = Slide::findOrFail($id);
        return view('backend.slide.update', compact('slide')); // compact(): Tạo mảng với giá trị 'category'
    }

    public function update(Request $request, $id){
        try {
            $data = $request->except('_token', 'avatar');
            $data['updated_at'] = Carbon::now();

            // dd($request->all());
            if($request->avatar){
                $file = upload_image('avatar');
                if(isset($file['code']) && $file['code'] == 1){
                    $data['avatar'] = $file['name'];
                }
            }

            Slide::find($id)->update($data);
        } catch (\Exception $exception) {
            Log::error("ERROR => SlideController@store => ". $exception->getMessage());
            return redirect()->route('get_admin.slide.update', $id);
        }
        return redirect()->route('get_admin.slide.index');
    }

    public function delete(Request $request, $id){
        try {
            $slide = Slide::findOrFail($id);
            if($slide) $slide->delete();

        } catch (\Exception $exception) {
            Log::error("ERROR => SlideController@delete => ". $exception->getMessage());
        }
        return redirect()->route('get_admin.slide.index');
    }
}
