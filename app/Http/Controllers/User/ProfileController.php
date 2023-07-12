<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.update_profile', compact('user'));
    }

    public function updateProfile(Request $request){
        try {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->updated_at = Carbon::now();

            if ($request->avatar){
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) $user->avatar = $file['name'];
            }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            $user->save();
        } catch (\Exception $exception) {
            toastr()->error('Cập nhật thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => ProfileController@updateProfile => ". $exception->getMessage());
        }
        return redirect()->back();
    }
}
