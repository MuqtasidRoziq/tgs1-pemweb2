<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        $title = 'Homepage';
        return view('web.homepage', ['title' =>$title, 'categories' => $categories]);
    }

    public function produk()
    {
        $title = 'Produk';
        return view('web.products', ['title' => $title]);
    }

    public function detailProduct($slug)
    {
        $title = 'Detail Product';
        return view('web.detail-product', ['title' => $title , 'slug' => $slug]);
    }

    public function cart()
    {
        $title = 'Cart';
        return view('web.cart', ['title' => $title]);
    }

    public function checkout()
    {
        $title = 'Checkout';
        return view('web.checkout', ['title' => $title]);
    }

    public function categoriesMale()
    {
        $title = 'Categories Male';
        return view('web.categories-male', ['title' => $title]);
    }

    public function categoriesFemale()
    {
        $title = 'Categories Female';
        return view('web.categories-female', ['title' => $title]);
    }

    public function categoriesKids()
    {
        $title = 'Categories Kids';
        return view('web.categories-kids', ['title' => $title]);
    }

}
