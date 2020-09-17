<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Category;
use App\Product;

class PagesController extends Controller
{
    public function index(){
        $data['date'] = Carbon::now()->format('l, d F Y');
        if(Auth::user()) $data['user_role'] = User::role();
        return view('pages.home')->with($data);
    }

    public function categories(){
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['categories'] = Category::all();
        return view('pages.categories.manage_categories')->with($data);
    }

    public function product_category($slug, Request $request){
        $category = Category::where('slug', '=', $slug)->first();
        if(!$category) return redirect()->route('home');
        if(Auth::user()) $data['user_role'] = User::role();
        if($request['query']) $data['products'] = Product::where('category_id', '=', $category->id)->where('name', 'LIKE', '%'.$request['query'].'%')->paginate(1);
        else $data['products'] = Product::where('category_id', '=', $category->id)->where('name', 'LIKE', '%'.$request->query.'%')->paginate(1);

        $data['date'] = Carbon::now()->format('l, d F Y');
        return view('pages.products.product_list')->with($data);
    }

    public function product($slug){
        $data['product'] = Product::where('slug', '=', $slug)->first();
        if(!$data['product']) return redirect()->route('home');

        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        return view('pages.products.product_info')->with($data);
    }
}
