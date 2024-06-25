<?php

namespace App\Http\Controllers;

use App\Models\CarouselGallery;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with('galleries')->take(8)->get();
        $carousels = CarouselGallery::all();
        // dd($carousels);

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products,
            'carousels' => $carousels
        ]);
    }
}
