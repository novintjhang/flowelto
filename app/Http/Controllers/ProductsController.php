<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Category;
use App\User;
use App\Product;
use Carbon\Carbon;
use File;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['categories'] = Category::all();
        return view('pages.products.create_product')->with($data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'category_id' => 'required',
            'name' => 'required|unique:products|min:5',
            'price' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
            'thumbnail' => 'required|mimes:jpeg,jpg,png,bmp,tiff,svg|max:4096',
        ));

        $file = $request->file('thumbnail');
        $name = strtolower(Str::random(10));
        $ext = strtolower($file->getClientOriginalExtension());
        $path = public_path('images/');
        $filename = $name.'-'.time().".".$ext;
        $file->move($path, $filename);

        $product = new Product;
        $product->name = $request->name;
        $product->slug = strtolower(Str::slug($request->name, '-'));
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->thumbnail = $filename;
        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()) $data['user_role'] = User::role();
        $data['date'] = Carbon::now()->format('l, d F Y');
        $data['categories'] = Category::all();
        $data['product'] = Product::find($id);
        if($data['product']) return view('pages.products.edit_product')->with($data); 
        else return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'category_id' => 'required',
            'name' => 'required|unique:products|min:5',
            'price' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png,bmp,tiff,svg|max:4096',
        ));

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = strtolower(Str::slug($request->name, '-'));
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->description = $request->description;

        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $name = strtolower(Str::random(10));
            $ext = strtolower($file->getClientOriginalExtension());
            $path = public_path('images/');
            $filename = $name.'-'.time().".".$ext;
            $file->move($path, $filename);
            $product->thumbnail = $filename;
        }

        $product->save();
        return redirect()->route('product_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }
}
