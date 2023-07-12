<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slide;



class HomeController extends Controller
{
    public function index(){
        $productNews = Product::with('province:id,name')->where('status', Product::STATUS_SUCCESS)
        ->orderByDesc('id')
        ->limit(18)
        ->get();

        $categories = Category::all();
        $slides = Slide::all();

        $viewData = [
            'productNews' => $productNews,
            'categories' => $categories,
            'slides' => $slides
        ];

        return view('frontend.home.index', $viewData);
    }
}
