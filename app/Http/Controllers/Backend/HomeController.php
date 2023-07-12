<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slide;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $users = User::with('userType')->orderByDesc('id')->limit(10)->get();

        $products = Product::with('category:id,name', 'user:id,name')
            ->withCount('images')
            ->limit(10)
            ->orderByDesc('id')
            ->get();
        
        
        $viewData = [
            'users' => $users,
            'products' => $products,
            
        ];

        return view('backend.home.index', $viewData);
    }
}
