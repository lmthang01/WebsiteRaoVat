<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function district(Request $request){

        $districts = District::whereRaw(1);

        if($request->province_id)
            $districts->where('province_id', $request->province_id);
        
            $districts = $districts->get();

            if($request->ajax()){
                return response()->json($districts);
            }
        
        return  $districts;

    }
}
