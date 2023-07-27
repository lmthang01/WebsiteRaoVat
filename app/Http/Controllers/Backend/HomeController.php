<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $toltalUsers = User::select('id')->count();
        $toltalProduct = Product::select('id')->count();
        $toltalCategory = Category::select('id')->count();

        $viewData = [
            'users' => $users,
            'products' => $products,
            'toltalUsers' => $toltalUsers,
            'toltalProduct' => $toltalProduct,
            'toltalCategory' => $toltalCategory,
        ];

        return view('backend.home.index', $viewData);
    }
}
